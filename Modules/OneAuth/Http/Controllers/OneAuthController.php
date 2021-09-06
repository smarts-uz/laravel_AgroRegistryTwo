<?php

namespace Modules\OneAuth\Http\Controllers;

use App\Models\User;
use App\Services\AuthLogService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Modules\OneAuth\Entities\AuthLog;
use Illuminate\Contracts\Support\Renderable;
use Modules\OneAuth\Services\OneAuthService;

class OneAuthController extends Controller
{
    public function index()
    {
        return view('oneauth::index');
    }

    public function auth(Request $request)
    {
        try {
            $oneAuthService = new OneAuthService();
            $response = $oneAuthService->getAccessToken($request->code);
            $response = $oneAuthService->getOneAuthData($response->access_token);
            $params = $oneAuthService->makeParams($response);
            $oneAuthService->authorizeUser($params);

            AuthLogService::logAuth();

        } catch (\Throwable $th) {
            $errorMessage = "Киришда хатолик юз берди, илтимос кейинроқ уруниб кўринг.";
            if(in_array($th->getCode(), [401])) {
                $errorMessage = $th->getMessage();
            }

            Log::error(sprintf("OneID error: Message: %s, Line: %s, File: %s", $th->getMessage(), $th->getLine(), $th->getFile()));
            return redirect()->route('oneauth.index')->with('error', $errorMessage);
        }

        // redirect user on successfully authorization
        return redirect()->route('user.show', auth()->user()->id)->with('status', "Тизимга кирдингиз");
    }
}

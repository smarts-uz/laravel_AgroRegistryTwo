<?php

namespace App\Http\Controllers\admin\auth;

use App\Services\EriService;
use Illuminate\Http\Request;
use App\Services\AuthLogService;
use Illuminate\Support\Facades\Log;
use App\Domain\ERI\Requests\EriRequest;
use TCG\Voyager\Http\Controllers\VoyagerController;

class VoyagerEriController extends VoyagerController
{
    public function index(){
        return view("auth.Eri.login");
    }
    public function auth(EriRequest $request) {
        try {
            $oneAuthService = new EriService();
            $params = $oneAuthService->makeParams($request->validated());
            $oneAuthService->authorizeUser($params);

            AuthLogService::logAuth();

        } catch (\Throwable $th) {
            $errorMessage = "Киришда хатолик юз берди, илтимос кейинроқ уруниб кўринг.";
            if(in_array($th->getCode(), [401])) {
                $errorMessage = $th->getMessage();
            }

            Log::error(sprintf("ERI error: Message: %s, Line: %s, File: %s", $th->getMessage(), $th->getLine(), $th->getFile()));
            return redirect()->route('voyager.login')->with('error', $errorMessage);
        }

        // redirect user on successfully authorization
        return redirect('/admin');
        // return redirect()->route('voyager.a', auth()->user()->id)->with('status', "Тизимга кирдингиз");
    }
}

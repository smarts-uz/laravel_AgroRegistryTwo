<?php

namespace Modules\Impersonate\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Filters\User\UserFilter;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Support\Renderable;
use Modules\Impersonate\Services\ImpersonateService;

class ImpersonateController extends Controller
{
    protected const PAGINATION_COUNT = 20;

    public function index(Request $request)
    {
        $sort = $request->has('sort') && !empty($request->sort) ? $request->sort : 'id';
        $direction = $request->has('direction') && !empty($request->direction) ? $request->direction : 'ASC';

        $users = User::orderBy($sort, $direction)
            ->byUser()
            ->filter(new UserFilter($request))
            ->paginate(self::PAGINATION_COUNT);

        return view('impersonate::index', compact('users'));
    }

    public function start(User $user, ImpersonateService $service)
    {
        $auth_user = auth()->user();

        if($auth_user->hasRole(['superadmin', 'admin'])) {
            Session::flash('status', 'Тизимда фойдаланувчингиз: ' . $user->name);
            $service->setImpersonating($user->id);
        } else {
            Session::flash('error', 'Бу амални бажариш учун сизда хукук етарли эмас.');
        }

        return redirect()->route('home');
    }

    public function stop(ImpersonateService $service)
    {
        $service->stopImpersonating();
        Session::flash('status', 'Фойдаланувчингизга кайтдингиз.');

        return redirect()->route('impersonate.index');
    }
}

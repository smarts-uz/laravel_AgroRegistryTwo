<?php

namespace Modules\User\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Filters\User\UserFilter;
use Spatie\Permission\Models\Permission;
use Illuminate\Contracts\Support\Renderable;
use Modules\User\Http\Requests\CreateRequest;
use Modules\User\Http\Requests\UpdateRequest;

class UserController extends Controller
{
    protected const PAGINATION_COUNT = 20;

    public function __construct()
    {
        $this->middleware('can:see users', ['only' => ['index']]);
        $this->middleware('can:create users', ['only' => ['create', 'store']]);
        $this->middleware('can:edit users', ['only' => ['edit', 'update']]);
        $this->middleware('can:delete users', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $sort = $request->has('sort') && !empty($request->sort) ? $request->sort : 'id';
        $direction = $request->has('direction') && !empty($request->direction) ? $request->direction : 'ASC';

        $users = User::orderBy($sort, $direction)
            ->byUser()
            ->filter(new UserFilter($request))
            ->trashCondition($request->has('with_trashed'))
            ->paginate(self::PAGINATION_COUNT);

        return view('user::index', compact('users'));
    }

    public function create()
    {
        $roles = Role::query()->pluck('name')->toArray();
        $permissions = Permission::query()->pluck('name')->toArray();

        return view('user::create', compact('roles', 'permissions'));
    }

    public function store(CreateRequest $request)
    {
        $validated = $request->validated();
        try {
            $validated['permissions'] = isset($validated['permissions']) ? $validated['permissions'] : [];
            $validated['roles'] = isset($validated['roles']) ? $validated['roles'] : [];
            $validated['password'] = Hash::make($validated['password']);
            // CREATE USER
            $user = User::create($validated);
            // SET ROLES
            $user->syncPermissions($validated['permissions']);
            $user->syncRoles($validated['roles']);

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage())->withInput();
        }

        return redirect()->route('user.index', $user->id)->with('status', trans("user::trans.success_saved"));
    }

    public function edit(User $user)
    {
        $roles = Role::query()->pluck('name')->toArray();
        $permissions = Permission::query()->pluck('name')->toArray();

        return view('user::edit', compact('user', 'roles', 'permissions'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        $validated = $request->validated();

        try {
            // CHECK PASSWORD
            if(is_null($validated['password'])) {
                unset($validated['password']);
            }

            // HASH PASSWORD IF PROVIDED
            if(isset($validated['password'])) {
                $validated['password'] = Hash::make($validated['password']);
            }

            // UPDATE USER
            $user->fill($validated);
            $user->save();

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage())->withInput();
        }

        return redirect()->route('user.index', $user->id)->with('status', trans("user::trans.success_saved"));
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage())->withInput();
        }

        return redirect()->route('user.index')->with('status', trans("user::trans.delete_success"));
    }

    public function restore($user_id)
    {
        try {
            User::onlyTrashed()->where('id', $user_id)->restore();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage())->withInput();
        }

        return redirect()->route('user.index')->with('status', trans("user::trans.restore_success"));
    }
}

<?php

namespace Modules\User\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Contracts\Support\Renderable;
use Modules\User\Http\Requests\UpdateUserConfigRequest;

class UserConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:edit users', ['only' => ['edit', 'update']]);
    }

    public function edit(User $user)
    {
        $roles = Role::query()->pluck('name')->toArray();
        $permissions = Permission::query()->pluck('name')->toArray();

        return view('user::config.edit', compact('user', 'roles', 'permissions'));
    }

    public function update(UpdateUserConfigRequest $request, User $user)
    {
        $validated = $request->validated();

        try {
            $validated['permissions'] = isset($validated['permissions']) ? $validated['permissions'] : [];
            $validated['roles'] = isset($validated['roles']) ? $validated['roles'] : [];

            // UPDATE USER
            $user->fill($validated);
            $user->save();

            // UPDATE USER ROLES
            $user->syncPermissions($validated['permissions']);
            $user->syncRoles($validated['roles']);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage())->withInput();
        }

        return redirect()->route('user.config.edit', $user->id)->with('status', trans("user::trans.success_saved"));
    }
}

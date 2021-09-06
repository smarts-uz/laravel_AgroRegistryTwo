<?php

namespace Modules\User\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Modules\User\Http\Requests\UpdateExtraRequest;

class UserProfileController extends Controller
{
    public function editExtra(User $user) {
        return view('user::show', compact('user'));
    }

    public function updateExtra(UpdateExtraRequest $request, User $user) {
        $validated = $request->validated();

        if(isset($validated['passport_expire_date'])) {
            $validated['passport_expire_date'] = Carbon::parse($validated['passport_expire_date'])->format("Y-m-d");
        }

        $fullname = "";
        if(isset($validated['lastname'])) $fullname .= $validated['lastname'];
        if(isset($validated['firstname'])) $fullname .= " " . $validated['firstname'];
        if(isset($validated['midname'])) $fullname .= " ". $validated['midname'];
        if(!empty($fullname)) $validated['fullname'] = $fullname;

        try {
            $user->fill($validated);
            $user->save();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage())->withInput();
        }

        return redirect()->route('user.show', $user->id)->with('status', "Муваффакиятли сакланди.");
    }

    public function actions(User $user) {
        $user->load('logins');
        return view('user::actions', compact('user'));
    }
}

<?php

namespace Modules\User\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Region\Entities\UzRegion;
use Modules\User\Entities\UserCompany;
use Illuminate\Contracts\Support\Renderable;
use Modules\User\Http\Requests\UpdateUserCompanyRequest;

class CompanyController extends Controller
{
    public function edit(User $user)
    {
        $regions = UzRegion::query()->pluck('nameuz', 'regionid')->toArray();
        return view('user::company.edit', compact('user', 'regions'));
    }

    public function update(UpdateUserCompanyRequest $request, User $user)
    {
        $validated = $request->validated();
        $validated['user_id'] = $user->id;

        // PREPARE USER'S INFO
        $data = [];
        $data['department'] = $validated['department'];
        $data['region_id'] = isset($validated['region_id']) && in_array($data['department'], [2,3,4]) ? $validated['region_id'] : null;
        $data['district_id'] = isset($validated['district_id']) && in_array($data['department'], [3]) ? $validated['district_id'] : null;

        // ONLY COMPANY FIELDS
        unset($validated['department']);
        unset($validated['region_id']);
        unset($validated['district_id']);

        try {
            // SAVE USER'S COMPANY INFO
            UserCompany::updateOrCreate(['user_id' => $user->id], $validated);

            // SAVE USER'S INFO
            $user->fill($data);
            $user->save();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage())->withInput();
        }

        return redirect()->route('user.company.edit', $user->id)->with('status', trans("user::trans.success_saved"));
    }
}

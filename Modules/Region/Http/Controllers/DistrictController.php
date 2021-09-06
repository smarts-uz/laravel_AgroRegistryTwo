<?php

namespace Modules\Region\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Region\Entities\UzRegion;
use Modules\Region\Entities\UzDistrict;
use App\Http\Filters\District\DistrictFilter;
use Modules\Region\Http\Requests\StoreRequest;

class DistrictController extends Controller
{
    public function index(Request $request) {
        $user = auth()->user();

        $regions = UzRegion::orderBy('id', 'asc')->pluck('nameuz', 'regionid')->toArray();
        $districts = UzDistrict::filter(new DistrictFilter($request))->orderBy('id', 'asc')->filters();

        // if(!is_null($user->region_id) && !in_array($user->name, ['superadmin', 'operator'])) {
        //     $districts->where('regionid', $user->region_id);
        // }

        if(request()->filled('region_id')) {
            $districts->where('regionid', $request->input('region_id'));
        }

        $districts = $districts->paginate(30);
        return view("region::district.index", ['regions' => $regions, 'districts' => $districts]);
    }

    public function store(StoreRequest $request) {
        # create single user
        if(!$request->store()) {
            return redirect()->back()->withInput();
        }
        # redirect to the page with success message
        return redirect()->route("district.index", ['region_id' => $request->regionid])->with('status', trans('region::trans.success_saved'));
    }
}

<?php

namespace Modules\Region\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Modules\Region\Entities\UzDistrict;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('create region');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'regionid' => 'required',
            'areaid' => 'required|unique:uz_districts',
            'nameuz' => 'required',
            'nameru' => 'required',
        ];
    }

    public function store() {
        # begin DB transaction
        DB::beginTransaction();
        try {
            $data = $this->validated();
            $data['areacode'] = substr($data['areaid'], -3);

            # create area
            UzDistrict::create($data);
        } catch (\Exception $e) {
            # rollback DB transaction if fails
            DB::rollback();
            Session::flash('error', $e->getCode() . "-kodli " . $e->getMessage() . " xatolik yuz berdi.");
            return false;
        }

        # commit DB transaction if success
        DB::commit();
        return true;
    }
}

<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserCompanyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'inn' => 'required|numeric|digits:9',
            'address' => 'required',
            'index' => 'required|numeric|digits:6',
            'email' => 'required|email',
            'phone' => 'required|digits:9',
            'department' => 'required|not_in:0',
            'region_id' => 'required_if:department,2,3,4|nullable',
            'district_id' => 'required_if:department,3|nullable',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('edit users');
    }
}

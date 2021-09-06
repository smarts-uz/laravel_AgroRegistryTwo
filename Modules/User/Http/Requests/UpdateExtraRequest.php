<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExtraRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'passport' => str_replace('_', '', $this->passport),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'extra_info' => 'sometimes',
            'phone' => 'required|numeric|digits:9',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'firstname' => 'required_if:auth_type,eri',
            'lastname' => 'required_if:auth_type,eri',
            'midname' => 'required_if:auth_type,eri',
            'passport' => 'required_if:auth_type,eri|string|min:9|max:9',
            'passport_expire_date' => 'required_if:auth_type,eri',
        ];
    }
}

<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'password' => 'sometimes|nullable|confirmed|min:6',
            'permissions' => 'sometimes',
            'roles' => 'sometimes',
        ];
    }

    public function authorize()
    {
        return auth()->user()->can('edit users');
    }
}

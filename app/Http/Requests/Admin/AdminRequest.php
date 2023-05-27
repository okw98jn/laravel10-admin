<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        if (request()->has('back')) {
            return [];
        }

        $rules = [
            'name'       => ['required'],
            'login_id'   => [
                'required',
                Rule::unique('admins')->ignore($this->id ?? null)->whereNull('deleted_at'),
            ],
            'role'       => ['required'],
            'status'     => ['required'],
        ];

        // パスワードは登録時のみバリデーションをかける
        if (empty($this->id)) {
            $rules['password']              = ['required', 'confirmed', Password::min(8)];
            $rules['password_confirmation'] = ['required'];
        }

        return $rules;
    }
}

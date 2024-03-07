<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password;


class CompanyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'company'=>'required',
            'domain'=>'required|unique:domains',
            'name'=>'required',
            'email'=>'required|email',
            'number'=>'numeric',

            'password'=>['required','confirmed',Password::defaults()],

        ];
    }
    public function prepareForValidation(){
        $this->merge([
            'domain'=>$this->domain . '.' . config('tenancy.central_domains')[1],
        ]);
    }
}

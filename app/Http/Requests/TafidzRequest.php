<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TafidzRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rule_tahfidz_unique = Rule::unique('tahfidzs', 'tahfidz');
        if($this->method() !== 'POST') {
            $rule_tahfidz_unique->ignore($this->route()->parameter('id'));
        }

        return [
            'nama'=>['required', $rule_tahfidz_unique],
            'surat'=>['required'],
            'status'=>['required']
        ];
    }

    public function messages() {

        return [
            'nama.required'=>'Silahkan mengisi namanya',
            'surat.required'=>'Silhakan mengisi suratnya',
            'status.required'=>'Silqhakan mengisi ayatnya'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'applyName'=>'required',
            'applyAge'=>'required',
            'applyGender'=>'required',
            'applyJapanese'=>'required',
            'applyVisa'=>'required',
            'applyHistory'=>'required',
            'applySns'=>'required',
        ];
    }
}

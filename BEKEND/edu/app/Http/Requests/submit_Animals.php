<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Animals extends FormRequest
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
        return [
            "kutya"=>"required|min:4",
            "macska"=>"required",
            "madár"=>"required|digits_beetwen:5,10"
        ];
    }
}

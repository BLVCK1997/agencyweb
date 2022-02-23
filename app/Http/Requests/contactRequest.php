<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
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
            //
                "subject"=>"bail|required",
                "name"=>"bail|required|min:2",
                "firstname"=>"bail|required|min:2",
                "email"=>"bail|required",
                "phone"=>"bail|required",
                "entreprise"=>"bail|required",
                "message"=>"bail|message"
        ];
    }
}

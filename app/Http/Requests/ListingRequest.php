<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListingRequest extends FormRequest
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
            'name'=> 'required|alpha|max:20',
            'address'=>'required|max:20',
            'website'=>'required|max:20',
            'email'=>'required|email:rfc,dns',
            'phone'=>'required|min:11|numeric',
            'bio'=>'required|max:20',
        ];
    }
}

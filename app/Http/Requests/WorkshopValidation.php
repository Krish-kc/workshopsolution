<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkshopValidation extends FormRequest
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
            'name'=>'required|max:20',
            'PAN'=>'required|numeric',
            'location'=>'required',
            'starting_time'=>'required',
            'ending_time'=>'required',
            // 'image' => 'image|required',
            'description'=>'required',
            'no_of_staff'=>'numeric',

        ];
    }


    public function messages()
    {
        return[
            'name.required'=>'The name must be inserted',
            'PAN.required'=>'The PAN must be inserted',
            'location.required'=>'The location must be inserted',
            'starting_time.required'=>'The starting time must be inserted',
            'ending_time.required'=>'The ending time must be inserted',
            'image.required|mimes:png,jpg|max:1000'=>'The image must be less then 2Mb',
            'description.required'=>'The description must be inserted',
        ];
    }
}

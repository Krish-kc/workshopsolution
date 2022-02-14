<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRecordValidation extends FormRequest
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
            'date'=>'required|date',
            'kilometer'=>'required',
            'part_change'=>'required',
            'service_charge'=>'required',
            'service_duration'=>'required',
            'nextService'=>'required|date',
            'description'=>'required',
            'serviceCenter_name'=>'required',
            'image'=>'mimes:jpeg,jpg,png|required|max:1000',
        ];
    }

    public function messages()
    {
        return[
            'date.required'=>'The name Date be inserted',
            'kilometer.required'=>'The Kilometer must be inserted',
            'part_change.required'=>'The Part Change must be inserted',
            'service_charge.required'=>'The Service Charge must be inserted',
            'service_duration.required'=>'The Service Duration must be inserted',
            'nextService.required'=>'The Next Service date must be inserted',
            'serviceCenter_name.required'=>'The ServiceCenter Name date must be inserted',
            'image.required|mimes:png,jpg|max:1000'=>'The image must be less then 2Mb',
            'description.required'=>'The description must be inserted',
        ];
    }
}

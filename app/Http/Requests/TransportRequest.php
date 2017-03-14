<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransportRequest extends FormRequest
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
            'adress'=>'required|max:255',
            'mark_vechicle' => 'required',
            'priority' => 'required',
            'time' => 'required',
            'comments' => 'required'
        ];
    }
        public function messages(){
        return [
            'adress.required'=> 'Pole adresu jest wymagane',
            'mark_vechicle.required'=> 'Pole marki samochodu jest wymagane',
            'priority.required'=> 'Proszę wybrać priorytet',
            'time.required'=> 'Proszę oznaczyć w porę dnia',
            'comments.required'=> 'Proszę nadać uwagę lub wprowadzić dokument',
        ];
        }
}

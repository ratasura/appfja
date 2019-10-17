<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UbicacionFormRequest extends FormRequest
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
            'provincia' => 'required',
            'canton' => 'required',
            'edificio' => 'required',        
    	    'piso' => 'required',
            'unidad' => 'required',
    	    'tecnico' => 'required'        ];
    }
}

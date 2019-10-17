<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputadorFormRequest extends FormRequest
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
            'tipo'=> 'required|max:50',
            'nombre' => 'required|max:50',
            'responsable' => 'required|max:50',
            'ram' => 'required|max:50',
            'hdd' => 'required|max:50',
            'marca' => 'required|max:50',
            'modelo' => 'required|max:50',
            'serie' => 'required|max:50',
            'caf' => 'required|max:50',
            'idmonitor'=> 'required',
            'idteclado'=> 'required',
            'idmouse'=> 'required',
            'idubicacion' => 'required'
        ];
    }
}

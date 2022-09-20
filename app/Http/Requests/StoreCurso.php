<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
            // si estas reglas fallan, te retorna al formulario 
            'name'=> 'required|max:10',
            'description'=> 'required|min:5',
            'categoria'=> 'required'
            //
        ];
    }

    public function attributes(){
        return [
            'name' => 'nombre del curso'
        ];
    }

    public function messages(){
        return [
            'description.required' => 'Debe ingresar una descripcion del curso',
            'description.min:5' => 'La descripcion debe tener menos de 5 carateres'
        ];
    }
}

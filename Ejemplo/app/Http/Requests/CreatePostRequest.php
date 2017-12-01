<?php

namespace App\Http\Requests;
//PARA CREAR ESTA CLASE USO EL COMANDO PHP ARTISAN MAKE:REQUEST 'NOMBREDECLASE'
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()//ESTE METODO SE ASEGURA SI EL USUARIO ESTA AUTORIZADO
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()//REGLAS DE VALIDACION DEL FORMULARIO
    {
        return [
          'title' => 'required',
          'url' => 'required|url'
        ];
    }
}

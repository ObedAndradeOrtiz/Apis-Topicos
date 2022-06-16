<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarEventoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "titulo"=>"required",
            "tipo"=>"required",
            "rest_edad"=>"required",
            "descripcion"=>"required",
            "cantidad_ubi"=>"required",
            "file_img"=>"required",
            "link_video"=>"required"
        ];
    }
}

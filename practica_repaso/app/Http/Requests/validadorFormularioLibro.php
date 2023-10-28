<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormularioLibro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'txtISBN' => ['required', 'regex:/^[0-9]+$/', 'min:13'],
            'txtTitulo' => 'required|max:25',
            'txtAutor' => 'required',
            'txtPaginas' => 'required|numeric',
            'txtEditorial' => 'required',
            'txtEmail' => 'required|email',
        ];
    }
}

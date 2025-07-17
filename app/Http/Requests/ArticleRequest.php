<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            "title" => "required|string|max:255",
            "content" => "required|string|",
            "author" => "required|string|max:200",
            "image" => "required|image|mimes:jpg,jpeg,phg|max:4096"
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Il titopo è obbligatorio.",
            "title.string" => "Puoi inserire solo testi.",
            "title.max" => "Hai superato i 255 caratteri.",
            "content.required" => "Il contenuto è obbligatorio.",
            "content.string" => "Puoi inserire solo testi.",
            "author.required" => "L'autore è obbligatorio.",
            "author.max:200" => "Hai superato i 200 caratteri.",
            "image.required" => "L'immagine è obbligatoria.",
            "image.requires" => "L'articolo deve contenere un'immagine.",
            "image.mimes" => "L'immagine deve essere in formato jpg, jpeg o png.",
            "image.max" => "L'immagine non può superare i 4MB."
        ];
    }
}

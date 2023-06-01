<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title'=>'required|min:5|max:80',
            'description'=>'required|max:5000',
            'thumb'=>'required',
            'price'=>'required|min:2|max:500',
            'series'=>'required|min:10|max:200',
            'sale_date'=>'required|max:300',
            'type'=>'required|min:5|max:200'
        ];
    }

    public function messages(){
        return[
            'title.required' => 'Titolo obbligatorio',
            'title.max' => 'Ammessi massimo 80 caratteri',

            'description.max' => 'Lunghezza massima della descrizione di 5000 caratteri',

            'thumb.required' => 'URL richiesto',

            'price.required' => 'Prezzo richiesto',
            'price.numeric' => 'Il prezzo deve essere un numero',

            'series.required' => 'Questo campo è obbligatorio',

            'sale_date.required' => 'Questo campo è obbligatorio',

            'type.required' => 'Questo campo è obbligatorio',
        ];
    }
}

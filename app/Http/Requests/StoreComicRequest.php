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
            'title' => 'required|min:5|max:255',
            'description' => 'required',
            'price' => 'required|max:30',
            'series' => 'required|min:5|max:100',
            'sale_date' => 'required',
            'type' => 'required|max:50',
            'artists' => 'required',
            'writers' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve contenere almeno 5 caratteri',
            'title.max' => 'Il titolo deve contenere massimo 255 caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.max' => 'Il prezzo deve contenere massimo 30 caratteri',
            'series.required' => 'La serie è obbligatoria',
            'series.min' => 'La serie deve contenere almeno 5 caratteri',
            'series.max' => 'La serie deve contenere massimo 100 caratteri',
            'sale_date.required' => 'La data è obbligatoria',
            'type.required' => 'Il tipo è obbligatorio',
            'type.max' => 'Il tipo deve contenere massimo 50 caratteri',
            'artists.required' => 'Gli artisti sono obbligatori',
            'writers.required' => 'Gli scrittori sono obbligatori'
        ];
    }
}

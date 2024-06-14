<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRealisationRequest extends FormRequest
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
            'titre' => ['required', 'string', 'max:255',],
            'categorie' => ['required', 'string', 'max:255',],
            'localisation' => ['required', 'string', 'max:255',],
            'annee' => ['required', 'string', 'max:255',],
            'duree' => ['required', 'string', 'max:255',],
            'image' => ['required', 'image', 'max:2048', 'mimes:jpeg,jpg,png,bmp,heic,webP'],
            'contexte-objectif' => ['required', 'string'],
            'participation-individuelle' => ['string'],
            'analyse-critique' => ['string'],
            'resultats' => ['string'],
        ];
    }
}

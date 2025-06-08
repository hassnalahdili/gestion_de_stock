<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AchatRequest extends FormRequest
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
             'fournisseur_id'=> 'required',
            'composant_id'=> 'required',
            'quantite'=> 'required|integer',
           'prix' => 'numeric', 
             'date'=> 'required',
        ];
    }
}

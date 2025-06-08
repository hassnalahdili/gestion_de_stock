<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class composantRequest extends FormRequest
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
            'name'=> 'required|min:3',
            'categorie_id'=> 'required',
            'serial_number'=> 'required',
            'quantite'=> 'required',
            'prix_achat'=> 'required',
            'prix_vente'=> 'required',
            'date_achat'=> 'required',
            'warehouse_id'=>'required',
            'image'=>'image|mimes:jpg,png,svg,jpeg|max:10240',

        ];
    }
}

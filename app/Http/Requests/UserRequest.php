<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nom'=> 'required|min:3',
            'prenom'=> 'required|min:3',
            'email'=> 'required|email',
            'tele'=> 'required',
            'adresse'=> 'required',
            'session_id'=> 'required',
            'password'=> 'required|min:9|max:50|confirmed',
            'image'=>'image|mimes:jpg,png,svg,jpeg|max:10240',
            
        ];
    }
}

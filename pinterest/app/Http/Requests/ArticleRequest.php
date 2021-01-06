<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:20',
            'email' => 'required|min:5|max:100|email',
            'username' => 'required|min:5|max:20',
            'password' => 'required|min:8|max:20',
            'confirmPassword' => 'required|min:8|max:20'
           ];
    }

    /**
     * Get the validation message that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return[
            'name.required' => 'Merci de renseigner votre nom.',
            'name.min' => '5 caractères minimum.',
            'name.max' => '20 caractères minimum.',
            'email.required' => 'Merci de renseigner votre adresse email',
            'email.email' => 'L\'email renseigné n\'est pas valide',
            'email.max' => '20 caractères minimum',
            'username.required' => 'Merci de votre pseudo(visbile par les utilisateurs du site). Minimum 5 caractères',
            'username.min' => '5 caractères minimum.',
            'username.max' => '20 caractères minimum.',
            'password.required' => 'Merci de renseigner un mot de passe de min 8 caractères.',
            'confirmPassword.required' => 'Le mot de passe doit être identique au champ précédent.'
        ];
    }
}

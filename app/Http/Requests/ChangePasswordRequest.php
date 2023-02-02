<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class ChangePasswordRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

   
    private const GUEST_USER_ID = 5;
    
    public function rules()
    {
        // ゲストユーザーログイン時は、ユーザー名とメールアドレスをバリデーションにかけない
        if(Auth::id() == self::GUEST_USER_ID) {
            return [
                
            ];
        } else { // ゲストユーザー以外がログインしている時は、全てのユーザー情報をバリデーションにかける
            return [
                'current_password' => ['required', 'string', 'min:8', ],
                'password' => ['required', 'string', 'min:8', 'confirmed']
            ];
        }
    }
    
    public function withValidator(Validator $validator) {
        $validator->after(function ($validator) {
            $auth = Auth::user();
            
            //現在のパスワードと新しいパスワードが合わなければエラー
            if (!(Hash::check($this->input('current_password'), $auth->password))) {
                $validator->errors()->add('current_password', __( "現在のパスワードが違います。"));
            }
        });
    }
}

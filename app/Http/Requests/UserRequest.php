<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
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
                'name' => ['required', 'string', 'max:30'],    
            ];
        }
    }
}

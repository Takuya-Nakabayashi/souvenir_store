<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   

    use AuthenticatesUsers;

   
    protected $redirectTo = '/items';

   
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
     // ログアウト後の動作をカスタマイズ
    protected function loggedOut(Request $request)
    {
        // ログイン画面にリダイレクト
        return redirect(route('login'));
    }
    
    public function username()
    {
      return 'name';
    }
    
    // ゲストユーザー用のユーザーIDを定数として定義
    private const GUEST_USER_ID = 5;

    // ゲストログイン処理
     public function guestLogin()
    {
        // id=5 のゲストユーザー情報がDBに存在すれば、ゲストログインする
        if (Auth::loginUsingId(self::GUEST_USER_ID)) {
            return redirect('/');
        }

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Auth;

use App\Item;
use App\Prefecture;
use App\Like;
use App\User;


class ChangePasswordController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showChangePasswordForm(){
        // サブ側最新のお土産で使用
        $latestItems = Item::latest()->limit(3)->get();
        return view('passwords.change',[
            'latestItems' => $latestItems,
            ]);
    }
    
    public function changePassword(ChangePasswordRequest $request){
        
        //パスワード変更処理
        $user = \Auth::user();
        $user->password = bcrypt($request->get('password'));
        $user->save();
        \Session::flash('success', 'パスワードが変更されました');
        // バリデーションにかけた値だけをDBに保存
        // $user->fill($request->validated())->save();
        return redirect()->route('passwords.change');
        
    }
}
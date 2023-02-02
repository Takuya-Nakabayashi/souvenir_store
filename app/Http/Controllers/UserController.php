<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest; 

use App\Item;
use App\Prefecture;
use App\Like;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user = \Auth::user();
        // サブ側最新のお土産で使用
        $latestItems = Item::latest()->limit(3)->get();
        return view('users.index',[
            'title'=> 'マイページ',
            'user' => $user,
            'latestItems' => $latestItems,
        ]);
    }

  
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

 
    public function edit()
    {
        // サブ側最新のお土産で使用
        $latestItems = Item::latest()->limit(3)->get();
        return view('users.edit',[
          'title' =>'ユーザー名変更',
          'latestItems' => $latestItems,
        ]);
    }


    public function update(UserRequest $request)
    {
        Auth::user()->update($request->only(['name']));
        // $user = User::where('name', $name)->first();
        // バリデーションにかけた値だけをDBに保存
        // $user->fill($request->validated())->save();
        session()->flash('success','ユーザー名を変更しました。');
        return redirect()->route('users.index',[
        ]);
    }


    public function destroy($id)
    {
        //
    }
    
}

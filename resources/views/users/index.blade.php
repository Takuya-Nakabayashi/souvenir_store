@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
<div id="main">
  <section id="new">
    
    <div class="container">
      <div class="mypage_center">
        <div class="mypage">
          <h1 class="mypage_h1">{{ $title }}</h1>
          <p id="user_name">{{ $user->name }}さん</p>
        </div>
      </div>
    </div>
    <div class="user_p">
      @if (Auth::id() == 5)
        <a href="{{ route('logout') }}">ユーザー登録はこちら</a>
      @else
        <a href="{{ route('users.edit') }}">ユーザー名変更はこちら</a><span class="user_blank">/</span>
        <a href="{{ route('passwords.form') }}">パスワード変更はこちら</a>
      @endif
    </div>
  </section>
</div>
<!--/#main-->
@endsection
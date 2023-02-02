@extends('layouts.default_not_logged_in')

@section('header')
<header>
    <ul class="header_nav_left">
      <li>
        <a href="{{ route('register') }}">
          ユーザー登録
        </a>
      </li>
      <li>
        <a href="{{ route('login') }}">
          ログイン
        </a>
      </li>
      <button class="btn btn-success">
      <a href="{{ route('login.guest') }}" class="text-white">
      ゲストログイン
      </a>
      </button>
    </ul>
</header>
@endsection
@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
<div class="main_center">
  <h1>{{ $title }}</h1>
  @if (Auth::id() == 5)
    <p class="text-danger">※ゲストユーザーは、ユーザー名を編集できません。</p>
  @endif
  <form method="POST" action="{{ route('users.update') }}">
    @csrf
    @method('patch')
    <input type="hidden" name="id" value="{{ Auth::user()->id }}"> 
    <div>
        <label>
          名前:
          @if (Auth::id() == 5)
            <input type="text" name="name" value="{{ Auth::user()->name }}" readonly>
          @else
            <input type="text" name="name" value="{{ Auth::user()->name ?? old('name') }}">
          @endif
        </label>
    </div>
    <input type="submit" value="更新">
  </form>
</div>
@endsection
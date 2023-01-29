@extends('layouts.logged_in')

@section('content')
<div id="main">
<section id="new">
@if (Auth::id() == 5)
  <p class="text-danger">※ゲストユーザーは、パスワードを編集できません。</p>
@endif 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('パスワード変更') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('passwords.change') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="current_password" class="col-md-4 col-form-label text-md-right">{{ __('現在のパスワード') }}</label>

                            <div class="col-md-6">
                                @if (Auth::id() == 5)
                                    <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required autocomplete="new-password" readonly>
                                @else
                                    <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required autocomplete="new-password">
                                @endif   
                                @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('新しいパスワード') }}</label>

                            <div class="col-md-6">
                                @if (Auth::id() == 5)
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" readonly>
                                @else
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @endif
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('新しいパスワード（確認用）') }}</label>

                            <div class="col-md-6">
                                @if (Auth::id() == 5)
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" readonly>
                                @else
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('パスワード変更') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
</div>
<!--/#main-->
@endsection

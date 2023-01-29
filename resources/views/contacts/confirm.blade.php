@extends('layouts.logged_in')
 
@section('content')

<div id="main">
  
  <h2>お問い合わせ</h2>
    
    <form method="POST" action="{{ route('contacts.send') }}">
    @csrf
    <div class="Form">
      <div class="Form-Item">
        <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>タイトル</p>
        <input  
          type="text" 
          name="title" 
          value="{{ $inputs['title'] }}" 
          class="Form-Item-Input">
      </div>
      <div class="Form-Item">
        <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
        <input 
          type="email" 
          name="email"
          value="{{ $inputs['email'] }}"
          class="Form-Item-Input" >
      </div>
      <div class="Form-Item">
        <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
        <textarea 
          name="body"
          class="Form-Item-Textarea">
          {{ $inputs['body'] }}
        </textarea>
      </div>
        
    
        <button type="submit" class="Form-BtnA" name="action" value="back">
            入力内容修正
        </button>
        <button type="submit" class="Form-BtnB" name="action" value="submit">
            送信する
        </button>
    </form>
  </div>
</div>
<!--/#main-->
@endsection
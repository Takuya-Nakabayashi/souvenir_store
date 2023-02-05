@extends('layouts.default')

@section('header')
<header>
    
  <div class="inner">
    <h1 id="logo"><a href="{{ route('items.index') }}"><img src="{{ asset('images/logo.jpg') }}" alt="全国お土産物産展"></a></h1>
    <div id="tel">
      <span><a href="{{ route('users.index')}}">マイページ</a>|<a href="{{ route('logout') }}">ログアウト</a></span>
    </div>
  </div>


<!--PC用（801px以上端末）メニュー-->
  <nav id="menubar" class="nav-fix-pos">
    <ul class="inner">
      <li><a href="{{ route('items.index') }}">ホーム</a></li>
      <li><a href="{{ route('items.search') }}">お土産検索</a></li>
      <li><a href="{{ route('likes.index') }}">お気に入りリスト</a></li>
      <li><a href="{{ route('companies.index') }}">全国お土産物産展とは</a></li>
      <li><a href="{{ route('contacts.index') }}">お問い合わせ</a></li>
    </ul>
  </nav>

<!--小さい端末用（800px以下端末）メニュー-->
  <nav id="menubar-s">
    <ul class="inner">
      <li><a href="{{ route('items.index') }}">ホーム</a></li>
      <li><a href="{{ route('items.search') }}">お土産検索</a></li>
      <li><a href="{{ route('likes.index') }}">お気に入りリスト</a></li>
      <li><a href="{{ route('companies.index') }}">全国お土産物産展とは</a></li>
      <li><a href="{{ route('contacts.index') }}">お問い合わせ</a></li>
    </ul>
  </nav>
</header>

@endsection

@section('footer')
<footer>

  <div id="footermenu" class="inner">
    <ul>
      <li class="title">タイトル</li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
    </ul>
    <ul>
      <li class="title">タイトル</li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
    </ul>
    <ul>
      <li class="title">タイトル</li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
    </ul>
    <ul>
      <li class="title">タイトル</li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
      <li><a href="#">メニューサンプル</a></li>
    </ul>
  </div>
  <!--/#footermenu-->

  <div id="copyright">
    <small>Copyright&copy; <a href="index.html">全国お土産物産展</a> All Rights Reserved.</small>
    <span class="pr"><a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
  </div>
  <!--/#copyright-->

</footer>
@endsection

@section('sub')

<div id="sub">

  <aside class="mb15">
    <img src="{{ secure_asset('images/banner_sub.jpg') }}" alt="" class="pc">
    <img src="{{ secure_asset('images/banner_sub_s.jpg') }}" alt="" class="sh">
    <!--↑端末サイズで表示される画像が切り替わります。<br>-->
    <!--「class=&quot;pc&quot;」は801px以上で表示させる画像、「class=&quot;sh&quot;」は800px以下で表示させる画像です。-->
  </aside>

  <section class="box">

  <h2 class="c">新着お土産</h2>
  @foreach($latestItems as $latestItem)
  <div class="list">
    <a href="{{ route('items.show' , $latestItem->id) }}">
      <h4>{{ $latestItem->name }}</h4>
      <p>{{ $latestItem->prefecture->name }}</p>
      <br>
      {{ $latestItem->created_at }}
    </a>
  </div>


  @endforeach
  </section>
  <nav class="box">
    <ul class="submenu">
      <li><a href="{{ route('items.index') }}">ホーム</a></li>
      <li><a href="#">会社概要</a></li>
      <li><a href="{{ route('contacts.index') }}">お問い合わせ</a></li>
    </ul>
  </nav>
  
  <section class="box">
    <h2>運営</h2>
    <p><strong>全国お土産物産展</strong><br>
    <span class="mini1">東京都XX区XXXXビル3F<br>
    TEL:03-0000-0000<br>
    (AM9:00〜PM5:00 水曜休み)</span></p>
    <!--<aside class="pc"><img src="images/banner_company.jpg" alt=""></aside>-->
  </section>

</div>
<!--/#sub-->

@endsection
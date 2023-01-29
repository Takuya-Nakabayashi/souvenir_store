<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="日本全国のお土産が丸わかり！">
<meta name="keywords" content="お土産,日本全国,名産品,ご当地グルメ,旅行">
<link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
<script src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js') }}" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="{{ asset('js/openclose.js') }}"></script>
<script src="{{ asset('js/fixmenu.js') }}"></script>
<script src="{{ asset('js/fixmenu_pagetop.js') }}"></script>
<script src="{{ asset('js/ddmenu_min.js') }}"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div id="container">
    @yield('header')
       
            {{-- エラーメッセージを出力 --}}
            @foreach($errors->all() as $error)
              <p class="error">{{ $error }}</p>
            @endforeach
            
            {{-- 成功メッセージを出力 --}}
            @if (\Session::has('success'))
                <div class="success">
                    {{ \Session::get('success') }}
                </div>
            @endif
            
            @if(session('warning'))
                <div class="alert alert-danger">
                    {{ session('warning') }}
                </div>
            @endif
            
            @yield('content')
    
            @yield('sub')
           
        @yield('footer')
    </div>
    <!--/#container-->

    <!--ページの上部に戻る「↑」ボタン-->
    <p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>
    
    <!--メニュー開閉ボタン-->
    <div id="menubar_hdr" class="close"></div>
    
    <!--メニューの開閉処理条件設定　800px以下-->
    <script>
    if (OCwindowWidth() <= 800) {
    	open_close("menubar_hdr", "menubar-s");
    }
    </script>
    
    <!--「物件を借りる」の子メニュー-->
    <script>
    if (OCwindowWidth() <= 800) {
    	open_close("menubar_hdr2", "menubar-s2");
    }
    </script>
    
    <!--「物件を買う」の子メニュー-->
    <script>
    if (OCwindowWidth() <= 800) {
    	open_close("menubar_hdr3", "menubar-s3");
    }
    </script>
</body>
</html>
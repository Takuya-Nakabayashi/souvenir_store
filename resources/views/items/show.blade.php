@extends('layouts.logged_in')
 
@section('content')

    <div id="main">
        <section id="new">
            <li class="item_show">
                <div class="item_content">
                    <div class="item_show_top">
                        <h1 class="item_show_h1">{{ $items->name }}</h1>
                        <a class="like_button">{{ $items->isLikedBy(Auth::user())  ? '★' : '☆' }}</a>
                            <form method="post" class="like" action=" {{ route('items.toggle_like',$items) }} ">
                            @csrf
                            @method('patch')
                            </form>
                        <p class="item_show_area">エリア : {{ $items->Prefecture->name }}</p>
                        <p class="items_show_price">価格 : {{ $items->price }}円</p>
                    </div>
                    <div class="item_show_photo">
                        <div class="item_show_mainImg">
                            @if($items->image !== '')
                                <img src="{{ asset('storage/' . $items->image) }}">
                            @else
                                <img src="{{ asset('images/no_image.png') }}">
                            @endif
                        </div>
                    </div>
                    <div class="item_show_info">
                        <p class="item_desc">
                            {{ $items->description }}
                        </p>
                    </div>
                    <div class="item_show_tips">
                        <p>※価格はインターネット上のものを参考</p>
                    </div>
                    
                    <script>
                    /* global $ */
                    $('.like_button').each(function(){
                      $(this).on('click', function(){
                        $(this).next().submit();
                      });
                    });
                    </script>
                </div>
            </li>
        </section>
    </div>
    <!--/#main-->
@endsection
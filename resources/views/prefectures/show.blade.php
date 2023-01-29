@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
  <h1>{{ $prefectures->name }}の{{ $title }}</h1>
  <div id="main">
    <section id="new">
      @foreach($items as $item)
        @if($item->prefecture_id == $prefectures->id)
        <a href="{{ route('items.show' , $item->id) }}">
          <li class="item">
            <div class="item_content">
              <div class="item_photo">
                <div class="item_mainImg">
                  @if($item->image !== '')
                    <img src="{{ asset('storage/' . $item->image) }}">
                  @else
                    <img src="{{ asset('photos/no_image.png') }}">
                  @endif
                </div>
              </div>
              <div class="item_info">
                <p class="item_name">
                  {{ $item->name }} 
                </p>
                <p class="item_desc">
                  {{ $item->description }}
                </p>
                <p class="item_category_price">
                    カテゴリ:{{ $item->category->name }} {{ $item->price }}円
                </p>
              </div>
            </div>
          </li>
        </a>
        @endif
      @endforeach
      
</section>


</div>
<!--/#main-->
@endsection
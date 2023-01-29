@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
<div id="main">
  <section id="new">
    <div>
      <form action="{{ route('items.search' ) }}" method="GET">
        @csrf
        投稿検索: <input type="text" name="keyword" value="{{ $keyword }}">
        <input type="submit" value="検索">
      </form>
    </div>
    @foreach($items as $item)
      <a href="{{ route('items.show' , $item->id) }}">
        <li class="search-list">{{ $item->name }}</li>
      </a>
    @endforeach
  </section>
</div>
<!--/#main-->

@endsection
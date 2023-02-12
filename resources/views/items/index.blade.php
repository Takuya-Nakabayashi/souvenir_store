@extends('layouts.logged_in')
 

@section('content')

<section class="single">
	<div class="box">
    <div class="single-item u-fade-type-up js-scroll-trigger">
        <img src="{{ secure_asset('images/top_img_sh.png') }}" class="pc">
        <img src="{{ secure_asset('images/top_img_sh.png') }}" class="sh">
  <!--  </div>-->
		<!--<div class="single-item-A u-fade-type-up-A js-scroll-trigger-A">-->
  <!--    <img src="{{ secure_asset('images/zenkoku.png') }}"class="pc">-->
  <!--  </div>-->
  <!--  <div class="single-item-B u-fade-type-up-B js-scroll-trigger-B">-->
  <!--    <img src="{{ secure_asset('images/omiyage.png') }}"class="pc">-->
  <!--  </div>-->
  <!--  <div class="single-item-C u-fade-type-up-C js-scroll-trigger-C">-->
  <!--    <img src="{{ secure_asset('images/busanten.png') }}"class="pc">-->
  <!--  </div>-->
	</div>   
    
</section>

<section id="top-contents">
	<div class="single-item u-fade-type-up js-scroll-trigger-2">

		<h2 class="c big1">掲載お土産数：{{ $count }}件</h2>

		<div id="map-select">
			<select onChange="location.href=value;">
				<option value="#">都道府県から選択する</option>
				
				<option value="{{ route('prefectures.show', $prefectures->id=1) }}">北海道</option>
			
				<option value="{{ route('prefectures.show', $prefectures->id=2) }}">青森県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=3) }}">岩手県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=5) }}">宮城県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=4) }}">秋田県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=6) }}">山形県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=7) }}">福島県</option>
			
				<option value="{{ route('prefectures.show', $prefectures->id=8) }}">茨城県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=9) }}">栃木県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=10) }}">群馬県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=12) }}">埼玉県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=11) }}">千葉県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=13) }}">東京都</option>
				<option value="{{ route('prefectures.show', $prefectures->id=14) }}">神奈川県</option>
			
				<option value="{{ route('prefectures.show', $prefectures->id=15) }}">新潟県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=19) }}">富山県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=20) }}">石川県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=23) }}">福井県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=17) }}">山梨県</option>
			
				<option value="{{ route('prefectures.show', $prefectures->id=16) }}">長野県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=21) }}">岐阜県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=18) }}">静岡県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=22) }}">愛知県</option>
			
				<option value="{{ route('prefectures.show', $prefectures->id=25) }}">三重県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=24) }}">滋賀県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=26) }}">京都府</option>
				<option value="{{ route('prefectures.show', $prefectures->id=28) }}">大阪府</option>
				<option value="{{ route('prefectures.show', $prefectures->id=27) }}">兵庫県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=29) }}">奈良県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=30) }}">和歌山県</option>
			
				<option value="{{ route('prefectures.show', $prefectures->id=31) }}">鳥取県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=33) }}">島根県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=32) }}">岡山県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=34) }}">広島県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=35) }}">山口県</option>
			
				<option value="{{ route('prefectures.show', $prefectures->id=37) }}">徳島県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=36) }}">香川県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=38) }}">愛媛県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=39) }}">高知県</option>
			
				<option value="{{ route('prefectures.show', $prefectures->id=40) }}">福岡県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=41) }}">佐賀県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=45) }}">長崎県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=44) }}">熊本県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=42) }}">大分県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=43) }}">宮崎県</option>
				<option value="{{ route('prefectures.show', $prefectures->id=46) }}">鹿児島県</option>
			
				<option value="{{ route('prefectures.show', $prefectures->id=47) }}">沖縄県</option>
			</select>
		</div>

		<!--<ul id="menu-text">-->

		<!--</ul>-->

		<ul id="menu-photo">
			<li class="chintai"><span><a href="{{ route('items.search') }}">お土産一覧から探す</a></span>
		</ul>

		<ul id="map">

			<li class="hokkaido"><a href="{{ route('prefectures.show', $prefectures->id=1) }}">北海道</a></li>
		
			<li class="tohoku"><a href="{{ route('prefectures.show', $prefectures->id=2) }}" class="aomori">青森県</a></li>
			<li class="tohoku"><a href="{{ route('prefectures.show', $prefectures->id=3) }}" class="iwate">岩手県</a></li>
			<li class="tohoku"><a href="{{ route('prefectures.show', $prefectures->id=5) }}" class="miyagi">宮城県</a></li>
			<li class="tohoku"><a href="{{ route('prefectures.show', $prefectures->id=4) }}" class="akita">秋田県</a></li>
			<li class="tohoku"><a href="{{ route('prefectures.show', $prefectures->id=6) }}" class="yamagata">山形県</a></li>
			<li class="tohoku"><a href="{{ route('prefectures.show', $prefectures->id=7) }}" class="fukushima">福島県</a></li>
		
			<li class="kanto"><a href="{{ route('prefectures.show', $prefectures->id=8) }}" class="ibaraki">茨城県</a></li>
			<li class="kanto"><a href="{{ route('prefectures.show', $prefectures->id=9) }}" class="tochigi">栃木県</a></li>
			<li class="kanto"><a href="{{ route('prefectures.show', $prefectures->id=10) }}" class="gunma">群馬県</a></li>
			<li class="kanto"><a href="{{ route('prefectures.show', $prefectures->id=12) }}" class="saitama">埼玉県</a></li>
			<li class="kanto"><a href="{{ route('prefectures.show', $prefectures->id=11) }}" class="chiba">千葉県</a></li>
			<li class="kanto"><a href="{{ route('prefectures.show', $prefectures->id=13) }}" class="tokyo">東京都</a></li>
			<li class="kanto"><a href="{{ route('prefectures.show', $prefectures->id=14) }}" class="kanagawa">神奈川県</a></li>
		
			<li class="tyubu"><a href="{{ route('prefectures.show', $prefectures->id=15) }}" class="nigata">新潟県</a></li>
			<li class="tyubu"><a href="{{ route('prefectures.show', $prefectures->id=19) }}" class="toyama">富山県</a></li>
			<li class="tyubu"><a href="{{ route('prefectures.show', $prefectures->id=20) }}" class="ishikawa">石川県</a></li>
			<li class="tyubu"><a href="{{ route('prefectures.show', $prefectures->id=23) }}" class="fukui">福井県</a></li>
			<li class="tyubu"><a href="{{ route('prefectures.show', $prefectures->id=17) }}" class="yamanashi">山梨県</a></li>
			<li class="tyubu"><a href="{{ route('prefectures.show', $prefectures->id=16) }}" class="nagano">長野県</a></li>
			<li class="tyubu"><a href="{{ route('prefectures.show', $prefectures->id=21) }}" class="gifu">岐阜県</a></li>
			<li class="tyubu"><a href="{{ route('prefectures.show', $prefectures->id=18) }}" class="shizuoka">静岡県</a></li>
			<li class="tyubu"><a href="{{ route('prefectures.show', $prefectures->id=22) }}" class="aichi">愛知県</a></li>
		
			<li class="kansai"><a href="{{ route('prefectures.show', $prefectures->id=25) }}" class="mie">三重県</a></li>
			<li class="kansai"><a href="{{ route('prefectures.show', $prefectures->id=24) }}" class="shiga">滋賀県</a></li>
			<li class="kansai"><a href="{{ route('prefectures.show', $prefectures->id=26) }}" class="kyoto">京都府</a></li>
			<li class="kansai"><a href="{{ route('prefectures.show', $prefectures->id=28) }}" class="osaka">大阪府</a></li>
			<li class="kansai"><a href="{{ route('prefectures.show', $prefectures->id=27) }}" class="hyogo">兵庫県</a></li>
			<li class="kansai"><a href="{{ route('prefectures.show', $prefectures->id=29) }}" class="nara">奈良県</a></li>
			<li class="kansai"><a href="{{ route('prefectures.show', $prefectures->id=30) }}" class="wakayama">和歌山県</a></li>
		
			<li class="cyugoku"><a href="{{ route('prefectures.show', $prefectures->id=31) }}" class="tottori">鳥取県</a></li>
			<li class="cyugoku"><a href="{{ route('prefectures.show', $prefectures->id=33) }}" class="shimane">島根県</a></li>
			<li class="cyugoku"><a href="{{ route('prefectures.show', $prefectures->id=32) }}" class="okayama">岡山県</a></li>
			<li class="cyugoku"><a href="{{ route('prefectures.show', $prefectures->id=34) }}" class="hiroshima">広島県</a></li>
			<li class="cyugoku"><a href="{{ route('prefectures.show', $prefectures->id=35) }}" class="yamaguchi">山口県</a></li>
		
			<li class="shikoku"><a href="{{ route('prefectures.show', $prefectures->id=37) }}" class="tokushima">徳島県</a></li>
			<li class="shikoku"><a href="{{ route('prefectures.show', $prefectures->id=36) }}" class="kagawa">香川県</a></li>
			<li class="shikoku"><a href="{{ route('prefectures.show', $prefectures->id=38) }}" class="ehime">愛媛県</a></li>
			<li class="shikoku"><a href="{{ route('prefectures.show', $prefectures->id=39) }}" class="kochi">高知県</a></li>
		
			<li class="kyusyu"><a href="{{ route('prefectures.show', $prefectures->id=40) }}" class="fukuoka">福岡県</a></li>
			<li class="kyusyu"><a href="{{ route('prefectures.show', $prefectures->id=41) }}" class="saga">佐賀県</a></li>
			<li class="kyusyu"><a href="{{ route('prefectures.show', $prefectures->id=45) }}" class="nagasaki">長崎県</a></li>
			<li class="kyusyu"><a href="{{ route('prefectures.show', $prefectures->id=44) }}" class="kumamoto">熊本県</a></li>
			<li class="kyusyu"><a href="{{ route('prefectures.show', $prefectures->id=42) }}" class="oita">大分県</a></li>
			<li class="kyusyu"><a href="{{ route('prefectures.show', $prefectures->id=43) }}" class="miyazaki">宮崎県</a></li>
			<li class="kyusyu"><a href="{{ route('prefectures.show', $prefectures->id=46) }}" class="kagoshima">鹿児島県</a></li>
		
			<li class="kyusyu"><a href="{{ route('prefectures.show', $prefectures->id=47) }}" class="okinawa">沖縄県</a></li>

		</ul>
		<!--/#map-->
	</div>

</section>
<!--/#top-contents-->

<div id="main">

	<section id="new">
		<h2>お土産ランキングTOP10</h2>
		お気に入り数を元に算出
		@foreach($likeItems as $likeItem)
			<a href="{{ route('items.show' , $likeItem->id) }}">
				<li class="item">
    			<div class="item_content">
    			  <div class="item_photo">
    			    <div class="item_mainImg">
    			      @if($likeItem->image !== '')
    			        <img src="{{ asset('storage/' . $likeItem->image) }}">
    			      @else
    			        <img src="{{ asset('images/no_image.png') }}">
    			    	@endif
    			    </div>
    			  </div>
    			  <div class="item_info">
    			    <p class="item_name">
    			        {{ $likeItem->name }}
    			    </p>
    			    <p class="item_area">
    			      {{ $likeItem->prefecture->name }}
    			    </p>
    			    <p class="item_des">
    			      {{ $likeItem->description }}
    			    </p>
    			  </div>
    			</div>
  			</li>
  		</a>
		@endforeach
	</section>
</div>
<!--/#main-->

@endsection
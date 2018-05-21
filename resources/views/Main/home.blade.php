@extends('Templates/template')

@section('title')
	Grand theft auto shop
@endsection

@section('content')

	<div class="news-feed-container">
		<div class="section-title">
			<h2>Latest News</h2>
		</div>

		<div class="news-container">

				<div class="lastnews-container">
					<h1 class="news-title">{{$lastNews->title}}</h1>
					<h3 class="news-subtitle">{{$lastNews->subtitle}}</h3>
					<img src="{{$lastNews->img}}" alt="lastnews-image" />
					<p class="news-text">{{$lastNews->content}}</p>
				</div>

				<div class="allnews-container">
					<h2>Other stories</h2>
						@foreach($news as $new)
							<div class="img-container">
								<img src="{{$new->img}}" />
								<span class="img-text">{{$new->title}}</span>
							</div>
						@endforeach
				</div>

		</div>

		<div class="section-title">
			<h2>Best selling games</h2>
		</div>

		<div class="bestSellingGames-container">
			@foreach($games as $game)
				<a class="bestSellingGame-link" href="{{ route('product.index', ['slug' => $game->getSlugAttribute()]) }}">
					<div class="bestSellingGame-container">
						<img src="{{$game->img}}">
						<h3>{{$game->name}}</h3>
						<p>Available on: {{$game->systems}}</p>
					</div>
				</a>
			@endforeach
		</div>

	</div>
@endsection

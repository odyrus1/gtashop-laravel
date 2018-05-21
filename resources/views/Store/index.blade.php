@extends('Templates/template')

@section('title')
	Grand theft auto shop
@endsection

@section('content')

  <div class="store-container">
		<div class="products-container">

			@foreach($games as $game)
				<a class="bestSellingGame-link" href="{{ route('product.index', ['slug' => $game->getSlugAttribute()]) }}">
					<div class="product-container">
						<img src="{{$game->img}}" />
						<h3>{{$game->name}}</h3>
						<p>Price: {{$game->price}}</p>
						<p>Age restriction: PG-{{$game->age}}</p>
						<p>Systems: {{$game->systems}}</p>
					</div>
				</a>
			@endforeach

		</div>
	</div>

@endsection

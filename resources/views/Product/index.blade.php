@extends('Templates/template')

@section('title')
	Grand theft auto shop
@endsection

@section('content')

 <div class="gamepage-container">
   <div class="game-container">

     <div class="gameImage-container">
       <img src="{{$game->img}}" alt="product-image" />
     </div>

     <div class="gameInfo-container">
       <h1>{{$game->name}}</h1>
       <p>{{$game->description}}</p>
       <p>Price: {{$game->price}}$</p>
       <p>Systems: {{$game->systems}}</p>
     </div>

   </div>
 </div>

@endsection

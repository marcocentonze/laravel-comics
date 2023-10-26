@extends('layouts.app')


@section('main-content')
<div style="background-color: #1C1C1C;">
<div class="container">
         <div class="d-flex justify-content-start">
        <a href="#" class="text-decoration-none custom-btn">
            <h6 class="text-white">Current series</h6>
        </a>
        </div>
    </div>

    <div class="container">
  <div class="row">
    @foreach($comics as $comic)
      <div class="col-2">
        <div class="d-flex flex-column align-items-center">
          <img class="img-fluid fixed-height" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
          <p class="comic-title text-white">{{$comic['title']}}</p>
        </div>
      </div>
    @endforeach
  </div>
</div>






    <div class="container">
         <div class="d-flex justify-content-center">
        <a href="#" class="text-decoration-none custom-btn">
            <h6 class="text-white">Load more</h6>
        </a>
        </div>
    </div>
    </div>

    

        
   
   








<div class="icons-dc ">
    <div class="text-icons d-flex">

        <div class="col icon_text d-flex justify-content-center align-items-center">
            <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="">
            <p class="text-uppercase">digital comics</p>
        </div>

        <div class="col icon_text d-flex justify-content-center align-items-center">
            <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="">
            <p class="text-uppercase">dc merchandise</p>
        </div>

        <div class="col icon_text d-flex justify-content-center align-items-center">
            <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="">
            <p class="text-uppercase">subscription</p>
        </div>

        <div class="col icon_text d-flex justify-content-center align-items-center">
            <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="">
            <p class="text-uppercase">comic shop locator</p>
        </div>

        <div class="col icon_text d-flex justify-content-center align-items-center">
            <img src="{{Vite::asset('resources/images/buy-dc-power-visa.svg')}}" alt="">
            <p class="text-uppercase">dc power visa</p>
        </div>

    </div>
</div>

@endsection
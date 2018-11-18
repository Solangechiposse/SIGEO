@extends('layouts.templateVisitante')

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" media="screen" href="{{ asset('css/estiloSlider.css') }}" rel="stylesheet"/>

 
</head>
@section('content')
<div class="container">
    <div class="carousel">
        <input id="carousel-1" name="carousel[]" type="radio">
        <input id="carousel-2" name="carousel[]" type="radio">
        <input checked="checked" id="carousel-3" name="carousel[]" type="radio">
        <input id="carousel-4" name="carousel[]" type="radio">
        <input id="carousel-5" name="carousel[]" type="radio">
        <ul class="carousel__items">
            <li class="carousel__item"><img src="img1.JPG" alt=""></li>
            <li class="carousel__item"><img src="img10.jpg" alt=""></li>
            <li class="carousel__item"><img src="img9.jpg" alt=""></li>
            <li class="carousel__item"><img src="img4.jpg" alt=""></li>
            <li class="carousel__item"><img src="img7.jpg" alt=""></li>
        </ul>
        <div class="carousel__prev">
            <label for="carousel-1"></label>
            <label for="carousel-2"></label>
            <label for="carousel-3"></label>
            <label for="carousel-4"></label>
            <label for="carousel-5"></label>
        </div>
        <div class="carousel__next">
            <label for="carousel-1"></label>
            <label for="carousel-2"></label>
            <label for="carousel-3"></label>
            <label for="carousel-4"></label>
            <label for="carousel-5"></label>
        </div>
        <div class="carousel__nav">
            <label for="carousel-1"></label>
            <label for="carousel-2"></label>
            <label for="carousel-3"></label>
            <label for="carousel-4"></label>
            <label for="carousel-5"></label>
        </div>
    </div>
</div>

@endsection
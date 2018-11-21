


@section('style')
<link type="text/css" rel="stylesheet" media="screen" href="{{ asset('css/estiloSlider.css') }}" />
@endsection
@section('script')
    <script>
        window.console = window.console || function(t) {};
    </script>

    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
@endsection

<div class="container">
    <div class="carousel">
        <input id="carousel-1" name="carousel[]" type="radio">
        <input id="carousel-2" name="carousel[]" type="radio">
        <input checked="checked" id="carousel-3" name="carousel[]" type="radio">
        <input id="carousel-4" name="carousel[]" type="radio">
        <input id="carousel-5" name="carousel[]" type="radio">
        
        <ul class="carousel__items">
            <li class="carousel__item"><img src="{{ asset('img/img10.jpg')}}" alt=""></li>
            <li class="carousel__item"><img src="{{ asset('img/img7.jpg')}}" alt=""></li>
            <li class="carousel__item"><img src="{{ asset('img/img4.jpg')}}" alt=""></li>
            <li class="carousel__item"><img src="{{ asset('img/img9.jpg')}}" alt=""></li>
            <li class="carousel__item"><img src="{{ asset('img/img5.jpg')}}" alt=""></li>
            <li class="carousel__item"><img src="{{ asset('img/img6.jpg')}}" alt=""></li>
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

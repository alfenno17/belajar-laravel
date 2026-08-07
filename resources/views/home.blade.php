@extends('layouts.app')

@section('title', 'King Of Pasta - Dashboard')

@section('content')

<div class="sliderwrapper">
    <div id="slider" class="container">
        <div class="slider">
            <ul class="slides">
                <li class="slide">
                    <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta?</h5>
                    <p class="wow fadeInUp" data-wow-delay="0.8s">
                        Selamat datang di King Of Pasta. Ini adalah halaman content yang menggunakan master layout Laravel Blade.
                    </p>
                    <img src="{{ asset('assets/images/slideimg.png') }}" width="317" height="256" class="wow fadeInRight" data-wow-delay="0.8s" alt="slide1img">
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="bestdisheswrapper">
    <div id="bestdishes" class="container">
        <h2 class="wow fadeInUp" data-wow-delay="0.3s">BEST DISHES</h2>
        <div class="slider">
            <ul class="slides">
                <li class="slide">
                    <div class="item">
                        <img src="{{ asset('assets/images/thumb1.png') }}" width="226" height="225" alt="sliderimg" class="wow flipInX" data-wow-delay=".8s">
                        <h3>Pasta Capellini</h3>
                    </div>
                    <div class="item2">
                        <img src="{{ asset('assets/images/thumb2.jpg') }}" width="226" height="225" alt="sliderimg" class="wow flipInX" data-wow-delay=".8s">
                        <h3>Pasta Pillus</h3>
                    </div>
                    <div class="item3">
                        <img src="{{ asset('assets/images/thumb3.png') }}" width="226" height="225" alt="sliderimg" class="wow flipInX" data-wow-delay=".8s">
                        <h3>Pasta Fusilli</h3>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="mapwrapper">
    <div id="map" class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3453.66325428613!2d31.24094885319519!3d30.046517359733745!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1403554513536" class="googlemap"></iframe>
    </div>
</div>

<div class="contactwrapper">
    <div id="contactus" class="container">
        <h3 class="wow fadeInUp" data-wow-delay="0.3s">CONTACT US</h3>
        <div class="staff">
            <ul>
                <li><img src="{{ asset('assets/images/char3.png') }}" width="163" height="163" class="myimage wow fadeIn" alt="staff"></li>
                <li><img src="{{ asset('assets/images/char4.png') }}" width="163" height="163" class="myimage2 wow fadeIn" data-wow-delay="0.8s" alt="staff"></li>
                <li><img src="{{ asset('assets/images/char5.png') }}" width="163" height="163" class="myimage3 wow fadeIn" data-wow-delay="0.8s" alt="staff"></li>
                <li><img src="{{ asset('assets/images/char6.png') }}" width="163" height="163" class="myimage4 wow fadeIn" data-wow-delay="0.8s" alt="staff"></li>
                <li><img src="{{ asset('assets/images/char1.png') }}" width="163" height="163" class="myimage5 wow fadeIn" data-wow-delay="0.8s" alt="staff"></li>
                <li><img src="{{ asset('assets/images/char2.png') }}" width="163" height="163" class="myimage6 wow fadeIn" data-wow-delay="0.8s" alt="staff"></li>
            </ul>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $('.sliderwrapper .slider').glide({
        autoplay: 7000,
        animationDuration: 3000,
        arrows: true
    });

    $('.bestdisheswrapper .slider').glide({
        autoplay: false,
        animationDuration: 700,
        arrows: true,
        navigation: false
    });
</script>
@endpush
@extends('layouts.theme')
@section('css_theme')
    <link href="{{ asset('css/theme/themeone.css') }}" rel="stylesheet">
@endsection
@section('content')
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-xl">
                <a class="navbar-brand" href="#">
                    <div class="logo">
                        LD
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <div class="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                @lang('bahasa.mempelai')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                @lang('bahasa.acara')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                @lang('bahasa.galeri')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                @lang('bahasa.cerita')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                @lang('bahasa.rsvp')
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="cover">
        <div class="container-xl">
            <div class="cover-body">
                <div class="cover-body-content">
                    <div class="inner" data-aos="fade-in">
                        <h1>LEVI & DIO</h1>
                        <p class="sub-heading">@lang('bahasa.inivite')</p>
                        <p class="date">26 AGUSTUS 2023</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover-body-img" data-aos="fade-down">
            <img src="{{ asset('images/hero-image.png') }}" class="img-fluid" alt="">
        </div>
        <div class="cover-footer" data-aos="fade-up">
            <div class="container-xl">
                <div class="row align-items-center gy-3">
                    <div class="col-md-6">
                        <p class="to">@lang('bahasa.to')</p>
                        <h4 class="guest">
                            NAMA TAMU
                        </h4>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="#" class="btn open">@lang('bahasa.buka')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="img-heading">
        <img src="{{ asset('images/hero-image.png') }}" class="img-fluid" alt="">
    </div>
    <div class="container mt-5">
        <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, delectus. Accusamus itaque
            alias
            natus! A eaque eum alias excepturi deserunt, deleniti tempore fugiat nisi rem molestias quis recusandae, omnis
            ea!
        </p>
    </div>
    <div class="data" style="height:1000px"></div>

    <script type="module">
        $(document).ready(function(){
            $('body').addClass('opening');
            $('.navbar-toggler').click(function(){
                $('.nav-icon').toggleClass('open');
            });
        })
        $('.open').click(function(e){
            e.preventDefault();
            var cl = 'aos-animate';
            $('.cover-body-img').removeClass(cl);
            $('.cover-body-content').removeClass(cl);
            $('.cover-footer').removeClass(cl);
            $('.opening').addClass('scroll');
            $('.cover').addClass('open');

            setTimeout(() => {
                $('.cover').remove();
            }, 1300);
        })
    </script>
@endsection

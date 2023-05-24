@extends('layouts.theme')
@section('css_theme')
    <link href="{{ asset('css/theme/themeone.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="cover">
        <div class="container-xl">
            <div class="row align-items-center">
                <div class="col-4">
                    <div class="logo">
                        LD
                    </div>
                </div>
                <div class="col-8">
                    <ul class="nav justify-content-end">
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
            <div class="cover-body">
                <div class="cover-body-content">
                    <div class="inner">
                        <h1>LEVI & DIO</h1>
                        <p class="sub-heading">WEDDING INVITATION</p>
                        <p class="date">26 AGUSTUS 2023</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover-body-img">
            <img src="{{ asset('images/hero-image.png') }}" class="img-fluid" alt="">
        </div>
        <div class="cover-footer">
            <div class="container-xl">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="to">KEPADA BAPAK/IBU/SAUDARA/I:</p>
                        <h4 class="guest">
                            NAMA TAMU
                        </h4>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="#" class="btn ">BUKA UNDANGAN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

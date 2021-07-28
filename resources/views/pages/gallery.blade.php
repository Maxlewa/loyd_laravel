@include('partial.nav')

@extends('layouts.index')

@section('content')
<div class="container carouselBox">

    <div id="carouselExampleCaptions" class="carousel slide mt-4 carouselMain" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src={{asset('img/DSC07900.jpg')}} class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>March 2020</h5>
            <p>Løyd LIVE - Decibels, Tipik</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src={{asset('img/DSC01869.jpg')}} class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>January 2021</h5>
            <p>Løyd & OD Temper at Rec'N Roll Studio</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src={{asset('img/DSC03910.jpg')}} class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>April 2019</h5>
            <p>Løyd DJ Set - Equality Festival</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src={{asset('img/DSC03541.jpg')}} class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>March 2019</h5>
            <p>Løyd & OD Temper</p>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
        {{-- <p class="arrowC1">➪</p> --}}
        <p class="arrowC1">PREVIOUS</p>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
        {{-- <p class="arrowC2">➪</p> --}}
        <p class="arrowC2">NEXT</p>
        <span class="sr-only">Next</span>
        </a>
    </div>

    <p class="pLois text-center mt-4">All pictures by <a href="https://www.instagram.com/loisdenis/" target="_blank">Loïs Denis</a></p>
    
</div>
@endsection

@include('partial.footer')
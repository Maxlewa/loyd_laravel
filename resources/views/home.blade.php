@include('partial.nav')

@extends('layouts.index')

@section('content')

    {{-- Background video --}}
    <video playsinline autoplay muted loop id="bgvid" src={{asset('video/tvstatic3.mp4')}}></video>

    {{-- E-mail confirmed flash --}}
    @include('layouts.flash')

    {{-- Header image --}}
    <div class="divImgHuge">
        <img src={{asset('img/DSC07900-cropped.jpg')}} class="d-block w-100" alt="..." id="imgHuge">
        <img src={{asset('img/DSC07900-cropped.jpg')}} alt="..." id="imgBis">
    </div>

    {{-- Youtube video --}}
    <div class="divHome text-center pt-4">
        <iframe class="mainIframe" width="1250" height="710" src="https://www.youtube.com/embed/pTBN2IWCXro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="phoneIframe" width="320" height="180" src="https://www.youtube.com/embed/pTBN2IWCXro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="padIframe" width="640" height="360" src="https://www.youtube.com/embed/pTBN2IWCXro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="proIframe" width="960" height="540" src="https://www.youtube.com/embed/pTBN2IWCXro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    {{-- PAGES --}}
    @include('pages.discography')
    @include('pages.nft')
    @include('pages.tour')
    @include('pages.press')
    @include('pages.contact')
    </div>

    {{-- Footer image --}}
    <div class="divImgEnd">
        <img src={{asset('img/DSC05220-contrastnoisecropped.jpg')}} class="d-block w-100" alt="..." id="imgEnd">
    </div>
    
    {{-- Footer credit --}}
    @include('partial.footer')

@endsection


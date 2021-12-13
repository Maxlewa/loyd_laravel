@include('partial.nav')

@extends('layouts.index')

@section('content')
    <video playsinline autoplay muted loop id="bgvid" src={{asset('video/tvstatic2.mp4')}}></video>
    <div class="divHome text-center mt-2">
        <iframe width="1120" height="630" src="https://www.youtube.com/embed/videoseries?list=PLbqtpJnYXUy9UF3J4jXXu7WDOw3GA7w5Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
@endsection

@include('partial.footer')
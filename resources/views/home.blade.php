@include('partial.nav')

@extends('layouts.index')

@section('content')
    <div class="divHome text-center mt-4">
        {{-- <img src={{asset('img/PARDesktop.png')}} alt=""> --}}
        <iframe width="1120" height="630" src="https://www.youtube.com/embed/ff3kpppd_MQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
@endsection

@include('partial.footer')

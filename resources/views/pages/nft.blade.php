@include('partial.nav')

@extends('layouts.index')

@section('content')
    <video playsinline autoplay muted loop id="bgvid" src={{asset('video/tvstatic.mp4')}}></video>
    <div class="container nftContainer mt-5">
        <div class="row">
            <div class="col-6 divVideoNft">
                <video src={{asset('video/NFT-001-Max-MP4.mp4')}} controls loop muted autoplay></video>
            </div>
            <div class="cold-6 divRightNft mt-4">
                <h1 class="mb-4">don't_think_just_watch</h1>
                <p>Is the first Løyd NFT, minted on April 22, 2021</p>
                <p>Music/sound design by Løyd, visuals by <a href="https://www.instagram.com/tarekokbir/" target="_blank">Tarek Okbir</a></p>
                <p>Available on <a href="https://zora.co/loyd/2879" target="_blank">Zora</a></p>
                <p>View on <a href="https://etherscan.io/token/0xabEFBc9fD2F806065b4f3C237d4b59D9A97Bcac7?a=2879" target="_blank">Etherscan</a></p>
            </div>
        </div>
    </div>
@endsection

@include('partial.footer')
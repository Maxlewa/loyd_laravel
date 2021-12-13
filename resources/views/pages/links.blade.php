@extends('layouts.index')

@section('content')
    <div class="bigDiv text-center mt-4">
        <video src={{asset('video/LoydRedMove.mp4')}} loop autoplay muted></video>
        <div class="btnDiv">
            <a href="">
                <button class="btn btn-dark mt-3">STREAM Løyd's NEW single - "Save It"</button>
            </a>
            <a href="">
                <button class="btn btn-dark mt-3">WATCH - Løyd LIVE Rehearsals</button>
            </a>
            <a href="">
                <button class="btn btn-dark mt-3">NFT - "don't_think_just_watch"</button>
            </a>
        </div>
        <div class="linksDiv mt-2">
            <img src="" alt="">
            <div class="iconDiv">
                <div class="iconsRowOne mb-2">
                    <a href="https://www.facebook.com/LoydBE/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/loydbe/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/LoydMusicBE" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://open.spotify.com/artist/6nTLSLkxAQp1F8L0VFvCpR?si=DUni8bEnSWG3Qv3QMJFfrw" target="_blank"><i class="fab fa-spotify"></i></a>
                </div>
                <div class="iconsRowTwo">
                    <a href="https://music.apple.com/be/artist/l%C3%B8yd/1334208192?l=fr" target="_blank"><i class="fab fa-apple"></i></a>
                    <a href="https://www.youtube.com/channel/UCxhkP9IgusYDaQU5dW-w-fQ" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://bit.ly/3tM84Hn" target="_blank"><i class="fab fa-tiktok"></i></a>
                    <a href="mailto:loydmusic@outlook.com"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <form method="POST" action={{route('mailStore')}} role="form" class="formContactLinks mt-4">
            @csrf
            <h2 class="h2news mb-3 mt-4">Subscribe to the newsletter</h2>
            <div class="form-row formContactLineLinks">
                <div class="d-flex justify-content-center form-group">
                    {{-- <label for="email">Your Email</label> --}}
                    <input type="email" placeholder="E-mail" class="form-control mr-2 @error ('email') is-invalid @enderror" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                    @error('email')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                    <div class="validate"></div>
                </div>
                <div>
                    <button class="btn btn-dark joinBtn" type="submit">JOIN</button>
                </div>
            </div>
        </form>
        <div class="divContactPLinks mt-3">
            <p class="my-1">
                We won’t sell your information to any third party.
            </p>
            <p class="my-1">
                The e-mail adress you provide us will only be used in the Løyd newsletter context.
            </p>
            <p class="my-1">
                You'll be able to unsubscribe at any time.
            </p>
        </div>
    </div>
@endsection

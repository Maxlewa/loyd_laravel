@include('partial.nav')

@extends('layouts.index')

@section('content')
    <div class="divVideoContact text-center mt-5">
        <video src={{asset('video/LoydRedMove.mp4')}} loop autoplay muted></video>
        <form method="POST" action={{route('mailStore')}} role="form" class="formContact mt-2">
            @csrf
            <div class="form-row formContactLine">
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
        <div class="divContactP mt-3">
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

@include('partial.footer')
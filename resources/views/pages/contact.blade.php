<div class="divVideoContact text-center mt-3 mb-5 jumptarget" id="contact">

    {{-- Title --}}
    <div class="text-center divTitre">
        <h1 class="titreDisco mb-3">CONTACT</h1>
        <div class="whiteLine"></div>
    </div>

    {{-- Contact Steven & Arnaud --}}
    <div class="divInfo">
        <p class="my-1">
            Contact/say hi : loydmusic@outlook.be
        </p>
        <p class="my-1">
            Mgmt : Steven Vlassenroot - steven.vlassenroot@icloud.com
        </p>
        <p class="my-1">
            Booking : Arnaud De Koninck - arnaud@progressbooking.be
        </p>
    </div>

    {{-- Løyd LOGO video --}}
    <div class="mt-3">
        <video loop preload autoplay>
            <source src={{asset('video/LoydPNGVidVP9.webm')}} type="video/webm">
        </video>
    </div>

    {{-- E-mail form --}}
    <form method="POST" action={{route('mailStore')}} role="form" class="formContact mt-4">
        @csrf
        <div class="form-row formContactLine">
            <div class="d-flex justify-content-center form-group">
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

    {{-- E-mail disclaimer --}}
    <div class="divContactP mt-3 pb-2">
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

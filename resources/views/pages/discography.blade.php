<div class="discographyBox jumptarget" id="music">

    {{-- Title --}}
    <div class="text-center divTitre">
        <h1 class="titreDisco mb-3">MUSIC</h1>
        <div class="whiteLine"></div>
    </div>

    {{-- ALBUMS --}}
    {{-- <div class="container albumsDiv mt-2">
        <div class="row">
            <div class="col-6 text-center albumCol">
                <div class="miniDiv text-center">
                    <a href="https://smebe.lnk.to/PAR" target="_blank">
                        <img src={{asset('img/PAR.png')}} alt="">
                    </a>
                    <h3 class="mt-4">Post-Apocalyptic Remixes</h3>
                    <h2 class="mt-2">- 2020 -</h3>
                    <a href="https://smebe.lnk.to/PAR" target="_blank">
                        <button class="btn btn-dark mt-3">LISTEN</button>
                    </a>
                </div>
            </div>
            <div class="col-6 text-center px-4 albumCol">
                <div class="miniDiv text-center">
                    <a href="http://hyperurl.co/APAMAG" target="_blank">
                        <img src={{asset('img/APAMAG.jpg')}} alt="">
                    </a>
                    <h3 class="mt-4">A Post-Apocalyptic Modern Art Gallery</h3>
                    <h2 class="mt-2">- 2019 -</h2>
                    <a href="http://hyperurl.co/APAMAG" target="_blank">
                        <button class="btn btn-dark mt-3">LISTEN</button>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- Spotify PLAYER --}}
    <div class="text-center mt-5 divSpotifyP">
        <iframe class="spotifyDesktop" src="https://open.spotify.com/embed/artist/6nTLSLkxAQp1F8L0VFvCpR" width="800" height="390" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        <iframe class="spotifyMobile" src="https://open.spotify.com/embed/artist/6nTLSLkxAQp1F8L0VFvCpR" width="300" height="300" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        <iframe class="spotifyIpad" src="https://open.spotify.com/embed/artist/6nTLSLkxAQp1F8L0VFvCpR" width="600" height="300" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    </div>

    {{-- Spotify FOLLOW button --}}
    <div class="text-center mb-5 divSpotifyF">
        <iframe src="https://open.spotify.com/follow/1/?uri=spotify:artist:6nTLSLkxAQp1F8L0VFvCpR?si=mpDTp8A3TpyYGYKiBUo0ig&size=detail&theme=dark" width="213" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
    </div>

    {{-- Apple Music button --}}
    <div class="text-center divApple mt-5">
        <a href="https://music.apple.com/fr/artist/l%C3%B8yd/1334208192" target="_blank">
            <img src={{asset('img/listenonapplemusic2.png')}} alt="...">
        </a>
    </div>
    
</div>
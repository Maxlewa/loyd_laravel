{{-- DESKTOP NAV --}}
<nav class="navDesktop">

    {{-- LEFT Title --}}
    <div class="navLeft">
        <h3>LØYD</h3>
    </div>

    {{-- CENTER Social Media --}}
    <div class="navCenter">
        <div class="navSocial">
            <a href="https://www.facebook.com/LoydBE/" target="_blank"><i class="fab fa-facebook-f px-3"></i></a>
            <a href="https://www.instagram.com/loydbe/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/LoydMusicBE" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://open.spotify.com/artist/6nTLSLkxAQp1F8L0VFvCpR?si=DUni8bEnSWG3Qv3QMJFfrw" target="_blank"><i class="fab fa-spotify"></i></a>
            <a href="https://music.apple.com/be/artist/l%C3%B8yd/1334208192?l=fr" target="_blank"><i class="fab fa-apple"></i></a>
            <a href="https://www.youtube.com/channel/UCxhkP9IgusYDaQU5dW-w-fQ" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://bit.ly/3tM84Hn" target="_blank"><i class="fab fa-tiktok"></i></a>
            <a href="mailto:loydmusic@outlook.com"><i class="fas fa-envelope"></i></a>
        </div>
    </div>

    {{-- RIGHT Nav --}}
    <div class="navRight">
        <div class="divMenu">
            <a href={{route('home')}}>home</a>
            <a href="#music">music</a>
            <a href="#nft">nft</h3></a>
            <a href="#tour">tour</a>
            {{-- <a href={{route('gallery')}}>gallery</a> --}}
            <a href=#press>press</a>
            {{-- <a href={{route('loydtv')}}>tv</a> --}}
            <a href=#contact>contact</a>
            {{-- <a href={{route('links')}}>links</a> --}}
        </div>
    </div>
</nav>

{{-- MOBILE NAV --}}
<div class="navMobile">

    {{-- MENU button --}}
    <div class="navMobileIn">
        <button id="menuBtn" onclick="toggleMenu()">MENU</button>
    </div>

    {{-- Social Media --}}
    <div class="navMobileSocial">
        <a href="https://www.facebook.com/LoydBE/" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/loydbe/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/LoydMusicBE" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://open.spotify.com/artist/6nTLSLkxAQp1F8L0VFvCpR?si=DUni8bEnSWG3Qv3QMJFfrw" target="_blank"><i class="fab fa-spotify"></i></a>
        <a href="https://music.apple.com/be/artist/l%C3%B8yd/1334208192?l=fr" target="_blank"><i class="fab fa-apple"></i></a>
        <a href="https://www.youtube.com/channel/UCxhkP9IgusYDaQU5dW-w-fQ" target="_blank"><i class="fab fa-youtube"></i></a>
        <a href="https://bit.ly/3tM84Hn" target="_blank"><i class="fab fa-tiktok"></i></a>
        <a href="mailto:loydmusic@outlook.com"><i class="fas fa-envelope"></i></a>
    </div>
</div>

{{-- MODAL --}}
<div id="myModal" class="modal">
    <div class="modal-content">
        <a href={{route('home')}} class="optionMenu">home</a>
        <a href="#music" class="optionMenu" onclick="ancreModalClose()">music</a>
        <a href="#nft" class="optionMenu" onclick="ancreModalClose()">nft</h3></a>
        <a href="#tour" class="optionMenu" onclick="ancreModalClose()">tour</a>
        <a href="#press" class="optionMenu" onclick="ancreModalClose()" id="pressModal">press</a>
        <a href=#contact class="optionMenu" onclick="ancreModalClose()">contact</a>
    </div>
</div>
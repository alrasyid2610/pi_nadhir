<!DOCTYPE html>
<html>

<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.nav')
    <main class="page landing-page">
        @yield('content')
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h5>Jelajah</h5>
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/register">Daftar</a></li>
                        <li><a href="/login">Login</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h5>Tentang Kami</h5>
                    <ul>
                        <li></li>
                        <li><a href="#">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h5>Bantuan</h5>
                    <ul>
                        <li><a href="/faq">Tanya & Jawab</a></li>
                    </ul>
                </div>
                {{-- <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2021 Copyright Forex Academy</p>
        </div>
    </footer>
    @include('layouts.scripts')
</body>

</html>
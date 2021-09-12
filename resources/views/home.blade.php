@extends('layouts.app')
@section('content')


    <section class="clean-block clean-hero" style="color: rgba(0,161,252,0.76);background: url(&quot;{{ asset('/img/tech/frx.jpg') }}&quot;), var(--purple);border-color: rgb(8,159,251);">
        <div class="text">
            <h2 style="color: rgb(255,255,255);">Belajar Trading FOREX</h2>
            <p>Disini Anda Akan Belajar Tentang Awal Mula Forex Sampai Bagaimana Cara Trading Forex Yang Benar</p><a class="btn btn-outline-light btn-lg" type="button" href="#fitur">Pelajari Lebih Lanjut</a>
        </div>
    </section>
    <section class="clean-block clean-info dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Tempatnya Edukasi Forex</h2>
            </div>
            <p style="text-align: center;">Selamat Datang Di Webiste Kami Anda Akan Belajar Tentang Bagaimana Cara Trading Hingga Mengelola Dana Menjadi Besar Dan Tentunya Bisa anda Nikmati Hasilnya<br></p>
        </div>
    </section>
    <section class="clean-block features">
        <div id="fitur"></div>
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Fitur</h2>
                <p>Apa Saja Keuntungan Belajar Disini?</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                    <h4>Cerdas</h4>
                    <p>Tercerdaskan oleh Ilmu Yang Diberikan Melalui Orang Yang Sudah Berpengalaman&nbsp;</p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                    <h4>Pelatihan Khusus <em>Hari Minggu</em></h4>
                    <p>Silahkan Kontak Admin Jika Bersedia <em>tab </em>kontak</p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                    <h4>Update Berita Terkini</h4>
                    <p> Mendapat Berita Terkini Hingga Article Yang Terbaru</p>
                </div>
                <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                    <h4>Kompatibel dengan semua perangkat</h4>
                    <p>Bisa Diakses Dimana Saja Dan Kapan Saja Anda Mau</p>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block slider dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Galeri</h2>
                <p><br>Belajar Bagaimana Cara Entry Yang Sangat Tepat Berdasarkan Supply Dan Demand,Support dan Resistance Dan Berbagai Indikator<br><br></p>
            </div>
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="w-100 d-block d-inline" src="{{ asset('/img/scenery/trade.png') }}" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="{{ asset('/img/scenery/Trading-Forex.jpeg') }}" alt="Slide Image"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                </ol>
            </div>
        </div><iframe allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDI5OVWxnWHen9HxVp6QJ1GcLqB8tkf5BE&amp;q=East+Jakarta&amp;zoom=16" width="100%" height="400" style="padding: 45px;height: 404px;margin: -6px;"></iframe>
    </section>
    <section class="clean-block about-us">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Tentang Kami</h2>
                <p>Dimulai Dari Kesadaran Admin Akan Pentingnya Menjaga Posisi Entry Agar Disiplin Dan Melihat peluang Yang Sangat Besar Diforex Maka Dari Itu Admin Buat dan Kembangkan Forex Academy</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="{{ asset('/img/avatars/avatar2.jpg') }}">
                        <div class="card-body info">
                            <h4 class="card-title">Nadhir Ghassan</h4>
                            <p class="card-text">Pengen Jadi Trader yang Handal</p>
                            <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('style')
    <style>
        html {
            scroll-behavior: smooth;
        }

    </style>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <br />
    <br />
    <br />

    <br />

    <div class="" id="accordion" style="margin-bottom: 298px;">
        <div class="faqHeader"> Pertanyaan Umum</div>

        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Apa itu forex Academy</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="card-block">
                    Forex Academy adalah tempat belajar para trader baru maupun handal ,merupakan wadah berbagi bersama para trader nusantara. 
                </div>
            </div>
        </div>

        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Siapa saja yang bisa jadi member Forex Academy?</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="card-block">
                semua bisa asalkan minimal usia 18 tahun. 
                </div>
            </div>
        </div>
        
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Saya ada kendala dengan pendaftaran?</a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="card-block">
                    Mohon Di Cek Kembali Isian Yang Di Minta.
                </div>
            </div>
        </div>

        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">Jika masih ada kendala?</a>
                </h4>
            </div>
            <div id="collapseTwelve" class="panel-collapse collapse">
                <div class="card-block">
                    silahkan kontak admin di halaman kontak,cs kami akan segera menghubungi anda 1x24 jam.
                </div>
            </div>
        </div>

    </div>
</div>



@endsection

@section('style')
<style>

    .card-block {
        padding: 10px 40px 0;
    }

    .card-header {
        color: black;
        font-size: 16px;
    }

    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "e072"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>
@endsection

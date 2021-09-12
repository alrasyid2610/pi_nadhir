@extends('layouts.app')
@section('content')

    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Kontak Kami</h2>
                <p>jika di rasa ada kritik atau saran silahkan</p>
            </div>


            @if (auth()->user() == null)
                <div class="alert alert-danger" role="alert">
                    Anda harus login terlebih dahulu.
                </div>
            @else
                <form action="{{ route('kontak.store') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ auth()->user()->id }}" name="id">
                    <div class="form-group"><label for="name">Name</label><input class="form-control" type="text" id="name" name="name"></div>
                    <div class="form-group"><label for="subject">Subjek</label><input class="form-control" type="text" id="subject" name="subject"></div>
                    <div class="form-group"><label for="email">Email</label><input class="form-control" type="email" id="email" name="email"></div>
                    <div class="form-group"><label for="message">Pesan</label><textarea class="form-control" id="message" name="message"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">kirim</button></div>
                </form>

            @endif
        </div>

    </section>

@endsection

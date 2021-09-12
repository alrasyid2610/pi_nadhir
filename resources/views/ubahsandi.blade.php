@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <img src="{{ asset('/img/e6b2c1075f52c4d539f9d67e388d8a7c.jpg') }}" class="img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">

                                        <h4 class="text-dark mb-4">Selamat Datang!</h4>
                                        @error('invalidLogin')
                                            <p class="text-danger text-left">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                        {{-- @error('email')
                                            <div>{{ $message }}</div>
                                        @enderror
                                        @error('password')
                                            <div>{{ $message }}</div>
                                        @enderror --}}

                                    </div>

                                    @error('email')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    @error('jawaban')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <form class="user" action="{{ route('forgot4') }}" method="post">
                                        <input type="hidden" name="id" value="{{ $id }}">
                                        <input type="hidden" name="email" value="{{ $email }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Sandi Baru</label>
                                            <input class="form-control form-ontrol-user" type="password" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Sandi Baru" name="sandi">
                                        </div>
                                        <button class="btn btn-primary">Selanjutnya</button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

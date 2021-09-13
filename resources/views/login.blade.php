@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex"><img src="{{ asset('/img/e6b2c1075f52c4d539f9d67e388d8a7c.jpg') }}" style="width: 519px;height: 435px;"></div>
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
                                    <form class="user" action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Alamat Email..." name="email" style="margin: 17px;"></div>
                                        <div class="form-group"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password" style="margin: 17px;"></div>
                                        <div class="form-group">
                                        </div><button class="btn btn-primary btn-block text-white btn-user" type="submit" style="margin: 17px;">Login</button>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="{{ route('register') }}">Belum Punya Akun? Buat Disini!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

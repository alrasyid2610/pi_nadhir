@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <img src="{{ asset('/img/42f531221ce4f5d4614036c9f0021cd5.jpg') }}" style="width: 506px;" class="img-fluid">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">buat sebuah akun!</h4>
                            </div>
                            <form class="user" action="{{ route('register.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama Depan</label>
                                    <input class="form-control form-control-user 
                                            @error('first_name')
                                                border border-danger
                                            @enderror
                                            " type="text" id="exampleFirstName" placeholder="Nama Depan" name="first_name" value="{{ old('first_name') }}">

                                    @error('first_name')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Belakang</label>
                                    <input class="form-control
                                                @error('last_name')
                                                    border border-danger
                                                @enderror
                                                " type="text" id="exampleFirstName-1" placeholder="Nama Belakang" name="last_name" value="{{ old('last_name') }}">

                                    @error('last_name')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input class="form-control form-control-user
                                                @error('email')
                                                    border border-danger
                                                @enderror
                                            " type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Alamat Email" name="email" value="{{ old('email') }}">

                                    @error('email')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Pertanyaan Keamanan</label>
                                    <select class="form-control" name="pertanyaan_keamanan" id="">
                                        <option value="Siapa nama sahabat anda.?">Siapa nama sahabat anda.?</option>
                                        <option value="Apa warna kesukaan anda.?">Apa warna kesukaan anda.?</option>
                                        <option value="Apa makanan kesuakaan anda.?">Apa makanan kesuakaan anda.?</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Jawaban</label>
                                    <input class="form-control form-control-user
                                                @error('jawaban')
                                                    border border-danger
                                                @enderror
                                            " type="jawaban" id="jawaban" aria-describedby="jawaban" placeholder="jawaban" name="jawaban" value="{{ old('jawaban') }}">

                                    @error('jawaban')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Kata Sandi</label>
                                    
                                    <div class="input-group">
                                        <input class="form-control form-control-user
                                            @error('password')
                                                border border-danger
                                            @enderror
                                                " data-toggle="password" type="password" id="examplePasswordInput" placeholder="Kata Sandi" name="password">
                                        {{-- <input type="password" name="password" id="password" class="form-control" data-toggle="password" > --}}
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                            <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>
                                    @error('password')
                                            <small>{{ $message }}</small>
                                        @enderror

                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control form-control-user
                                                    @error('password')
                                                        border border-danger
                                                    @enderror
                                                " type="password" id="exampleRepeatPasswordInput" placeholder="Ketik Ulang Kata Sandi" name="password_confirmation" data-toggle="password">
                                        {{-- <input type="password" name="password" id="password" class="form-control" data-toggle="password" > --}}
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                            <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-block text-white btn-user" type="submit">Kirim</button>
                                <hr>
                            </form>
                            {{-- <div class="text-center"><a class="small" href="{{ route('index_forgot') }}">Forgot Password?</a></div> --}}
                            <div class="text-center"><a class="small" href="{{ route('login') }}">sudah punya akun, silahkan login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

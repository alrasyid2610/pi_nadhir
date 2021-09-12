@extends('layouts.main')
@section('content')

    <div class="row">
      <div class="col-12 col-lg-12">
        <div class="x_panel">
          <div class="x_content">
            <div class="col-lg-4">
              @if (\Session::has('message'))
                  <div class="alert alert-success">
                      {!! \Session::get('message') !!}
                  </div>
              @endif
              <form action="{{ route('admin_system.updateProfile', auth()->user()->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="first_name">Nama Depan</label>
                  <input class="form-control form-control-user 
                                    @error('first_name')
                                        border border-danger
                                    @enderror
                                    " type="text" id="first_name" placeholder="Nama Depan" name="name" 
                                    value="{{ old('first_name') == '' ? auth()->user()->name : '' }} ">
                                    
                            @error('first_name')
                                <small>{{ $message }}</small>
                            @enderror
                </div>

                <div class="form-group">
                  <label for="last_name">Nama Belakang</label>
                  <input class="form-control form-control-user 
                              @error('last_name')
                                border border-danger
                              @enderror" 
                              type="text" id="last_name" placeholder="Nama Depan" name="last_name" value="{{ old('last_name') == '' ? auth()->user()->last_name : '' }} ">

                            @error('last_name')
                                <small>{{ $message }}</small>
                            @enderror
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input class="form-control form-control-user
                              @error('email')
                                  border border-danger
                              @enderror
                          " type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Alamat Email" name="email" value="{{ old('first_name') == '' ? auth()->user()->email : '' }}">

                    @error('email')
                        <small>{{ $message }}</small>
                    @enderror
                </div>

                <button class="btn btn-sm btn-primary">Perbarui Data</button>
                
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>



@endsection

@section('script')

@endsection

@section('style')

@endsection
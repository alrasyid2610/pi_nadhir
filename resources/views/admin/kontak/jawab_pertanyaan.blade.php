@extends('layouts.main')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Jawab Pertanyaan <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown" id="dropdown1">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="dropdown-item" href="">Condition 1</a>
                                </li>

                            </ul>
                        </li>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    {{-- <h3>Form Input <small style="font-size: 12px">Input data according to shipping documents</small></h3> --}}
                </div>

                <div class="x_content">
                    <div class="container">
                        <div class="col-12">
                            @isset($data)
                                <form action="{{ route('kontak.store_jawaban', $data->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="admin_name" value="{{ auth()->user()->name }}">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="" value="{{ $data->name }}" readonly name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="" readonly value="{{ $data->email }}" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject" placeholder="" readonly value="{{ $data->subject }}" name="subject">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Pertanyaan</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly name="pertanyaan">{{ $data->pertanyaan }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Jawaban</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="jawaban"></textarea>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            @endisset
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

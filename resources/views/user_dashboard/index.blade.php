@extends('layouts.main')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Daftar Kontak <small></small></h2>
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
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Pertanyaan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->subject }}</td>
                                                <td>{{ $item->pertanyaan }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm text-white" href="{{ route('daftar_kontak.index.jawab_pertanyaan', $item->id) }}">Jawaban Pertanyaan</a>
                                                    <button class="btn btn-danger btn-sm">Delete Pertanyaan</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            @endisset
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script>
        var konten = document.getElementById("article");
        CKEDITOR.replace(konten, {
            language: 'en-gb',
            extraPlugins: 'language',
            extraPlugins: 'easyimage',
            cloudServices_tokenUrl: 'https://example.com/cs-token-endpoint',
            cloudServices_uploadUrl: 'https://your-organization-id.cke-cs.com/easyimage/upload/'
        });
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            if (fileName == '') {
                $(this).siblings(".custom-file-label").addClass("selected").html("Choose file...");
            } else {
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            }
        });
        // CKEDITOR.config.allowedContent = true;
        // CKEDITOR.editorConfig = function( config ) {
        //  config.extraPlugins = 'language';
        // };
    </script>
@endsection

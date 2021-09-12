@extends('layouts.main')
@section('content')
    <div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>



                <div class="modal-body">
                    <p>Are you sure about this ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirm">Delete</button>
                </div>
            </div>
        </div>
    </div>

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
                            <div class="table-responsive">

                                @isset($data)
                                    @if (auth()->user()->role == 'user')

                                        <table class="table table-sm ta">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Subject</th>
                                                    <th>Pertanyaan</th>
                                                    <th>Jawaban</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key => $item)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        <td>{{ $item->subject }}</td>
                                                        <td>{{ $item->pertanyaan }}</td>
                                                        <td>{{ $item->jawaban }}</td>
                                                        <td>{{ $item->status }}</td>
                                                        <td>
                                                            <form method="POST" action="{{ route('kontak.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-sm btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Pertanyaan" data-message="Are you sure you want to delete this pertanyaan ?">
                                                                    <i class="glyphicon glyphicon-trash"></i> Desafsaflete
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif




                                @endisset
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection


@section('script')
    <script>
        // <!-- Dialog show event handler -->
        $('#confirmDelete').on('show.bs.modal', function(e) {
            $message = $(e.relatedTarget).attr('data-message');
            $(this).find('.modal-body p').text($message);
            $title = $(e.relatedTarget).attr('data-title');
            $(this).find('.modal-title').text($title);

            // Pass form reference to modal for submission on yes/ok
            var form = $(e.relatedTarget).closest('form');
            $(this).find('.modal-footer #confirm').data('form', form);
        });

        // <!-- Form confirm (yes/ok) handler, submits form -->
        $('#confirmDelete').find('.modal-footer #confirm').on('click', function() {
            $(this).data('form').submit();
        });
    </script>
@endsection

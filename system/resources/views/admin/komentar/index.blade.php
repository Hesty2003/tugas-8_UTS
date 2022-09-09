@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data Komen
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Isi</th>
                            </thead>
                            <tbody>
                                @foreach($list_komentar as $komentar)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                        <a href="{{url('admin/komentar', $komentar->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                        </div>
                                    </td>
                                    <td>{{$komentar->nama}}</td>
                                    <td>{{$komentar->isi}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
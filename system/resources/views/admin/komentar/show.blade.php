@extends('template.base')

@section('content')

<div class="container">
            <div class="row">
                <div class="col md-12 mt-5">
                    <a href="{{url('admin/komentar')}}" class="btn btn-primary">Kembali</a>
                    <div class="card mt-3">
                        <div class="card-header">
                        Detail Data komentar
                    </div>
                    <div class="card-body">
                        <h3>{{$komentar->nama}}</h3>
                        <hr>
                        <p>
                            {!! nl2br($komentar->isi) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
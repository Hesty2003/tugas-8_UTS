@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col md-12 mt-5">
                <a href="{{ url('admin/artikel') }}">
                    <fa class="btn btn-primary">Kembali
                </a>
                <div class="card mt-3">
                    <div class="card-header">
                        Detail Data Artikel
                    </div>
                    <div class="card-body">
                        <h3>{{ $artikel->nama }}</h3>
                        <hr>
                        <p>
                            Judul : {{ $artikel->judul }}
                        </p>
                        <p>
                            Isi : {{ $artikel->isi }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

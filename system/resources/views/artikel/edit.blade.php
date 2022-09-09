@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col md-12 mt-5">
                <a href="{{ url('admin/artikel') }}"
                     class="btn btn-primary">Kembali
                </a>
                <div class="card mt-3">
                    <div class="card-header">
                        Tambah Data Artikel
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/artikel', $artikel->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="" class="control-label">Judul</label>
                                <input type="text" class="form-control" name="judul" value="{{ $artikel->judul }}">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Isi</label>
                                        <textarea class="form-control" name="isi"> {{ $artikel->isi }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-save"> Simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

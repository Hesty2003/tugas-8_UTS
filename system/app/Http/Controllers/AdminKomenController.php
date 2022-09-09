<?php

namespace App\Http\Controllers;
use App\Models\Komentar;

class AdminKomenController extends Controller{
    function index(){
        $data['list_komentar'] = Komentar::all();
        return view('admin.komentar.index',$data);
    }
    function store(){
        $Komentar = new Komentar;
        $Komentar->nama = request('nama');
        $Komentar->isi = request('isi');
        $Komentar->save();

        return redirect('komentar');
    }
    function show(Komentar $Komentar){
        $data['komentar'] = $Komentar;
        return view('admin.komentar.show',$data);
    }
}
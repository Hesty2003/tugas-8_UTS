<?php

namespace App\Http\Controllers;
use App\Models\Komentar;

class KomenController extends Controller{
    function store(){

        $komentar = new Komentar();
        $komentar->nama = request('nama');
        $komentar->isi = request('isi');
        $komentar->save();

        return redirect()->back();
    }
}
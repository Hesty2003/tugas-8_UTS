<?php

namespace App\Http\Controllers;
use App\Models\Artikel;


Class ArtikelController extends controller{
    function index(){
        $user = request()->user();
        $data['list_artikel'] = Artikel::all();
        return view('artikel.index', $data);
    }
    function create(){
        return view('artikel.create');
    }
    function store(){
        $artikel = new Artikel;
        $artikel->id_user = request()->user()->id;
        $artikel->judul = request('judul');
        $artikel->isi = request('isi');
        $artikel->save();
        
        return redirect('admin/artikel') -> with('success','Data Berhasil Ditambahkan');
    }
    function show(Artikel $artikel){
        $data['artikel']= $artikel;
        return view('artikel.show', $data);
    }
    function edit(Artikel $artikel){
        $data['artikel']= $artikel;
        return view('artikel.edit', $data);
    }
    function update(Artikel $artikel){
        $artikel->judul = request('judul');
        $artikel->isi = request('isi');
        $artikel->save();
        
        return redirect('admin/artikel') -> with('success','Data Berhasil Diedit');
    }
    function destroy(Artikel $artikel){
        $artikel->delete();

        return redirect('admin/artikel') -> with('danger','Data Berhasil Dihapus');
    }
    function filter(){
        $judul = request('judul');
        // $isi = explode(",", request('isi'));
        // $data['harga_min'] = $harga_min = request('harga_min');
        // $data['harga_max'] = $harga_max = request('harga_max');
        $data['list_artikel'] = Artikel::where('judul', 'like' , "%$judul%")->get();
        // $data['list_artikel'] = Artikel::whereIn('isi', $isi)->get();
        // $data['list_artikel'] = Artikel::WhereBetween('harga', [$harga_min, $harga_max])->get();
        // $data['judul'] = $judul;
        // $data['isi'] = $request('isi');
        return view('artikel.index', $data);
    }

}
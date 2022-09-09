<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Komentar;

class ClientController extends controller{

    function showBlog(){
        $data['list_artikel'] = Artikel::all();
        $data2['list_komentar'] = Komentar::all();
        return view('blog',$data,$data2);
    }

}
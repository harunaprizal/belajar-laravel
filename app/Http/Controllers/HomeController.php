<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama_sekolah' => 'Universitas Dian Nuswantoro',
            'alamat' => 'JL.Imam Bonjol '
        ];

        return view('v_home', $data);
    }

    public function about($id)
    {   
        return 'ini halaman about<br>' . $id ;
    }
}

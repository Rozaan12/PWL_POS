<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //selamt datang
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about($name)
    {
        return 'Nama: ' . $name . ' nim : 242107071011';
    }

    public function artikel($id)
    {
        return 'Ini Artikel Ke' . $id;
    }
}

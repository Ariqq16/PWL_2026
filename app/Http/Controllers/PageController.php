<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // GET /
    public function index()
    {
        return 'Selamat Datang';
    }

    // GET /about
    public function about()
    {
        return 'Nama: Mohammad Ariq Baihaqi | NIM: 123456789';
    }

    // GET /articles/{id}
    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
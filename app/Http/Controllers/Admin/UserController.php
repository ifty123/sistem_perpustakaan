<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index() {
        //ambil sum jumlah buku
        $jumlah_buku = DB::table('bookshelf')->sum('jumlah_buku_rak');
        $jumlah_pinjam = DB::table('bookshelf')->sum('jumlah_pinjam_rak');
        $jumlah_tersedia = $jumlah_buku - $jumlah_pinjam;
        return view('template.dashboard.main', ['jumlah_buku'=> $jumlah_buku, 'jumlah_pinjam'=>$jumlah_pinjam, 'jumlah_tersedia'=>$jumlah_tersedia]);
    }
}

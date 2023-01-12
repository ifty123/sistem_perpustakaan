<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index() {
        $books = DB::table('book')->get();
        return view('template.dashboard.buku', ['buku'=> $books]);
    }
}

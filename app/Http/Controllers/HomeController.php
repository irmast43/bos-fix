<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sql = 'SELECT * FROM jadwal ORDER BY idjadwal asc';
        $datajadwal = DB::select($sql);
        // dd($datajadwal);
        return view('index', ['datajadwal' => $datajadwal]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function create()
    {
        return view('daftar');
    }

    public function store(Request $request)
    {
        $in = $request->all();
        unset($in['_token']);
        DB::table('daftar')->insert($in);
        return redirect('/daftaruser');
    }

}

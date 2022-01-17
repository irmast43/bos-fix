<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pendaftaran;

class pendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pegawai = Pendaftaran::all();
        $sql = 'SELECT * FROM pendaftaran ORDER BY idpendaftaran asc';
        $data = DB::select($sql);
        // dd($data);
        return view('admin.pendaftaran.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
    	// 	'nama_team' => 'required',
    	// 	'nama_ketua' => 'required',
    	// 	'alamat' => 'required',
    	// 	'no_wa' => 'required',
    	// 	'id1' => 'required',
    	// 	'nickname1' => 'required',
    	// 	'id2' => 'required',
    	// 	'nickname2' => 'required',
    	// ]);

        // Pendaftaran::create([
    	// 	'nama_team' => $request->nama_team,
    	// 	'nama_ketua' => $request->nama_ketua,
    	// 	'alamat' => $request->alamat,
    	// 	'no_wa' => $request->no_wa,
    	// 	'id1' => $request->id1,
    	// 	'nickname1' => $request->nickname1,
    	// 	'id2' => $request->id2,
    	// 	'nickname2' => $request->nickname2,
    	// ]);

        $in = $request->all();
        unset($in['_token']);
        // dd($in);
        DB::table('pendaftaran')->insert($in);
        // Pendaftaran::insert($in);
        // return view('admin.pendaftaran.index')->with('Succes, Data berhasil ditambahkan');
        return redirect('/pendaftaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jadwal;
use Illuminate\Support\Carbon;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = 'SELECT * FROM jadwal ORDER BY idjadwal asc';
        $datajadwal = DB::select($sql);

        return view('admin.jadwal.index',['datajadwal'=>$datajadwal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $in = $request->all();
        unset($in['_token']);
        DB::table('jadwal')->insert($in);
        return redirect('/jadwal');
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
    public function edit($idjadwal)
    {
        $jadwal = DB::table('jadwal')->where('idjadwal',$idjadwal)->get();
           return view('admin.jadwal.edit',['jadwal'=>$jadwal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('pendaftaran')->where('idjadwal',$request->idjadwal)->update([
            'nama_event' => $request->nama_event,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
            'action' => $request->action,
        ]);
        $tanggal = Carbon::createFromFormat('dd-mm-yy', $request->tanggal)->timestamp;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('jadwal')->where('idjadwal', $id)->delete();
        return redirect('/jadwal')->with('Sukses','data berhasil dihapus');
    }
}

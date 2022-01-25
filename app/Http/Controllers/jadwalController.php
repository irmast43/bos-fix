<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Jadwal;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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

        return view('admin.jadwal.index', ['datajadwal' => $datajadwal]);
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
        // dd($in);
        $imageName = time() . '.' . $request->file('gambar')->getClientOriginalExtension();

        $request->file('gambar')->move(public_path('gambar'), $imageName);
        // dd($in);
        DB::table('jadwal')->insert(
            [
                'nama_event'   => $request->nama_event,
                'jenis'   => $request->jenis,
                'tanggal_mulai'   => $request->tanggal_mulai,
                'tanggal_selesai'   => $request->tanggal_selesai,
                'deskripsi'   => $request->Deskripsi,
                'gambar'   => $imageName,
                'action'   => $request->action
            ]
        );





        return redirect()->route('jadwal.index')->with(['success' => 'Data Berhasil Disimpan!']);


        // $request->validate([
        //     'gambar'    => ['required', 'image', 'max:2048'],

        // ]);
        // DB::table('jadwal')->insert([
        //     'nama_event'   => $request->nama_event,
        //     'jenis'   => $request->jenis,
        //     'tanggal_mulai'   => $request->tanggal_mulai,
        //     'tanggal_selesai'   => $request->tanggal_selesai,
        //     'deskripsi'   => $request->deskripsi,
        //     'gambar'   => $request->gambar->store('public/gambar'),
        //     'action'   => $request->action

        // ]);

        // return redirect('/jadwal');
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
        $jadwal = DB::table('jadwal')->where('idjadwal', $idjadwal)->get();
        return view('admin.jadwal.edit', ['jadwal' => $jadwal]);
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
        DB::table('jadwal')->where('idjadwal', $request->idjadwal)->update([
            'nama_event' => $request->nama_event,
            'jenis' => $request->jenis,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
            'action' => $request->action,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('/jadwal');
        // $tanggal = Carbon::createFromFormat('dd-mm-yy', $request->tanggal)->timestamp;
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
        return redirect('/jadwal')->with('Sukses', 'data berhasil dihapus');
    }
}

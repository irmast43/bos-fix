<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\Timestamp;
use Illuminate\Support\Facades\DB;
use App\Models\Sponsor;

class sponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = 'SELECT * FROM sponsor ORDER BY idsponsor asc';
        $datasponsor = DB::select($sql);

        return view('admin.sponsor.index',['datasponsor'=>$datasponsor]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sponsor.create');
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
        DB::table('sponsor')->insert($in);
        return redirect('/sponsor');
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
    public function edit($idsponsor)
    {
    //    $sponsor = Sponsor::find($idsponsor);
       $sponsor = DB::table('sponsor')->where('idsponsor',$idsponsor)->get();
    //    dd($sponsor);
       return view('admin.sponsor.edit',['sponsor'=>$sponsor]);
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
        DB::table('sponsor')->where('idsponsor',$request->idsponsor)->update([
            'nama_sponsor' => $request->nama_sponsor,
            'logo' => $request->logo,
        ]);
        // dd($request->idsponsor);

        return redirect('/sponsor')->with('succes', 'Data telah dirubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('sponsor')->where('idsponsor', $id)->delete();
        return redirect('/sponsor')->with('Sukses','data berhasil dihapus');
    }
}

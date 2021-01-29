<?php

namespace App\Http\Controllers;

use App\bannerMobile;
use File;
use Illuminate\Http\Request;

class BannerControllerMobile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = bannerMobile::all();

        return view('dashboard.bannerMobile.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('banner_mobile');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'bannerMobile';
		$file->move($tujuan_upload,$nama_file);

        bannerMobile::create(['bannerMobile' => $nama_file,]);
        return redirect()->route('bannerMobile.index')->with('success', 'created items successfully.');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = bannerMobile::findOrFail($id);
        $items->delete();
        File::delete('bannerMobile/'.$items->banner);
        return redirect()->route('bannerMobile.index')->with('success', 'delete successfully.');
    }
}

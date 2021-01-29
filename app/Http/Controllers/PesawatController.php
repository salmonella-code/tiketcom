<?php

namespace App\Http\Controllers;

use App\Plane;
use File;
use Illuminate\Http\Request;

class PesawatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Plane::all();

        return view('dashboard.pesawat-layout.index', compact('data'));
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
 
        $this->validate($request, [
            'brand_plane' => 'required',
            'description_plane' => 'required',
			'logo_plane' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('logo_plane');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'plane_logo';
		$file->move($tujuan_upload,$nama_file);
 
		Plane::create([
            'brand_plane' => $request->brand_plane,
            'description_plane' => $request->description_plane,
			'logo_plane' => $nama_file,
        ]);
        
        return redirect()->route('pesawat.index')->with('success', 'created items successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Plane::findOrFail($id);
        return view('dashboard.pesawat-layout.detail', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Plane::findOrFail($id);
        return view('dashboard.pesawat-layout.edit', compact('items'));
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

        $param = $request->all();
        $data = [
            'brand_plane' => $param['brand_plane'],
            'description_plane' => $param['description_plane']
        ];

        $file = $request->file('logo_plane');
        if($file){
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'plane_logo';
            $file->move($tujuan_upload,$nama_file);
            $data['logo_plane'] = $nama_file;
        }
        try{
            $item = Plane::findOrFail($id);
            $item->update($data);
            return redirect()->route('pesawat.index')->with('success', 'edit items successfully.');
        }
        catch (\Exception $e){
            return redirect()->route('pesawat.index');
        }
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Plane::findOrFail($id);
        $items->delete();
        File::delete('plane_logo/'.$items->logo_plane);
        return redirect()->route('pesawat.index')->with('success', 'delete items successfully.');
    }
}

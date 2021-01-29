<?php

namespace App\Http\Controllers;

use App\promo;
use File;
use Illuminate\Http\Request;

class promoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = promo::all();

        return view('dashboard.promosi-layout.index', compact('data'));
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
            'title_promotions' => 'required',
            'description_promotions' => 'required',
			'picture_promotions' => 'required|file|image|mimes:jpeg,png,jpg,webp|max:2048',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('picture_promotions');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'promosi';
		$file->move($tujuan_upload,$nama_file);
 
		promo::create([
            'title_promotions' => $request->title_promotions,
            'description_promotions' => $request->description_promotions,
			'picture_promotions' => $nama_file,
        ]);
        
        return redirect()->route('promotion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = promo::findOrFail($id);
        return view('dashboard.promosi-layout.detail', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = promo::findOrFail($id);
        return view('dashboard.promosi-layout.edit', compact('items'));
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
            'title_promotions' => $param['title_promotions'],
            'description_promotions' => $param['description_promotions']
        ];

        $file = $request->file('picture_promotions');
        if($file){
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'promosi';
            $file->move($tujuan_upload,$nama_file);
            $data['picture_promotions'] = $nama_file;
        }
        try{
            $item = promo::findOrFail($id);
            $item->update($data);
            return redirect()->route('promotion.index');
        }
        catch (\Exception $e){
            return redirect()->route('promotion.index');
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
        $items = promo::findOrFail($id);
        $items->delete();
        File::delete('promo/'.$items->picture_promotions);
        return redirect()->route('promotion.index');
    }
}

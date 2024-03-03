<?php

namespace App\Http\Controllers;

use App\Models\tambahbuku;
use Illuminate\Http\Request;

class TambahbukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         return view('buku')->with('bukus', tambahbuku::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function create(Request $request)
    {

        if($request->isMethod('POST')){
            $buku = new tambahbuku;
            $buku->judul = $request->judul;
            $buku->deskripsi = $request->deskripsi;
            $buku->penulis = $request->penulis;
            $buku->penerbit = $request->penerbit;
            $buku->sampul = $request->sampul;
            $buku->jumlah = $request->jumlah;
            $buku->tahun_terbit = $request->tahun_terbit;

            if($buku->save()){
                return redirect('/tambahbuku');
            }else{
                return redirect('/tambahbuku');
            }
        }
       
    
    }
     public function tambahbuku(Request $request)
    {
        //
    }
 
      public function delete(tambahbuku $tambahbuku, $id)
    {
        // dd($id)
        $delete = tambahbuku::find($id);

        $delete->delete();

        return back();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tambahbuku  $tambahbuku
     * @return \Illuminate\Http\Response
     */
    public function show(tambahbuku $tambahbuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tambahbuku  $tambahbuku
     * @return \Illuminate\Http\Response
     */
    public function edit(tambahbuku $tambahbuku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tambahbuku  $tambahbuku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tambahbuku $tambahbuku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tambahbuku  $tambahbuku
     * @return \Illuminate\Http\Response
     */
    public function destroy(tambahbuku $tambahbuku)
    {
        //
    }
}

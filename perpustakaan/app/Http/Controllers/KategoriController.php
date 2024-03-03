<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kategori')->with('kategoris', Kategori::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->isMethod('POST')){
            $kategori = new Kategori;
            $kategori->nama = $request->nama;
            if($kategori->save()){
                return redirect('/kategori');
            }else{
                return redirect('/kategori');
            }
        }
        return view('tambahkategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required'
        ]);
        Kategori::create($data);
        return redirect('/home/buku/kategori')->with('success, Kategori baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        return view('home.buku.kategori.edit', [
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        $data = $request->validate([
            'nama' => 'required',
        ]);
        $kategori->update($data);
        return redirect('/home/buku/kategori')->with('update', 'Kategori berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Kategori $kategori)
    // {
    //     $kategori->delete();
    //     return redirect('/home/buku/kategori')->with('success', 'Kategori berhasil di hapus');
    // }
    public function delete(Kategori $kategori, $id)
    {
        $delete = Kategori::find($id);

        $delete->delete();

        return back();
    }
    
}

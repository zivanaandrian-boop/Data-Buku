<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\kategori;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allbuku = buku ::all();
        return view('buku.index', compact('allbuku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $penerbit = Penerbit::all();
        $kategori = Kategori::all();
        return view ('buku.create', compact('penerbit', 'kategori'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedDate = $request->validate([
            'judul' => 'required|max:255',
             'pengarang' => 'required|max:100',
              'tahun_terbit' => 'required|integer:4',
               'kategori_id' => 'required',
                'penerbit_id' => 'required',
        ]);

        buku::create($validatedDate);

        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(buku $buku)
    {
        //
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buku $buku)
    {
        //
        $penerbit = Penerbit::all();
        $kategori = kategori::all();
        return view('buku.edit', compact('buku', 'penerbit', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, buku $buku)
    {
        //
          $validatedDate = $request->validate([
           'judul' => 'required|max:255',
             'pengarang' => 'required|max:100',
              'tahun_terbit' => 'required|integer:4',
               'kategori_id' => 'required',
                'penerbit_id' => 'required',
        ]);

        $buku->update($validatedDate);

        return redirect()->route('buku.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buku $buku)
    {
        //
         $buku->delete();
return redirect()->route('buku.index');
    
    }
}

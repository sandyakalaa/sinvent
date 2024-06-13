<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        $data = array("data"=>$kategori);

        return response()->json($data);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate( [
            'deskripsi'   => 'required | unique:kategori',
            'kategori'     => 'required | in:M,A,BHP,BTHP',
        ]);


        //create post
        $kategoribaru = Kategori::create([
            'deskripsi'  => $request->deskripsi,
            'kategori'  => $request->kategori,
        ]);

        $data = array("data"=>$kategoribaru);
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        //
    }
}

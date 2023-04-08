<?php

namespace App\Http\Controllers;

use App\Models\goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class goodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = goods::orderBy('id_barang', 'desc')->get();
        return view('goods.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('goods.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('kode_barang', $request->kode_barang);
        Session::flash('nama_barang', $request->nama_barang);
        Session::flash('kategori_barang', $request->kategori_barang);
        Session::flash('harga', $request->harga);
        Session::flash('qty', $request->qty);
        $request->validate([
            'kode_barang'=>'required|unique:goods,kode_barang',
            'nama_barang'=>'required',
            'kategori_barang'=>'required',
            'harga'=>'required|numeric',
            'qty'=>'required|numeric',
        ],[
            'kode_barang.required'=>'kode_barang wajib diisi',
            'kode_barang.unique'=>'kode_barang wajib diisi',
            'nama_barang.required'=>'nama_barang yang diisikan sudah ada dalam database',
            'kategori_barang.required'=>'kategori_barang wajib diisi',
            'harga.required'=>'harga wajib diisi',
            'harga.numeric'=>'harga wajib dalam angka',
            'qty.required'=>'qty wajib diisi',
            'qty.numeric'=>'qty wajib dalam angka',
        ]);
        $data = [
            'kode_barang'=>$request->kode_barang,
            'nama_barang'=>$request->nama_barang,
            'kategori_barang'=>$request->kategori_barang,
            'harga'=>$request->harga,
            'qty'=>$request->qty,
        ];
        goods::create($data);
        return redirect()->to('goods')->with('success','Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

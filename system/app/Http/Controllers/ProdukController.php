<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $data['list_produk'] = Produk::all();
        return view('admin.produk.index', $data);
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $kategori = New Produk;
        $kategori->nama_produk = request('nama_produk');
        $kategori->save();

        return redirect('produk');
    }

    public function show($id)
    {
        return view('admin.produk.show');
    }

    public function edit($id)
    {
        $data['produk'] = produk::find($id);
        return view('admin.produk.edit', $data);
    }

    public function update(Produk $produk, $id)
    {
        $produk->nama_produk= request('nama_produk');
        $produk->save();

        return redirect('produk');
    }

    public function destroy($produk)
    {
        Produk::destroy($produk);

        return back();
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    
    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        return view('admin.kategori.index', $data);
    }

    
    public function create()
    {
        return view('admin.kategori.create');
    }

    
    public function store(Request $request)
    {
        $kategori = New Kategori;
        $kategori->nama_kategori = request('nama_kategori');
        $kategori->save();

        return redirect('kategori');

    }

   
    public function show($kategori)
    {
        return view('admin.kategori.show');
    }

    public function edit($id)
    {
        $data['kategori'] = Kategori::find($id);
        return view('admin.kategori.edit', $data);
    }

   
    public function update(Kategori $kategori)
    {
        $kategori->nama_kategori = request('nama_kategori');
        $kategori->save();

        return redirect('kategori');
    }

    public function destroy($kategori)
    {
        Kategori::destroy($kategori);

        return back();
    }
}
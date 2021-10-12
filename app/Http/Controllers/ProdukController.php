<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdukRequest;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function GuzzleHttp\Promise\all;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->role !== 'Admin'){
            abort(403);
            // echo "Terlarang";
            // return;
        }

        $i = 1;
        $title = "ListView Produk";
        $produk = Produk::all();
        return view('produk.index',[
            'title' => $title,
            'produk' => $produk,
            'i' => $i
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(empty($request -> file('gambar'))){
            Produk::create([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'sedia' => $request->sedia,
                'berat' => $request->berat,
            ]);
            return redirect()->route('produk.index');
        }
        else{
            Produk::create([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'sedia' => $request->sedia,
                'berat' => $request->berat,
                'gambar' => $request->file('gambar')->store('gambar-produk'),
            ]);
            return redirect()->route('produk.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nama_produk)
    {
        $title = "Edit Produk";

        if (empty($request->file('gambar'))) {
            $produk = Produk::where('nama_produk', $nama_produk)->first();
            $produk->update([
                'nama_produk'   => $request->nama_produk,
                'harga'         => $request->harga,
                'sedia'         => $request->sedia,
                'berat'         => $request->berat,                
            ]);
        } else {
            $produk = Produk::where('nama_produk', $nama_produk)->first();
            Storage::delete($produk->gambar);
            $produk->update([
                'nama_produk'   => $request->nama_produk,
                'harga'         => $request->harga,
                'sedia'         => $request->sedia,
                'berat'         => $request->berat,
                'gambar'        => $request->file('gambar')->store('gambar-produk'),
            ]);
        }


        return view('produk.update', [
            'produk'  => $produk,
            'title' => $title
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($produk)
    {
        Produk::findOrFail($produk)->delete();
        Storage::delete($produk->gambar-produk);
        return redirect() -> back();
        // return redirect() -> route('produk.index')-> with('success','Data berhasil dihapus.');
    }
}

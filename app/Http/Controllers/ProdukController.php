<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::select(
            'nama',
            'harga'
        )
        ->with(['warna_produk'=> function($query) use ($id){
            $query->select('id', 'produk_id', 'warna')
            ->where('produk_id', $id);
            // ->get();
        }])
        ->find($id);

        return response()->json([
            'success'  => true,
            'messages' => 'produk',
            'data'     => $produk
        ], 200);
    }

}

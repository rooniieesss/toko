<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Event;
use App\Team;
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
            'id',
            'nama',
            'harga'
        )
        ->with(['warna_produk'=> function($query) use ($id){
            $query->select('id', 'produk_id', 'warna');
            // ->where('produk_id', $id);
            // ->get();
        }])
        ->find($id);

        return response()->json([
            'success'  => true,
            'messages' => 'produk',
            'data'     => $produk
        ], 200);
    }

    public function showEvent($id)
    {
        $event = Team::select(
            '*'
        )
        ->with(['events'=> function($query) {
            $query->select(
                'round_time',
                'machine_id',
                'team_name'
            );
        }])
        ->find('A');

        return response()->json([
            'success'  => true,
            'messages' => 'event',
            'data'     => $event
        ], 200);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WarnaProduk extends Model
{
    protected $table    = 'warna_produk';
    // protected $dateFormat = 'd M Y H:i';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'produk_id',
        'warna'
    ];

    public function produk(){
    	return $this->belongsTo('App\Produk', 'produk_id', 'id');
    }
}

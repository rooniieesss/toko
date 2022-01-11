<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table    = 'produk';
    // protected $dateFormat = 'd M Y H:i';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'harga'
    ];

    public function warna_produk()
    {
        // return $this->hasMany('App\WarnaProduk'); //(fail)
        // return $this->hasMany('App\WarnaProduk', 'id'); //(fail)
        return $this->hasMany('App\WarnaProduk', 'produk_id'); //(fail)
        // return $this->hasMany('App\WarnaProduk', 'id', 'produk_id'); //(fail)
        // return $this->hasMany('App\WarnaProduk', 'produk_id', 'id'); //(fail)
    }
}

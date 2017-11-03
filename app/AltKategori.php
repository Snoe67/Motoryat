<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 2.11.2017
 * Time: 05:31
 */

namespace App;


class AltKategori extends \Eloquent
{
    protected $table = "alt_kategoriler";
    protected $primaryKey = "alt_kategori_id";

    public function anakategori(){
        return $this->belongsTo('\App\AnaKategori', 'fk_ana_kategori_id', 'ana_kategori_id');
    }

    public function marka(){
        return $this->hasMany('\App\Marka','fk_alt_kategori_id');
    }

    public function ilan(){
        return $this->hasMany('\App\Ilan', 'fk_ilan_alt_kategori_id');
    }
}
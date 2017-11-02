<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 2.11.2017
 * Time: 05:29
 */

namespace App;


class AnaKategori extends \Eloquent
{
    protected $table = "ana_kategoriler";
    protected $primaryKey = "ana_kategori_id";

    public function altkategori(){
        return $this->hasMany('\App\AltKategori','fk_ana_kategori_id');
    }
}
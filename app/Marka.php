<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 2.11.2017
 * Time: 05:34
 */

namespace App;


class Marka extends \Eloquent
{
    protected $table = "markalar";
    protected $primaryKey = "marka_id";

    public function altkategori(){
        return $this->belongsTo('\App\AltKategori', 'fk_alt_kategori_id');
    }

    public function model(){
        return $this->hasMany('\App\Model','fk_marka_id');
    }
}
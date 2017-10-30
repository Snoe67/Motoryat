<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 24.10.2017
 * Time: 19:31
 */

namespace App;


class IL extends \Eloquent
{

    protected $table = "iller";
    protected $primaryKey = "il_id";

    public function ulke(){
        return $this->belongsTo('\App\Ulke', 'fk_ulke_id');
    }

    public function ilce(){
        return $this->hasMany('\App\Ilce','fk_il_id');
    }

}
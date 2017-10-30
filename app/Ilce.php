<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 24.10.2017
 * Time: 19:31
 */

namespace App;


class Ilce extends \Eloquent
{

    protected $table = "ilceler";
    protected $primaryKey = "ilce_id";

    public function il(){
        return $this->belongsTo('\App\IL', 'fk_il_id');
    }

}
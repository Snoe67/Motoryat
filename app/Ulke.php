<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 24.10.2017
 * Time: 19:30
 */

namespace App;


class Ulke extends \Eloquent
{
    protected $table = "ulkeler";
    protected $primaryKey = "ulke_id";

    public function il(){
        return $this->hasMany('\App\IL', 'fk_ulke_id');
    }

}
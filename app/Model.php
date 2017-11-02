<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 2.11.2017
 * Time: 05:34
 */

namespace App;


class Model extends \Eloquent
{
    protected $table = "modeller";
    protected $primaryKey = "model_id";

    public function marka(){
        return $this->belongsTo('\App\Marka', 'fk_marka_id');
    }
}
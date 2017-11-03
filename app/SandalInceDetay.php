<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 06:40
 */

namespace App;


class SandalInceDetay extends \Eloquent
{
    protected $table = "sandal_ince_detaylar";
    protected $primaryKey = "sid_ilan_id";
    protected $fillable = [
        'fishfinder', 'kurekli', 'motorlu', 'radar', 'tente'
    ];
}
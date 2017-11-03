<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 06:49
 */

namespace App;


class GuletDetay extends \Eloquent
{
    protected $table = "gulet_detaylar";
    protected $primaryKey = "gd_ilan_id";
    protected $fillable = [
        'boy', 'en', 'kamara_sayisi', 'yatak_sayisi', 'motor_gucu', 'motor_adedi'
    ];
}
<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 07:29
 */

namespace App;


class YolcuGemisiDetay extends \Eloquent
{
    protected $table = "yolcu_gemisi_detaylar";
    protected $primaryKey = "ygd_ilan_id";
    protected $fillable = [
        'boy', 'en', 'yukseklik', 'yolcu_kapasitesi'
    ];
}
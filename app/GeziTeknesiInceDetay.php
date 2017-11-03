<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 06:44
 */

namespace App;


class GeziTeknesiInceDetay extends \Eloquent
{
    protected $table = "gezi_teknesi_ince_detaylar";
    protected $primaryKey = "gtid_ilan_id";
    protected $fillable = [
        'bar', 'can_yelegi', 'dus', 'elektrikli_irgat', 'filika', 'gps', 'hidrofor', 'isiklandirma', 'jenerator',
        'klima', 'kurtarma_botu', 'mutfak', 'muzik_sistemi', 'sonar_radar', 'soyunma_kabini', 'telsiz',
        'temiz_su_tanki', 'tuvalet', 'yakit_tanki', 'yangin_sondurme_tertibati', 'yuzme_merdiveni', 'sezlong'
    ];
}
<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 06:56
 */

namespace App;


class BalikciTeknesiInceDetay extends \Eloquent
{
    protected $table = "balikci_teknesi_ince_detaylar";
    protected $primaryKey = "btid_ilan_id";
    protected $fillable = [
        'balik_pompasi', 'buzhane', 'elektrikli_irgat', 'fishfinder', 'gps', 'jenerator', 'kamara',
        'kirli_su_tanki', 'oto_pilot', 'radar', 'seyir_feneri', 'sonar', 'telsiz', 'temiz_su_tanki'
    ];
}
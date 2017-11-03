<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 07:31
 */

namespace App;


class YolcuGemisiInceDetay extends \Eloquent
{
    protected $table = "yolcu_gemisi_ince_detaylar";
    protected $primaryKey = "ygid_ilan_id";
    protected $fillable = [
        'alarm', 'dondurucu', 'elektrikli_irgat', 'gps', 'hiz_gostergesi', 'jenerator', 'kirli_su_tanki',
        'klima', 'muzik_sistemi', 'projektor', 'pusula', 'radar', 'telsiz', 'temiz_su_tanki', 'yakit_tanki',
        'yangin_sondurme_tertibati', 'sisme_bot'
    ];
}
<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 06:09
 */

namespace App;


class YelkenliInceDetay extends \Eloquent
{
    protected $table = "yelkenli_ince_detaylar";
    protected $primaryKey = "yid_ilan_id";
    protected $fillable = [
        'alarm', 'aspirator', 'bulasik_makinesi', 'buzdolabi', 'cd_dvd_calar', 'derin_dondurucu', 'derinlik_gostergesi',
        'firin', 'gps', 'hiz_gostergesi', 'klima', 'lavabo', 'mikrodalga', 'ocak', 'oto_pilot', 'pusula', 'radar',
        'televizyon', 'telsiz', 'uydu_sistemi', 'wc'
    ];
}
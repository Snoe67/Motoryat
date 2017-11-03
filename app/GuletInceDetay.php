<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 06:51
 */

namespace App;


class GuletInceDetay extends \Eloquent
{
    protected $table = "gulet_ince_detaylar";
    protected $primaryKey = "gid_ilan_id";
    protected $fillable = [
        'buzluk', 'derinlik_gostergesi', 'dondurucu', 'elektrikli_irgat', 'gps', 'hiz_gostergesi', 'kirli_su_tanki',
        'klima', 'projektor', 'radar', 'seyir_feneri', 'sogutucu', 'televizyon', 'temiz_su_tanki',
        'yangin_sondurme_tertibati', 'yuzme_merdiveni'
    ];
}
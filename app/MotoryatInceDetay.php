<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 2.11.2017
 * Time: 09:35
 */

namespace App;


class MotoryatInceDetay extends \Eloquent
{
    protected $table = "motoryat_ince_detaylar";
    protected $primaryKey = "mid_ilan_id";
    protected $fillable = [
        'alarm','buz_yapici','buzdolabi','buzluk','cd_dvd_calar','derinlik_gostergesi','elektrikli_irgat','firin',
        'gps','hidrolik_tesisat','hiz_gostergesi','jenerator','kirli_su_tanki','klima','mutfak','palamer','projektor',
        'pusula','radar','salon','sogutucu','telsiz','temiz_su_tanki','yakit_tanki','yangin_sondurma_tertibati',
        'yuzme_merdiveni','sisme_bot'
    ];
}
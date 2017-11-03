<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 06:24
 */

namespace App;


class SuratTekneleriInceDetay extends \Eloquent
{
    protected $table = "surat_tekneleri_ince_detaylar";
    protected $primaryKey = "stid_ilan_id";
    protected $fillable = [
        'dus', 'elektrikli_irgat', 'elektrikli_koltuk', 'gps', 'hidrolik_direksiyon', 'jenerator_redresor',
        'kamara', 'mutfak', 'muzik_sistemi', 'projektor_seyir_lambasi', 'romork', 'su_tanki', 'telsiz',
        'tente', 'trim', 'tuvalet', 'yuzme_merdiveni'
    ];
}
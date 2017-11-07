<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 12:30
 */

namespace App;


class IlanResim extends \Eloquent
{
    protected $table = "ilan_resimleri";
    protected $primaryKey = "ilan_resim_id";
    protected $fillable = [
        'ilan_resim_sira', 'ilan_resim_link', 'ilan_resim_orta_link'
    ];
}
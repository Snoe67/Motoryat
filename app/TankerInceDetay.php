<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 07:37
 */

namespace App;


class TankerInceDetay extends \Eloquent
{
    protected $table = "tanker_ince_detaylar";
    protected $primaryKey = "tid_ilan_id";
    protected $fillable = [
        'atik_su_tanki', 'elektrikli_irgat', 'filika', 'gps', 'mutfak', 'radar',
        'sonar', 'telsiz', 'tuvalet', 'uydu_sistemi'
    ];
}
<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 12:32
 */

namespace App;


class IlanVideo extends \Eloquent
{
    protected $table = "ilan_videolari";
    protected $primaryKey = "ilan_video_id";
    protected $fillable = [
        'ilan_video_sira', 'ilan_video_link'
    ];
}
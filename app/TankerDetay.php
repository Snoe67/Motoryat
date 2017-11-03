<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 07:36
 */

namespace App;


class TankerDetay extends \Eloquent
{
    protected $table = "tanker_detaylar";
    protected $primaryKey = "td_ilan_id";
    protected $fillable = [
        'boy', 'en', 'kamara_sayisi', 'motor_gucu', 'tonaj'
    ];
}
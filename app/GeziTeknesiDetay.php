<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 06:42
 */

namespace App;


class GeziTeknesiDetay extends \Eloquent
{
    protected $table = "gezi_teknesi_detaylar";
    protected $primaryKey = "gtd_ilan_id";
    protected $fillable = [
        'yolcu_kapasite', 'boy', 'govde_tip_id', 'motor_adedi', 'motor_gucu'
    ];

    public function govdetip()
    {
        return $this->belongsTo('\App\GovdeTip', 'govde_tip_id', 'govde_id');
    }
}
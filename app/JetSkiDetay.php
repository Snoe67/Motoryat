<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 06:34
 */

namespace App;


class JetSkiDetay extends \Eloquent
{
    protected $table = "jet_ski_detaylar";
    protected $primaryKey = "jsd_ilan_id";
    protected $fillable = [
        'motor_hacmi','motor_gucu','motor_tip_id','kisi_kapasite'
    ];

    public function motortip()
    {
        return $this->belongsTo('\App\MotorTip', 'motor_tip_id', 'motor_t_id');
    }
}
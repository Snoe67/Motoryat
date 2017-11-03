<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 06:29
 */

namespace App;


class BotDetay extends \Eloquent
{
    protected $table = "bot_detaylar";
    protected $primaryKey = "bd_ilan_id";
    protected $fillable = [
        'motor_marka_id', 'boy', 'govde_tip_id', 'taban_tip_id', 'kisi_kapasite'
    ];

    public function tabantip()
    {
        return $this->belongsTo('\App\TabanTip', 'taban_tip_id', 'taban_id');
    }

    public function motormarka()
    {
        return $this->belongsTo('\App\MotorMarka', 'motor_marka_id', 'motor_id');
    }

    public function govdetip()
    {
        return $this->belongsTo('\App\GovdeTip', 'govde_tip_id', 'govde_id');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 2.11.2017
 * Time: 09:33
 */

namespace App;


class MotoryatDetay extends \Eloquent
{
    protected $table = "motoryat_detaylar";
    protected $primaryKey = "md_ilan_id";
    protected $fillable = [
        'motor_adedi', 'motor_gucu', 'yakit_tip_id', 'calisma_saati', 'govde_tip_id', 'boy',
        'en', 'kamara_sayisi', 'yatak_sayisi', 'flybridge_durumu', 'bulundugu_ulke_id', 'motor_marka_id'
    ];

    public function motormarka()
    {
        return $this->belongsTo('\App\MotorMarka', 'motor_marka_id', 'motor_id');
    }

    public function yakittip()
    {
        return $this->belongsTo('\App\YakitTip', 'yakit_tip_id', 'yakit_id');
    }

    public function govdetip()
    {
        return $this->belongsTo('\App\GovdeTip', 'govde_tip_id', 'govde_id');
    }

    public function bulunanulke()
    {
        return $this->belongsTo('\App\BulunanUlke', 'bulundugu_ulke_id', 'bulunan_ulke_id');
    }
}
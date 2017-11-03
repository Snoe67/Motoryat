<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 06:02
 */

namespace App;


class YelkenliDetay extends \Eloquent
{
    protected $table = "yelkenli_detaylar";
    protected $primaryKey = "yd_ilan_id";
    protected $fillable = [
        'yelkenli_tip_id', 'govde_tip_id', 'boy', 'en', 'kamara_sayisi', 'motor_adedi', 'motor_gucu', 'bulundugu_ulke_id'
    ];

    public function yelkenlitip()
    {
        return $this->belongsTo('\App\YelkenliTip', 'yelkenli_tip_id', 'yelkenli_id');
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
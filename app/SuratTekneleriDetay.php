<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 06:20
 */

namespace App;


class SuratTekneleriDetay extends \Eloquent
{
    protected $table = "surat_tekneleri_detaylar";
    protected $primaryKey = "std_ilan_id";
    protected $fillable = [
        'govde_tip_id', 'boy', 'motor_adedi', 'motor_marka_id', 'motor_gucu', 'maksimum_hiz'
    ];

    public function motormarka()
    {
        return $this->belongsTo('\App\MotorMarka', 'motor_marka_id', 'motor_id');
    }

    public function govdetip()
    {
        return $this->belongsTo('\App\GovdeTip', 'govde_tip_id', 'govde_id');
    }
}
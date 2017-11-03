<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 06:55
 */

namespace App;


class BalikciTeknesiDetay extends \Eloquent
{
    protected $table = "balikci_teknesi_detaylar";
    protected $primaryKey = "btd_ilan_id";
    protected $fillable = [
        'boy', 'govde_tip_id', 'liman_kayitli'
    ];

    public function govdetip()
    {
        return $this->belongsTo('\App\GovdeTip', 'govde_tip_id', 'govde_id');
    }
}
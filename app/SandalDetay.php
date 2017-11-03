<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 3.11.2017
 * Time: 06:38
 */

namespace App;


class SandalDetay extends \Eloquent
{
    protected $table = "sandal_detaylar";
    protected $primaryKey = "sd_ilan_id";
    protected $fillable = [
        'govde_tip_id', 'boy', 'liman_kayitli'
    ];

    public function govdetip()
    {
        return $this->belongsTo('\App\GovdeTip', 'govde_tip_id', 'govde_id');
    }
}
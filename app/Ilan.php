<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 2.11.2017
 * Time: 06:29
 */

namespace App;


class Ilan extends \Eloquent
{
    protected $table = "ilanlar";
    protected $primaryKey = "ilan_id";

    public function ilanresim()
    {
        return $this->hasMany('\App\IlanResim', 'fk_ilan_id', 'ilan_id');
    }

    public function ilanvideo()
    {
        return $this->hasMany('\App\IlanVideo', 'fk_ilan_id', 'ilan_id');
    }

    public function parabirimi()
    {
        return $this->belongsTo('\App\ParaBirimi', 'fk_para_birimi_id', 'para_birimi_id');
    }

    public function durum()
    {
        return $this->belongsTo('\App\Durum', 'fk_ilan_durum_id', 'durum_id');
    }

    public function motoryatdetay()
    {
        return $this->hasOne('\App\MotoryatDetay', 'md_ilan_id');
    }

    public function motoryatincedetay()
    {
        return $this->hasOne('\App\MotoryatInceDetay', 'mid_ilan_id');
    }

    public function yelkenlidetay()
    {
        return $this->hasOne('\App\YelkenliDetay', 'yd_ilan_id');
    }

    public function yelkenliincedetay()
    {
        return $this->hasOne('\App\YelkenliInceDetay', 'yid_ilan_id');
    }

    public function surattekneleridetay()
    {
        return $this->hasOne('\App\SuratTekneleriDetay', 'std_ilan_id');
    }

    public function surattekneleriincedetay()
    {
        return $this->hasOne('\App\SuratTekneleriInceDetay', 'stid_ilan_id');
    }

    public function botdetay()
    {
        return $this->hasOne('\App\BotDetay', 'bd_ilan_id');
    }

    public function jetskidetay()
    {
        return $this->hasOne('\App\JetSkiDetay', 'jsd_ilan_id');
    }

    public function sandaldetay()
    {
        return $this->hasOne('\App\SandalDetay', 'sd_ilan_id');
    }

    public function sandalincedetay()
    {
        return $this->hasOne('\App\SandalInceDetay', 'sid_ilan_id');
    }

    public function geziteknesidetay()
    {
        return $this->hasOne('\App\GeziTeknesiDetay', 'gtd_ilan_id');
    }

    public function geziteknesiincedetay()
    {
        return $this->hasOne('\App\GeziTeknesiInceDetay', 'gtid_ilan_id');
    }

    public function guletdetay()
    {
        return $this->hasOne('\App\GuletDetay', 'gd_ilan_id');
    }

    public function guletincedetay()
    {
        return $this->hasOne('\App\GuletInceDetay', 'gid_ilan_id');
    }

    public function balikciteknesidetay()
    {
        return $this->hasOne('\App\BalikciTeknesiDetay', 'btd_ilan_id');
    }

    public function balikciteknesiincedetay()
    {
        return $this->hasOne('\App\BalikciTeknesiInceDetay', 'btid_ilan_id');
    }

    public function yolcugemisidetay()
    {
        return $this->hasOne('\App\YolcuGemisiDetay', 'ygd_ilan_id');
    }

    public function yolcugemisiincedetay()
    {
        return $this->hasOne('\App\YolcuGemisiInceDetay', 'ygid_ilan_id');
    }

    public function tankerdetay()
    {
        return $this->hasOne('\App\TankerDetay', 'td_ilan_id');
    }

    public function tankerincedetay()
    {
        return $this->hasOne('\App\TankerInceDetay', 'tid_ilan_id');
    }

}
<?php namespace App\Model;

/**
 * Eloquent class to describe the promotion_external_interval table
 *
 * automatically generated by ModelGenerator.php
 */
class PromotionExternalInterval extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'promotion_external_interval';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('start', 'finish');
    }

    protected $fillable = array('promotion_key', 'start', 'finish', 'store_key', 'cst_id_type', 'points',
        'count_ticket', 'accum_ticket', 'amount', 'promo_data', 'status');


}

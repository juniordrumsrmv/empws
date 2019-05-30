<?php namespace App\Model;

/**
 * Eloquent class to describe the accum_refund_item table
 *
 * automatically generated by ModelGenerator.php
 */
class AccumRefundItem extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'accum_refund_item';

    public $primaryKey = 'transaction';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('desc_plu', 'quantity', 'quantity_canc', 'amount', 'amount_canc', 'discount',
        'discount_canc', 'department_key', 'maker_key');


}

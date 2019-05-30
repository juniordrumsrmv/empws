<?php namespace App\Model;

/**
 * Eloquent class to describe the accum_customer_item table
 *
 * automatically generated by ModelGenerator.php
 */
class AccumCustomerItem extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'accum_customer_item';

    public $primaryKey = 'plu_id';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('quantity', 'quantity_canc', 'amount', 'amount_canc', 'return_quantity',
        'return_amount');


}
<?php namespace App\Model;

/**
 * Eloquent class to describe the accum_item_discount table
 *
 * automatically generated by ModelGenerator.php
 */
class AccumItemDiscount extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'accum_item_discount';

    public $primaryKey = 'discount_type';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('transaction_counter', 'quantity', 'quantity_canc', 'amount', 'amount_canc',
        'return_quantity', 'return_amount', 'department_key', 'maker_key');


}

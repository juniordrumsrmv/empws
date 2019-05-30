<?php namespace App\Model;

/**
 * Eloquent class to describe the accum_oper table
 *
 * automatically generated by ModelGenerator.php
 */
class AccumOper extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'accum_oper';

    public $primaryKey = 'fiscal_date';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('quantity', 'quantity_canc', 'amount', 'amount_canc', 'quantity_pickup',
        'amount_pickup', 'amount_loan');


}

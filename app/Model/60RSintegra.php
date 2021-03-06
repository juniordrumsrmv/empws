<?php namespace App\Model;

/**
 * Eloquent class to describe the 60R_sintegra table
 *
 * automatically generated by ModelGenerator.php
 */
class 60RSintegra extends \Illuminate\Database\Eloquent\Model
{
    protected $table = '60R_sintegra';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('store_key', 'type', 'sub_type', 'fiscal_month', 'plu_id', 'quantity', 'amount',
        'base_amount', 'pos_id');


}

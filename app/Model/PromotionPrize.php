<?php namespace App\Model;

/**
 * Eloquent class to describe the promotion_prize table
 *
 * automatically generated by ModelGenerator.php
 */
class PromotionPrize extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'promotion_prize';

    public $primaryKey = 'store_group_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('initial_number', 'increase', 'quantity', 'amount', 'status');


}

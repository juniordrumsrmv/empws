<?php namespace App\Model;

/**
 * Eloquent class to describe the sale_promotion_kit table
 *
 * automatically generated by ModelGenerator.php
 */
class SalePromotionKit extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'sale_promotion_kit';

    public $primaryKey = 'plu_kit';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('quantity_min', 'quantity_max', 'quantity_lim', 'discount', 'discount_percent',
        'quantity');


}

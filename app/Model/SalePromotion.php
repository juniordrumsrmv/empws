<?php namespace App\Model;

/**
 * Eloquent class to describe the sale_promotion table
 *
 * automatically generated by ModelGenerator.php
 */
class SalePromotion extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'sale_promotion';

    public $primaryKey = 'promotion_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('name', 'discount', 'promotion_type', 'promotion_mode');


}

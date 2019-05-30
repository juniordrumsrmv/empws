<?php namespace App\Model;

/**
 * Eloquent class to describe the customer_sku_type table
 *
 * automatically generated by ModelGenerator.php
 */
class CustomerSkuType extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'customer_sku_type';

    public $primaryKey = 'customer_sku_type_key';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('last_change_time');
    }

    protected $fillable = array('customer_sku_type_name', 'customer_sku_type_send', 'customer_sku_type_flag_1',
        'customer_sku_type_flag_2', 'customer_sku_type_flag_3', 'customer_sku_type_flag_4', 'customer_sku_type_flag_5',
        'customer_sku_type_flag_6', 'customer_sku_type_flag_7', 'customer_sku_type_flag_8', 'last_change_time');


}
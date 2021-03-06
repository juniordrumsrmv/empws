<?php namespace App\Model;

/**
 * Eloquent class to describe the customer_sku table
 *
 * automatically generated by ModelGenerator.php
 */
class CustomerSku extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'customer_sku';

    public $primaryKey = 'customer_sku_type_key';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('last_change_time');
    }

    protected $fillable = array('customer_key', 'customer_sku_status', 'customer_sku_limit', 'customer_sku_amount_left',
        'customer_sku_points', 'customer_sku_password', 'customer_sku_password_md5', 'last_change_time');


}

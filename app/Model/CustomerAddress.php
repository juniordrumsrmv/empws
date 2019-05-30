<?php namespace App\Model;

/**
 * Eloquent class to describe the customer_address table
 *
 * automatically generated by ModelGenerator.php
 */
class CustomerAddress extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'customer_address';

    public $primaryKey = 'custaddr_type';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('custaddr_address', 'custaddr_number', 'custaddr_comple', 'custaddr_neig',
        'custaddr_city', 'custaddr_state', 'custaddr_zip', 'custaddr_reference', 'custaddr_phone_area_code',
        'custaddr_phone_number', 'custaddr_addr_time', 'custaddr_country_code', 'custaddr_state_code', 'custaddr_city_code');


}

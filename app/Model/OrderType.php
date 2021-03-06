<?php namespace App\Model;

/**
 * Eloquent class to describe the order_type table
 *
 * automatically generated by ModelGenerator.php
 */
class OrderType extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'order_type';

    public $primaryKey = 'order_type';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('name');


}

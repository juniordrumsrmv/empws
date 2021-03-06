<?php namespace App\Model;

/**
 * Eloquent class to describe the network_type table
 *
 * automatically generated by ModelGenerator.php
 */
class NetworkType extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'network_type';

    public $primaryKey = 'network_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('network_name');


}

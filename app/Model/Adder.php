<?php namespace App\Model;

/**
 * Eloquent class to describe the adder table
 *
 * automatically generated by ModelGenerator.php
 */
class Adder extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'adder';

    public $primaryKey = 'adder_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('adder_name');


}
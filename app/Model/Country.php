<?php namespace App\Model;

/**
 * Eloquent class to describe the country table
 *
 * automatically generated by ModelGenerator.php
 */
class Country extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'country';

    public $primaryKey = 'country_code';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('country_name');


}

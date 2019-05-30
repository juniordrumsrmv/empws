<?php namespace App\Model;

/**
 * Eloquent class to describe the bacen_country table
 *
 * automatically generated by ModelGenerator.php
 */
class BacenCountry extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'bacen_country';

    public $primaryKey = 'country_id';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('country_name');


}

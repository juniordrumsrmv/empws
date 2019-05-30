<?php namespace App\Model;

/**
 * Eloquent class to describe the tank table
 *
 * automatically generated by ModelGenerator.php
 */
class Tank extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'tank';

    public $primaryKey = 'plu_key';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('tank_date_inc', 'tank_date_alt');
    }

    protected $fillable = array('tank_name', 'tank_date_inc', 'tank_date_alt', 'capacity');


}

<?php namespace App\Model;

/**
 * Eloquent class to describe the tank_stock table
 *
 * automatically generated by ModelGenerator.php
 */
class TankStock extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'tank_stock';

    public $primaryKey = 'stock_date';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('last_change_time');
    }

    protected $fillable = array('plu_key', 'quantity', 'tank_water', 'tank_temperature', 'tank_flag_input',
        'last_change_time', 'quantity_in_stock');


}

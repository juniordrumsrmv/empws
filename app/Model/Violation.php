<?php namespace App\Model;

/**
 * Eloquent class to describe the violation table
 *
 * automatically generated by ModelGenerator.php
 */
class Violation extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'violation';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('start_time');
    }

    protected $fillable = array('store_key', 'pos_number', 'table_name', 'column_name', 'old_data', 'new_data',
        'ecf_number', 'start_time', 'plu_key', 'id', 'ticket', 'user');


}

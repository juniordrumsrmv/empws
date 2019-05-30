<?php namespace App\Model;

/**
 * Eloquent class to describe the seal_group table
 *
 * automatically generated by ModelGenerator.php
 */
class SealGroup extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'seal_group';

    public $primaryKey = 'pos_number';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('fiscal_date', 'start_time');
    }

    protected $fillable = array('seal_group_id', 'fiscal_date', 'start_time');


}
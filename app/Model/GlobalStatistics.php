<?php namespace App\Model;

/**
 * Eloquent class to describe the global_statistics table
 *
 * automatically generated by ModelGenerator.php
 */
class GlobalStatistics extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'global_statistics';

    public $primaryKey = 'pos_number';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('s_value');


}

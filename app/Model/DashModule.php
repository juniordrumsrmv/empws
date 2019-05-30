<?php namespace App\Model;

/**
 * Eloquent class to describe the dash_module table
 *
 * automatically generated by ModelGenerator.php
 */
class DashModule extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'dash_module';

    public $primaryKey = 'position';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('name', 'label', 'status');


}

<?php namespace App\Model;

/**
 * Eloquent class to describe the dash_panel table
 *
 * automatically generated by ModelGenerator.php
 */
class DashPanel extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'dash_panel';

    public $primaryKey = 'module';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('name', 'config');


}

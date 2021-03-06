<?php namespace App\Model;

/**
 * Eloquent class to describe the dash_user_conf table
 *
 * automatically generated by ModelGenerator.php
 */
class DashUserConf extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'dash_user_conf';

    public $primaryKey = 'position';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('module', 'panel', 'config');


}

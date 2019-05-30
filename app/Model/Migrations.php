<?php namespace App\Model;

/**
 * Eloquent class to describe the migrations table
 *
 * automatically generated by ModelGenerator.php
 */
class Migrations extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'migrations';

    public $timestamps = false;

    protected $fillable = array('migration', 'batch');


}

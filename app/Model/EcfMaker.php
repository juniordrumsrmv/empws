<?php namespace App\Model;

/**
 * Eloquent class to describe the ecf_maker table
 *
 * automatically generated by ModelGenerator.php
 */
class EcfMaker extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'ecf_maker';

    public $primaryKey = 'ecf_manufacturer';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('code_ff');


}

<?php namespace App\Model;

/**
 * Eloquent class to describe the sngpc_prescriber table
 *
 * automatically generated by ModelGenerator.php
 */
class SngpcPrescriber extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'sngpc_prescriber';

    public $primaryKey = 'sngpc_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('prescriber_type', 'prescriber_code', 'prescriber_name', 'register_state');


}

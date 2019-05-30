<?php namespace App\Model;

/**
 * Eloquent class to describe the ecf table
 *
 * automatically generated by ModelGenerator.php
 */
class Ecf extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'ecf';

    public $primaryKey = 'ecf_number';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('ecf_date_inc', 'ecf_date_alt');
    }

    protected $fillable = array('ecf_name', 'ecf_serial', 'ecf_version', 'ecf_model', 'ecf_date_inc', 'ecf_date_alt',
        'ecf_status', 'ecf_emergency_status', 'ecf_manufacturer', 'ecf_mfd', 'ecf_aditional_mfd', 'ecf_type',
        'ecf_ticket_system', 'ecf_system', 'ecf_firmware_version', 'ecf_firmware_date', 'ecf_firmware_time', 'ecf_owner_number',
        'ecf_owner_id', 'ecf_owner_alt_id', 'ecf_owner_name', 'ecf_owner_address', 'ecf_owner_insertion_date',
        'ecf_owner_insertion_time');


}
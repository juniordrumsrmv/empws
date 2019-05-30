<?php namespace App\Model;

/**
 * Eloquent class to describe the sale_nfce table
 *
 * automatically generated by ModelGenerator.php
 */
class SaleNfce extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'sale_nfce';

    public $primaryKey = 'start_time';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('protocol_date', 'emit_date');
    }

    protected $fillable = array('nfce_key', 'nfce_status', 'sefaz_status', 'nfce_protocol', 'protocol_date',
        'emit_date', 'ticket_number', 'sefaz_link');


}
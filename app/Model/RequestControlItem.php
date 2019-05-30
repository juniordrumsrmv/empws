<?php namespace App\Model;

/**
 * Eloquent class to describe the request_control_item table
 *
 * automatically generated by ModelGenerator.php
 */
class RequestControlItem extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'request_control_item';

    public $primaryKey = 'sequence';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('fiscal_date', 'request_date');
    }

    protected $fillable = array('plu_id', 'quantity', 'unit_price', 'amount', 'fiscal_date', 'trn_number', 'event_type',
        'authorizer_key', 'request_date', 'request_store_key', 'request_pos_number', 'request_ticket_number',
        'request_trn_number', 'request_plu_id', 'request_quantity', 'request_unit_price', 'request_amount');


}

<?php namespace App\Model;

/**
 * Eloquent class to describe the eft_transaction table
 *
 * automatically generated by ModelGenerator.php
 */
class EftTransaction extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'eft_transaction';

    public $primaryKey = 'eft_trans_key';

    public $timestamps = false;

    public function getDates()
    {
        return array('eft_trans_start_time', 'eft_trans_finish_time');
    }

    protected $fillable = array('eft_trans_nsu', 'eft_trans_family', 'eft_trans_store', 'eft_trans_pos',
        'eft_trans_type', 'eft_trans_status', 'eft_trans_start_time', 'eft_trans_finish_time', 'eft_trans_server_nsu',
        'eft_trans_host_nsu', 'eft_trans_message', 'eft_trans_server_message', 'eft_trans_ack_message', 'eft_trans_document',
        'eft_trans_customer_id', 'eft_trans_customer_key', 'eft_trans_media_id', 'eft_trans_amount', 'eft_trans_cashier_key',
        'eft_trans_authorizer_key', 'eft_trans_extra_ticket');


}

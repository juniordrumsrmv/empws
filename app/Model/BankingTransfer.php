<?php namespace App\Model;

/**
 * Eloquent class to describe the banking_transfer table
 *
 * automatically generated by ModelGenerator.php
 */
class BankingTransfer extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'banking_transfer';

    public $primaryKey = 'transfer_key';

    public $timestamps = false;

    public function getDates()
    {
        return array('reference_date', 'creation_time');
    }

    protected $fillable = array('store_key', 'reference_date', 'from_location_key', 'to_location_key',
        'block_transfer_key', 'banking_unit_key', 'creation_time', 'user_key', 'authorizer_key', 'media_id', 'amount',
        'transaction_type_key', 'description', 'extended_media_id');


}

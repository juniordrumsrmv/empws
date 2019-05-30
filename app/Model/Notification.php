<?php namespace App\Model;

/**
 * Eloquent class to describe the notification table
 *
 * automatically generated by ModelGenerator.php
 */
class Notification extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'notification';

    public $primaryKey = 'notification_key';

    public $timestamps = false;

    public function getDates()
    {
        return array('notification_time');
    }

    protected $fillable = array('store_key', 'pos_number', 'notification_time', 'notification_type', 'transaction_type',
        'status', 'units', 'process_id', 'ticket_number', 'trn_number', 'cashier_key', 'authorizer_key', 'notification_data');


}

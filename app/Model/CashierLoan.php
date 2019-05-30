<?php namespace App\Model;

/**
 * Eloquent class to describe the cashier_loan table
 *
 * automatically generated by ModelGenerator.php
 */
class CashierLoan extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'cashier_loan';

    public $primaryKey = 'media_key';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('insert_time');
    }

    protected $fillable = array('insert_time', 'amount', 'store_key', 'pos_number', 'ticket_number');


}

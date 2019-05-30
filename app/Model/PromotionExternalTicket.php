<?php namespace App\Model;

/**
 * Eloquent class to describe the promotion_external_ticket table
 *
 * automatically generated by ModelGenerator.php
 */
class PromotionExternalTicket extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'promotion_external_ticket';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('start_time', 'received_time', 'effective_date');
    }

    protected $fillable = array('promotion_key', 'store_key', 'pos_number', 'ticket_number', 'start_time', 'amount',
        'customer_id', 'received_time', 'prize_coupon', 'points', 'count_ticket', 'token', 'effective_date', 'promo_data',
        'status');


}
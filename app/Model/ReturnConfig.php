<?php namespace App\Model;

/**
 * Eloquent class to describe the return_config table
 *
 * automatically generated by ModelGenerator.php
 */
class ReturnConfig extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'return_config';

    public $primaryKey = 'return_type';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('last_change_time');
    }

    protected $fillable = array('record_return_control', 'record_sale', 'issue_customer_print', 'show_amount_print',
        'last_change_time', 'return_status', 'return_barcode', 'return_layout', 'hide_code_print', 'valid_days',
        'show_item_print', 'enable_add_report_print', 'orig_store_only', 'header_text', 'footer_text');


}

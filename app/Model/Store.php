<?php namespace App\Model;

/**
 * Eloquent class to describe the store table
 *
 * automatically generated by ModelGenerator.php
 */
class Store extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'store';

    public $primaryKey = 'store_key';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('store_date_inc', 'store_date_alt', 'store_last_customer_export_time', 'store_last_customer_update_time', 'store_last_plu_export_time', 'store_last_plu_update_time', 'store_last_plu_autosend_check', 'store_last_customer_autosend_check', 'store_last_verifier_export_time', 'store_last_verifier_update_time', 'last_user_update_time', 'last_user_autosend_check', 'last_user_autosend_time');
    }

    protected $fillable = array('store_id1', 'store_id2', 'store_id3', 'store_name', 'store_address', 'store_neig',
        'store_city', 'store_state', 'store_zip', 'store_country_code', 'store_state_code', 'store_city_code', 'store_email',
        'store_phone1', 'store_phone2', 'store_date_inc', 'store_date_alt', 'store_nf_number', 'store_nf_serial',
        'store_map_number', 'store_map_type', 'store_time_zone', 'store_last_customer_export_time',
        'store_last_customer_update_time', 'store_last_customer_update', 'store_last_customer_export_update',
        'store_last_plu_export_time', 'store_last_plu_update_time', 'store_last_plu_update', 'store_last_plu_export_update',
        'store_razao', 'store_num', 'store_comple', 'store_contact', 'store_tax_type_key', 'store_last_plu_autosend_check',
        'store_plu_autosend_changed', 'store_last_customer_autosend_check', 'store_customer_autosend_changed',
        'store_invoice_seq', 'store_last_verifier_export_time', 'store_last_verifier_update_time', 'store_last_verifier_update',
        'store_last_verifier_export_update', 'accountant_key', 'tributary_system', 'last_user_update_time', 'last_user_update',
        'user_autosend', 'last_user_autosend_check', 'user_autosend_changed', 'last_user_autosend_time',
        'store_fiscal_country_code');


}

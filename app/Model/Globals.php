<?php namespace App\Model;

/**
 * Eloquent class to describe the globals table
 *
 * automatically generated by ModelGenerator.php
 */
class Globals extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'globals';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('database_update_time', 'last_plu_import_time', 'last_plu_export_time', 'last_customer_import_time', 'last_customer_export_time', 'last_plu_update_time', 'last_customer_update_time', 'last_plu_autosend_check', 'last_customer_autosend_check', 'last_user_import_time', 'last_user_export_time', 'last_user_update_time', 'last_user_autosend_check');
    }

    protected $fillable = array('database_version', 'database_update_time', 'database_version_db2db', 'emporium_prefix',
        'last_plu_import_time', 'last_plu_export_time', 'last_customer_import_time', 'last_customer_export_time',
        'last_plu_update', 'last_plu_export_update', 'last_customer_update', 'last_customer_export_update',
        'last_plu_update_time', 'last_customer_update_time', 'system_version', 'plu_by_store', 'max_send_sessions',
        'block_transmit_delay', 'block_transmit_bytes', 'backoffice', 'ignore_fiscal_date', 'plu_autosend', 'customer_autosend',
        'last_plu_autosend_check', 'plu_autosend_changed', 'last_customer_autosend_check', 'customer_autosend_changed',
        'last_verify_export_update', 'enable_transaction_mode', 'customer_by_store', 'last_user_import_time',
        'last_user_export_time', 'last_user_update', 'last_user_export_update', 'last_user_update_time', 'user_autosend',
        'last_user_autosend_check', 'user_autosend_changed');


}

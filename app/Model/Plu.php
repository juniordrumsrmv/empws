<?php namespace App\Model;

/**
 * Eloquent class to describe the plu table
 *
 * automatically generated by ModelGenerator.php
 */
class Plu extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'plu';

    public $primaryKey = 'plu_key';

    public $timestamps = false;

    public function getDates()
    {
        return array('last_change_time');
    }

    protected $fillable = array('id', 'base_plu_key', 'link_plu_key', 'plu_types', 'maker_key', 'short_description',
        'long_description', 'commercial_description', 'image_file', 'tax_type_key', 'cost_decimals', 'unit_key',
        'price_decimals', 'adder', 'department_key', 'suggested_prompt', 'data_entry_key', 'tare_key', 'last_change_time',
        'clerk_percent', 'conecto_flag_00', 'has_deposit', 'has_plu_link', 'price_required', 'quantity_disallowed',
        'quantity_required', 'decimal_disallowed', 'decimal_required', 'id_required', 'repeat_disallowed', 'scale',
        'tracking_total', 'deposit', 'non_merchandise', 'return_disallowed', 'refund_disallowed', 'markdown_disallowed',
        'rebate', 'not_for_sale', 'negative', 'clerk_required', 'kit', 'conecto_flag_22', 'conecto_flag_23', 'conecto_flag_24',
        'qty_from_amount', 'conecto_flag_26', 'conecto_flag_27', 'conecto_flag_28', 'conecto_flag_29', 'conecto_flag_30',
        'conecto_flag_31', 'valid_days', 'fiscal_class', 'pis_cofins', 'quantity', 'quantity_min', 'quantity_max', 'class',
        'merchandise_origin', 'merchandise_group', 'package', 'wholesale_quantity', 'conecto_flag_32', 'conecto_flag_33',
        'conecto_flag_34', 'conecto_flag_35', 'conecto_flag_36', 'conecto_flag_37', 'conecto_flag_38', 'conecto_flag_39',
        'conecto_flag_40', 'message_subtotal', 'standard_unit_key', 'quantity_standard', 'gross_weight', 'net_weight',
        'total_tax', 'sefaz_id', 'self_checkout_weight', 'anp_code', 'pis_tax_type_key', 'cofins_tax_type_key', 'total_tax1',
        'total_tax2', 'cest_code', 'therapeutic_class', 'ms_code', 'dcb_code', 'dcb_description', 'package_layout',
        'package_unit_type', 'pharma_list_type', 'fcp_percent', 'benef_code');


}

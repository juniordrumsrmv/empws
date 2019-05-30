<?php namespace App\Model;

/**
 * Eloquent class to describe the accum_item_base table
 *
 * automatically generated by ModelGenerator.php
 */
class AccumItemBase extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'accum_item_base';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('fiscal_date');
    }

    protected $fillable = array('store_key', 'pos_number', 'fiscal_date', 'plu_id', 'desc_plu', 'quantity',
        'quantity_canc', 'amount', 'amount_canc', 'cost', 'cost_canc', 'margin', 'return_quantity', 'return_amount',
        'department_key', 'maker_key', 'received_quantity', 'received_amount', 'pis_cofins', 'base_type');


}

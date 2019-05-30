<?php namespace App\Model;

/**
 * Eloquent class to describe the kit_list table
 *
 * automatically generated by ModelGenerator.php
 */
class KitList extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'kit_list';

    public $primaryKey = 'plu_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('quantity', 'price_key');


}

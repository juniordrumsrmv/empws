<?php namespace App\Model;

/**
 * Eloquent class to describe the plu_screen table
 *
 * automatically generated by ModelGenerator.php
 */
class PluScreen extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'plu_screen';

    public $primaryKey = 'store_group_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('screen_description', 'screen_position', 'status');


}
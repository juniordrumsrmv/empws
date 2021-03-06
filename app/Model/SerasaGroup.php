<?php namespace App\Model;

/**
 * Eloquent class to describe the serasa_group table
 *
 * automatically generated by ModelGenerator.php
 */
class SerasaGroup extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'serasa_group';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('serasa_type_key', 'group_key');


}

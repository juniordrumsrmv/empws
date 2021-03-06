<?php namespace App\Model;

/**
 * Eloquent class to describe the group_type table
 *
 * automatically generated by ModelGenerator.php
 */
class GroupType extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'group_type';

    public $primaryKey = 'group_type_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('group_type_name');


}

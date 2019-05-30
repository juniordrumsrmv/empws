<?php namespace App\Model;

/**
 * Eloquent class to describe the wsnfp_user table
 *
 * automatically generated by ModelGenerator.php
 */
class WsnfpUser extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'wsnfp_user';

    public $primaryKey = 'cnpj';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('user_id', 'user_password', 'user_type');


}

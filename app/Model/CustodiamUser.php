<?php namespace App\Model;

/**
 * Eloquent class to describe the custodiam_user table
 *
 * automatically generated by ModelGenerator.php
 */
class CustodiamUser extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'custodiam_user';

    public $primaryKey = 'custodiam_partner';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('custodiam_user_password', 'custodiam_flag');


}

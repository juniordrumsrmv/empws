<?php namespace App\Model;

/**
 * Eloquent class to describe the treasury_media table
 *
 * automatically generated by ModelGenerator.php
 */
class TreasuryMedia extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'treasury_media';

    public $primaryKey = 'extended_media_id';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('media_id', 'amount');


}

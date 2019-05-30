<?php namespace App\Model;

/**
 * Eloquent class to describe the plan_media table
 *
 * automatically generated by ModelGenerator.php
 */
class PlanMedia extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'plan_media';

    public $primaryKey = 'media_sub_id';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('last_change_time');
    }

    protected $fillable = array('last_change_time');


}

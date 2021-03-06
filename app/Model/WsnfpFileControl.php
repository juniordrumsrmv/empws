<?php namespace App\Model;

/**
 * Eloquent class to describe the wsnfp_file_control table
 *
 * automatically generated by ModelGenerator.php
 */
class WsnfpFileControl extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'wsnfp_file_control';

    public $primaryKey = 'md5';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('export_time');
    }

    protected $fillable = array('file_name', 'export_time', 'wsnfp_key', 'trans_key');


}

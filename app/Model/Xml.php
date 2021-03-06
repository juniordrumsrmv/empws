<?php namespace App\Model;

/**
 * Eloquent class to describe the xml table
 *
 * automatically generated by ModelGenerator.php
 */
class Xml extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'xml';

    public $primaryKey = 'session_key';

    public $timestamps = false;

    public function getDates()
    {
        return array('received_time');
    }

    protected $fillable = array('received_time', 'file_path', 'store_key', 'pos_number', 'xml_data');


}

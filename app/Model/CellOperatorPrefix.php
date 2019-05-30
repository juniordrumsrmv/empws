<?php namespace App\Model;

/**
 * Eloquent class to describe the cell_operator_prefix table
 *
 * automatically generated by ModelGenerator.php
 */
class CellOperatorPrefix extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'cell_operator_prefix';

    public $primaryKey = '';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('operator_key', 'operator_ddd', 'operator_prefix');


}
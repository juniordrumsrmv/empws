<?php

namespace App\Model\Model;

/**
 * Eloquent class to describe the menu_item table
 *
 * automatically generated by ModelGenerator.php
 */
class MenuItem extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'menu_item';

    public $primaryKey = 'menu_item_id';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('menu_item_parent_id', 'menu_item_level', 'menu_item_lang', 'menu_item_module',
        'menu_item_group', 'menu_item_seq', 'menu_item_authorization_id', 'menu_item_href', 'menu_item_title', 'menu_item_text',
        'menu_item_img_path', 'menu_item_target', 'menu_item_dir', 'menu_item_type', 'menu_item_status');


}
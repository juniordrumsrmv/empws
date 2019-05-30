<?php namespace App\Model;

/**
 * Eloquent class to describe the customer table
 *
 * automatically generated by ModelGenerator.php
 */
class Customer extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'customer';

    public $primaryKey = 'customer_key';

    public $timestamps = false;

    public function getDates()
    {
        return array('customer_date_inc', 'customer_date_alt', 'customer_last_change_time', 'customer_job_date', 'customer_job_old_in', 'customer_job_old_out', 'customer_birthday', 'customer_spouse_birthday', 'customer_dep_birthday1', 'customer_dep_birthday2', 'customer_dep_birthday3');
    }

    protected $fillable = array('customer_id_type', 'customer_id', 'customer_id_alt', 'customer_name', 'customer_name2',
        'customer_address', 'customer_comple', 'customer_neig', 'customer_city', 'customer_state', 'customer_zip',
        'customer_email', 'customer_phone1', 'customer_phone1_rec', 'customer_phone2', 'customer_date_inc', 'customer_date_alt',
        'customer_type', 'customer_code', 'customer_last_change_time', 'customer_ie', 'customer_adr_type', 'customer_adr_time',
        'customer_country_code', 'customer_state_code', 'customer_city_code', 'customer_job_id', 'customer_job_name',
        'customer_job_address', 'customer_job_comple', 'customer_job_neig', 'customer_job_city', 'customer_job_state',
        'customer_job_zip', 'customer_job_phone', 'customer_job_title', 'customer_job_revenue', 'customer_job_date',
        'customer_job_type', 'customer_job_old_name', 'customer_job_old_phone', 'customer_job_old_in', 'customer_job_old_out',
        'customer_ref_bank1', 'customer_ref_branch1', 'customer_ref_account1', 'customer_ref_bank2', 'customer_ref_branch2',
        'customer_ref_account2', 'customer_ref_name1', 'customer_ref_phone1', 'customer_ref_comple1', 'customer_ref_name2',
        'customer_ref_phone2', 'customer_ref_comple2', 'customer_ref_card1', 'customer_ref_card2', 'customer_ref_card3',
        'customer_ref_card4', 'customer_ref_card5', 'customer_birthday', 'customer_gender', 'customer_nacionality',
        'customer_education_level', 'customer_civil_status', 'customer_mothers_name', 'customer_fathers_name',
        'customer_spouse_id', 'customer_spouse_name', 'customer_spouse_birthday', 'customer_spouse_job_name',
        'customer_spouse_job_time', 'customer_spouse_job_phone', 'customer_spouse_job_title', 'customer_spouse_job_revenue',
        'customer_dependents', 'customer_dep_name1', 'customer_dep_birthday1', 'customer_dep_gender1', 'customer_dep_name2',
        'customer_dep_birthday2', 'customer_dep_gender2', 'customer_dep_name3', 'customer_dep_birthday3',
        'customer_dep_gender3', 'customer_vehicles', 'customer_properties', 'customer_password', 'customer_password_md5',
        'store_key', 'biometrics', 'customer_delayed');


}

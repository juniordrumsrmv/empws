<?php namespace App\Model;

/**
 * Eloquent class to describe the event_message table
 *
 * automatically generated by ModelGenerator.php
 */
class EventMessage extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'event_message';

    public $primaryKey = 'evmsg_key';

    public $timestamps = false;

    public function getDates()
    {
        return array('start_time');
    }

    protected $fillable = array('agent_key', 'evctl_id', 'evmsg_from', 'evmsg_to', 'evmsg_subject', 'evmsg_msg',
        'evmsg_attachment_name', 'evmsg_attachment_text', 'evmsg_send', 'evmsg_popup', 'evmsg_sms', 'evmsg_sent',
        'evmsg_popedup', 'evmsg_sent_sms', 'start_time');


}

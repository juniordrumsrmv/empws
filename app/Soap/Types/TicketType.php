<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 29/05/19
 * Time: 14:45
 */

namespace App\Soap\Types;


class TicketType
{
    /**
     * @var string
     * @required
     */
    public $company;

    /**
     * @var string
     * @required
     */
    public $store;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $cashier;

    /**
     * @var string
     */
    public $ticket;

    /**
     * @var string
     */
    public $type;
}
<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 29/05/19
 * Time: 14:43
 */

namespace App\Http\Controllers\Downloads;

use App\Model\Sale;
use Illuminate\Support\Facades\DB;

/**
 * @group Tickets
 *
 * Serviços para informações de vendas
 */
class TicketsController
{
    /**
     * Busca de todos cupons por loja e data
     *
     * @param \App\Soap\Types\TicketType $params
     * @return string
     */
    public function getTicketStoreDate($params){

        //1 - Aqui faremos o recebimento dos parametros necessarios nessa consulta
        $data = [
            'company' => $params->company,
            'store' => $params->store,
            'date' => $params->date,
            'type' => $params->type
        ];

        //2 - Aqui faremos a validacao dos parametros de entrada
        //.....


        //3 - Aqui faremos a consulta dos dados
//        $sale = Sale::where('store_key', $data['store']);
//        $sale->where('pos_number', '>', 0);
//        $sale->where('ticket_number', '>', 0);
//        $sale->where('fiscal_date', "'".$data['date']."'");
//        $tickets = ( array ) $sale->get()->toArray();

        return responseWS($data, 200, []);
    }

    /**
     * Busca de todos cupons por loja e data
     */
    public function getTicket(){

        $data = [
            'store' => 900,
            'date' => '2019-05-16'
        ];

        $sale = Sale::where('store_key', $data['store']);
        $sale->where('pos_number', '>', 0);
        $sale->where('ticket_number', '>', 0);
        $sale->where('fiscal_date', "'".$data['date']."'");
        $tickets = ( array ) $sale->get()->toArray();

        DB::listen(function ($tickets) {
            dd($tickets->sql);
            // $query->bindings
            // $query->time
        });
//        dd(DB::getQueryLog());
//        return (array) $tickets;
    }

}
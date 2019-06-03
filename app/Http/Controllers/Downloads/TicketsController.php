<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 29/05/19
 * Time: 14:43
 */

namespace App\Http\Controllers\Downloads;

use App\Model\Sale;

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
     * @return object
     */
    public function consultarTotalLoja($params){

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
        $sale = Sale::where('store_key', $data['store']);
        $sale->where('pos_number', '>', 0);
        $sale->where('ticket_number', '>', 0);
        $sale->where('fiscal_date', $data['date']);
        $sales = ( array ) $sale->get()->toArray();

        //4 - Montando array do resultado
        if ( count($sales) > 0 ) {


            //Defindo replicas da funcao
            $responseObs = new \stdClass();
            $responseObs->outConsultarTotalLoja;
            $responseObs->outConsultarTotalLoja->empresa = $data['company'];
            $responseObs->outConsultarTotalLoja->dataMovimento = $data['date'];
            $responseObs->outConsultarTotalLoja->loja = $data['store'];
            $responseArr['outConsultarTotalLoja'] = [
                'empresa' => $data['company'],
                'dataMovimento' => $data['date'],
                'loja' => $data['store']
            ];

            //Dados de cupom
            $xx = 0;
            foreach ( $sales as $root => $values ) {
                $valores = new \stdClass();
                $valores->moeda = 'BRL';
                $valores->valor = $values['amount_due'];
                $valores->codigoOperacao = $values['sale_type'];
                $responseObs->outConsultarTotalLoja->valores[] = $valores;

                $responseArr['outConsultarTotalLoja']['valores'][] = [
                    'moeda' => 'BRL',
                    'valor' => $values['amount_due'],
                    'codigoOperacao' => $values['sale_type']
                ];
                $xx++;
            }

        }

//        $aa = [
//            'return' => [
//                'return1' => [
//                    'return2' => 'RONALDP'
//                ]
//            ]
//        ];
//        return $aa;
//        return $responseObs;
        return json_decode(json_encode($responseArr));
        return responseWS($responseArr, 200, []);
    }

}
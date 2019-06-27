<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 29/05/19
 * Time: 14:43
 */

namespace App\Http\Controllers\Downloads;

use App\Model\AccumMedia;
use App\Model\AccumOper;
use App\Model\Sale;
use App\Model\User;
use App\Webservice\Validations\ConsultTotalsValidation;
use ArrayObject;
use SoapVar;
use DB;

/**
 * @group Tickets
 *
 * Serviços para informações de vendas
 */
class ConsultTotalsController
{

    /**
     * Consulta de totais por loja e data
     *
     * @param \App\Webservice\Types\ConsultTotalsType $params
     * @return object
     */
    public function consultarTotalLoja($params){
        LogMsg('----------- consultarTotalLoja -----------');

        //1 - Aqui faremos o recebimento dos parametros necessarios nessa consulta
        foreach ( $params as $key => $value ) {
            $data[$key] = $value;
        }

        //2 - Aqui faremos a validacao dos parametros de entrada
        $validate = new ConsultTotalsValidation($data, 'consultarTotalLoja');
        if ( $validate->status == 2 ) return responseWS( (array) $validate, 400);

        //3 - Aqui faremos a consulta dos dados
        $sql = AccumMedia::where('store_key', $data['store']);
        $sql->where('pos_number', '>', 0);
        $sql->where('fiscal_date', $data['date']);

        //3.1 - Campos opcionais
        if ( is_numeric($data['operation']) ) {
            $sql->where('media_id', $data['operation']);
        }

        //3.2 - Ordenando a selecao
        $sql->orderBy('media_id');

        //3.4 - Executar SQL
        $rows = ( array ) $sql->get()->toArray();

        //4 - Montando array do resultado
        if ( count($rows) > 0 ) {

            //Defindo replicas da funcao
            $responseObs = new \stdClass();
            $responseObs->empresa = $data['company'];
            $responseObs->dataMovimento = $data['date'];
            $responseObs->loja = $data['store'];

            //Dados de cupom
            $responseVal = new ArrayObject();
            foreach ( $rows as $root => $values ) {
                $valores = new \stdClass();
                $valores->moeda = 'BRL';
                $valores->valor = $values['amount'];
                $valores->codigoOperacao = $values['media_id'];
                $valores = new SoapVar($valores,SOAP_ENC_OBJECT,NULL, NULL, 'valores');
                $responseVal->append($valores);
            }

        }
        else {
            //Nenhum dado encontrado
            $res = responseStatus('E', 2);
            return responseWS( (array) $res, 400);
        }

        //5 - Unindo objetos
        $merged = (object) array_merge((array) $responseObs, (array) $responseVal);

        //6 - Convertendo para disponibilizacao
        $soapResponse = new SoapVar($merged,SOAP_ENC_OBJECT,NULL, NULL, 'outConsultarTotalLoja');

        return responseWS($soapResponse, 200);
    }


    /**
     * Consulta de totais por loja, data e operador
     *
     * @param \App\Webservice\Types\ConsultTotalsType $params
     * @return object
     */
    public function consultarTotalLojaOperador($params){
        LogMsg('----------- consultarTotalLojaOperador -----------');

        //1 - Aqui faremos o recebimento dos parametros necessarios nessa consulta
        foreach ( $params as $key => $value ) {
            $data[$key] = $value;
        }

        //2 - Aqui faremos a validacao dos parametros de entrada
        $validate = new ConsultTotalsValidation($data, 'consultarTotalLojaOperador');
        if ( $validate->status == 2 ) return responseWS( (array) $validate, 400);

        //3 - Aqui faremos a consulta dos dados
        $sql = AccumOper::where('store_key', $data['store']);
        $sql->where('pos_number', '>', 0);
        $sql->where('fiscal_date', $data['date']);
        $sql->where('alternate_id', $data['cashier']);

        //3.1 - Campos opcionais
        if ( is_numeric($data['operation']) ) {
            $sql->where('media_id', $data['operation']);
        }

        //3.2 - Ordenando a selecao
        $sql->orderBy('media_id');

        //3.4 - Executar SQL
        $rows = ( array ) $sql->get()->toArray();

        //4 - Montando array do resultado
        if ( count($rows) > 0 ) {

            //Defindo replicas da funcao
            $responseObs = new \stdClass();
            $responseObs->empresa = $data['company'];
            $responseObs->dataMovimento = $data['date'];
            $responseObs->loja = $data['store'];
            $responseObs->operador = $data['cashier'];

            //Dados de cupom
            $responseVal = new ArrayObject();
            foreach ( $rows as $root => $values ) {
                $valores = new \stdClass();
                $valores->moeda = 'BRL';
                $valores->valor = $values['amount'];
                $valores->codigoOperacao = $values['media_id'];
                $valores = new SoapVar($valores,SOAP_ENC_OBJECT,NULL, NULL, 'valores');
                $responseVal->append($valores);
            }

        }
        else {
            //Nenhum dado encontrado
            $res = responseStatus('E', 2);
            return responseWS( (array) $res, 400);
        }

        //5 - Unindo objetos
        $merged = (object) array_merge((array) $responseObs, (array) $responseVal);

        //6 - Convertendo para disponibilizacao
        $soapResponse = new SoapVar($merged,SOAP_ENC_OBJECT,NULL, NULL, 'outConsultarTotalLoja');

        return responseWS($soapResponse, 200);
    }


    /**
     * Consulta de totais por loja, data, operador e ticket
     *
     * @param \App\Webservice\Types\ConsultTotalsType $params
     * @return object
     */
    public function consultarTotalLojaTicket($params){
        LogMsg('----------- consultarTotalLojaTicket -----------');

        //1 - Aqui faremos o recebimento dos parametros necessarios nessa consulta
        foreach ( $params as $key => $value ) {
            $data[$key] = $value;
        }

        //2 - Aqui faremos a validacao dos parametros de entrada
        $validate = new ConsultTotalsValidation($data, 'consultarTotalLojaOperador');
        if ( $validate->status == 2 ) return responseWS( (array) $validate, 400);

        //2.1 - Aqui verificamos se o operador está cadastrado, se sim, pegamos seu key
        $sql = User::where('alternate_id', $data['cashier']);
        $cashier = $sql->first();
        if ( !$cashier['agent_key'] ) {
            //Operador informado não existe
            $res = responseStatus('N', 2, $data['cashier']);
            return responseWS( (array) $res, 400);
        }

        //3 - Aqui faremos a consulta dos dados
        $sql = Sale::where('sale.store_key', $data['store']);
        $sql->where('sale.pos_number', '>', 0);

        $sql->where('sale.fiscal_date', $data['date']);
        $sql->where('sale.cashier_key', $cashier['agent_key']);

        //3.1 - Campos opcionais
        if ( $data['ticket'] > 0 ) {
            $sql->where('sale.ticket_number', $data['ticket']);
        }
        else $sql->where('sale.ticket_number', '>', 0);

        //3.2 - Filtros de exclusão
        $sql->where('sale.voided', 0);
        $sql->where('sale.post_sale_void', 0);
        $sql->whereNull('sale.void_ticket_number');

        //3.3 - Join com sale_media
        $sql->join('sale_media', function ($join) use($data) {
            $join->on('sale_media.store_key', '=', 'sale.store_key')
                ->on('sale_media.pos_number', '=', 'sale.pos_number')
                ->on('sale_media.ticket_number', '=', 'sale.ticket_number')
                ->on('sale_media.start_time', '=', 'sale.start_time');

            if ( is_numeric($data['operation']) ) {
                $join->where('sale_media.media_id', '=', $data['operation']);
            }
        });

        //3.4 - Nomeando os campos retornados
        $sql->select(DB::raw('
                sale_media.media_id as media_id, 
                sum(sale_media.amount) as amount,
                sale.ticket_number as ticket_number
            '));

        //3.5 - Agrupando
        $sql->groupBy(
            'sale.store_key',
            'sale.pos_number',
            'sale.ticket_number',
            'sale.start_time',
            'sale_media.media_id'
        );

        //3.6 - Ordenando a selecao
        $sql->orderBy('sale.ticket_number');

        //3.7 - Executar SQL
        $rows = ( array ) $sql->get()->toArray();
//        $rows = $sql->toSql();

        //4 - Montando array do resultado
        if ( count($rows) > 0 ) {

            //Defindo replicas da funcao
            $responseObs = new \stdClass();
            $responseObs->empresa = $data['company'];
            $responseObs->dataMovimento = $data['date'];
            $responseObs->loja = $data['store'];
            $responseObs->operador = $data['cashier'];

            //Dados de cupom
            $responseVal = new ArrayObject();
            foreach ( $rows as $root => $values ) {
                $valores = new \stdClass();
                $valores->ticket = $values['ticket_number'];
                $valores->moeda = 'BRL';
                $valores->valor = $values['amount'];
                $valores->codigoOperacao = $values['media_id'];
                $valores = new SoapVar($valores,SOAP_ENC_OBJECT,NULL, NULL, 'valores');
                $responseVal->append($valores);
            }

        }
        else {
            //Nenhum dado encontrado
            $res = responseStatus('E', 2);
            return responseWS( (array) $res, 400);
        }

        //5 - Unindo objetos
        $merged = (object) array_merge((array) $responseObs, (array) $responseVal);

        //6 - Convertendo para disponibilizacao
        $soapResponse = new SoapVar($merged,SOAP_ENC_OBJECT,NULL, NULL, 'outConsultarTotalLoja');

        return responseWS($soapResponse, 200);
    }
}
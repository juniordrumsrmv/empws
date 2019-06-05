<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 29/05/19
 * Time: 14:43
 */

namespace App\Http\Controllers\Downloads;

use App\Model\AccumOper;
use App\Soap\Validations\ConsultTotalsValidation;
use ArrayObject;
use SoapVar;

/**
 * @group Tickets
 *
 * Serviços para informações de vendas
 */
class ConsultTotalsController
{

    /**
     * Busca de totais por loja/data/operacao(media)
     *
     * @param \App\Soap\Types\ConsultTotalsType $params
     * @return object
     */
    public function consultarTotalLoja($params){

        //1 - Aqui faremos o recebimento dos parametros necessarios nessa consulta
        foreach ( $params as $key => $value ) {
            $data[$key] = $value;
        }

        //2 - Aqui faremos a validacao dos parametros de entrada
        $validate = new ConsultTotalsValidation($data, 'consultarTotalLoja');
        if ( $validate->status == 2 ) return new \SoapFault("$validate->code","$validate->msg", null, $validate->detail, 'FaultSpecified');

        //3 - Aqui faremos a consulta dos dados
        $sale = AccumOper::where('store_key', $data['store']);
        $sale->where('pos_number', '>', 0);
        $sale->where('fiscal_date', $data['date']);
        $sales = ( array ) $sale->get()->toArray();

        //4 - Montando array do resultado
        if ( count($sales) > 0 ) {

            //Defindo replicas da funcao
            $responseObs = new \stdClass();
            $responseObs->empresa = $data['company'];
            $responseObs->dataMovimento = $data['date'];
            $responseObs->loja = $data['store'];

            //Dados de cupom
            $responseVal = new ArrayObject();
            foreach ( $sales as $root => $values ) {
                $valores = new \stdClass();
                $valores->moeda = 'BRL';
                $valores->valor = $values['amount'];
                $valores->codigoOperacao = $values['media_id'];
                $valores = new SoapVar($valores,SOAP_ENC_OBJECT,NULL, NULL, 'valores');
                $responseVal->append($valores);
            }

        }

        //Unindo objetos
        $merged = (object) array_merge((array) $responseObs, (array) $responseVal);

        //Convertendo para disponibilizacao
        $soapResponse = new SoapVar($merged,SOAP_ENC_OBJECT,NULL, NULL, 'outConsultarTotalLoja');

        return $soapResponse;

    }

}
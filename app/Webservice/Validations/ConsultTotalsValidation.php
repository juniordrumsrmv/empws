<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 04/06/19
 * Time: 15:24
 */

namespace App\Webservice\Validations;

use App\Webservice\Responses\Response;

class ConsultTotalsValidation
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var object $response
    */
    public $response;

    public function __construct($params, $function)
    {
        $validate = $this->validate($params, $function);
        $this->status = $validate->status;
        $this->code = $validate->code;
        $this->message = $validate->message;
        $this->detail = $validate->detail;
    }

    public function validate( $params, $function )
    {
        $response = new Response();
        $status = new \stdClass();

        // 1 - Parametros
        if ( !is_array($params) || !count($params) ) {
            $status = responseStatus('P', 1);
        }
        else {
            //Parametros padrão

            //Validar loja
            if ( !empty($params['store']) ){
                if ( !is_numeric($params['store']) ) {
                    $error = 1;
                    $status = responseStatus('P', 3, 'store');
                }
            }
            else {
                $status = responseStatus('P', 2, 'store');
            }

            //Validar data
            if ( !empty($params['date']) ){
                if ( !validateDate($params['date']) ) {
                    $status = responseStatus('P', 4, 'date');
                }
            }
            else {
                $status = responseStatus('P', 2, 'date');
            }

            //Parametros por funcao
            switch ($function) {
                case 'consultarTotalLoja':
                    break;
                case 'consultarTotalLojaOperador':

                    //Validar operador
                    if ( !empty($params['cashier']) ){
                        if ( !is_numeric($params['cashier']) ) {
                            $status = responseStatus('P', 3, 'cashier');
                        }
                    }
                    else {
                        $status = responseStatus('P', 2, 'cashier');
                    }

                    break;
            }

        }

        //  Em caso de erro
        if ( $status->status == 2 ) {
            $response = $status;
        }

        return  $response;
    }
}
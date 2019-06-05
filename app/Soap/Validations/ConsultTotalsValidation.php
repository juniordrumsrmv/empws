<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 04/06/19
 * Time: 15:24
 */

namespace App\Soap\Validations;

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
        $this->msg = $validate->message;
        $this->detail = $validate->detail;

    }

    public function validate( $params, $function )
    {
        $response = new \stdClass();

        // 1 - Parametros
        if ( !is_array($params) || !count($params) ) {
            $res = responseStatus('P', 1);
            $response->status = $res->status;
        }
        else {
            $error = 0;
            switch ($function) {
                case 'consultarTotalLoja':
                    //Validar loja
                    if ( !empty($params['store']) ){
                        \Log::info("STORE :".$params['store']);
                        if ( !is_numeric($params['store']) ) {
                            \Log::info("STORE :".$params['store']);
                            $error = 1;
                            $res = responseStatus('P', 3);
                        }
                    }
                    else {
                        $error = 1;
                        $res = responseStatus('P', 2);
                    }
                    break;
            }

        }

        if ( $response->status == 2 ) {
            $response->code = $res->code;
            $response->message = $res->message->message;
            $response->detail = $res->message->detail;
        }

        return  $response;
    }
}
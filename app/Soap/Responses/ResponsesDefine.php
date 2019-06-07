<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 04/06/19
 * Time: 16:26
 */

namespace App\Soap\Responses;


class ResponsesDefine
{


    /**
     * @var object
    */
    public $response;

    /**
     * @var string
     * Prefixo de error técnicos
     */
    const E_TYPE = 'E';

    /**
     * @var string
     * Prefixo de parametros invalidos
     */
    const P_TYPE = 'P';

    /**
     * @var string
     * Prefixo de sucesso
     */
    const S_TYPE = 'S';

    /**
     * @var string
     * Prefixo de falha de negocio
     */
    const N_TYPE = 'N';

    /**
     * @var string
     * Status code de sucesso
     */
    const S_STATUS = 1;

    /**
     * @var string
     * Status code de erro
     */
    const E_STATUS = 2;


    public function make($type, $code = 0, $data = NULL)
    {
        $response = new \stdClass();
        $response->status = self::E_STATUS;
        $response->code = $this->getCode($type, $code);
        $response->message = $this->getMessage($type, $code, $data);

        return $response;
    }

    private function getCode($type = '', $code = 0 )
    {
        return $type.str_pad($code, 6, "0", STR_PAD_LEFT);
    }

    public function getMessage($type, $code = 0, $data = NULL)
    {
        $msg = new \stdClass();
        switch ( $type ) {
            case self::E_TYPE:
                switch ($code) {
                    case 0:
                        $msg->message = "Erro indefinido";
                        $msg->detail = "Erro indefinido";
                        break;
                    case 1:
                        $msg->message = "Falha técnica";
                        $msg->detail = "Falha técnica";
                        break;
                }
                break;
            case self::P_TYPE:
                switch ($code) {
                    case 1:
                        $msg->message = "Parâmetros inválidos";
                        $msg->detail = "Nenhum parâmetro encontrado na requisição";
                        break;
                    case 2:
                        $msg->message = "O campo $data é de preechimento obrigatório";
                        $msg->detail = "Campo obrigatório não informado na requisição";
                        break;
                    case 3:
                        $msg->message = "O campo $data deve ser númerico";
                        $msg->detail = "Campo informado deve ser conter apenas números";
                        break;
                    case 4:
                        $msg->message = "Campo $data com formato inválido";
                        $msg->detail = "Campo deve conter o formato correto";
                        break;
                }
                break;
            case self::S_TYPE:
                switch ($code) {
                    case 0:
                        $msg = "Consulta realizada com sucesso";
                        break;
                    case 1:
                        $msg = "Inclusão realizada com sucesso";
                        break;
                }
                break;
            case self::N_TYPE:
                switch ($code) {
                    case 0:
                        $msg = "Parametros não configurados";
                        break;
                    case 1:
                        $msg = "O valor do campo $data não é válido";
                        break;
                }
                break;
        }
        return $msg;
    }
}
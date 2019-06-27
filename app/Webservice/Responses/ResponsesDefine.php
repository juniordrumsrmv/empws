<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 04/06/19
 * Time: 16:26
 */

namespace App\Webservice\Responses;


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
        $msg = $this->getMessage($type, $code, $data);
        $response->message = $msg->message;
        $response->detail = $msg->detail;

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
                    case 2:
                        $msg->message = "Não há dados para consulta";
                        $msg->detail = "Não há dados para consulta com parâmetros informados";
                        break;

                    case 99: //Mensagem customizada
                        $msg->message = $data;
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

                    case 99: //Mensagem customizada
                        $msg->message = $data;
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
                    case 2:
                        $msg = "Alteração realizada com sucesso";
                        break;
                    case 3:
                        $msg = "Exclusão realizada com sucesso";
                        break;

                    case 99: //Mensagem customizada
                        $msg->message = $data;
                        break;
                }
                break;
            case self::N_TYPE:
                switch ($code) {
                    case 0:
                        $msg->message = "Parametros não configurados";
                        $msg->detail = "Parametros não configurados";
                        break;
                    case 1:
                        $msg->message = "O valor do campo $data não é válido";
                        $msg->detail = "Campo informado não condiz com formato esperado";
                        break;
                    case 2:
                        $msg->message = "O operador informado não está cadastrado [$data]";
                        $msg->detail = "O operador informado não está cadastrado na base";
                        break;

                    case 99: //Mensagem customizada
                        $msg->message = $data;
                        break;
                }
                break;
        }
        return $msg;
    }
}
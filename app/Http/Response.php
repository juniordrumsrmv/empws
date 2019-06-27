<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 29/05/19
 * Time: 14:51
 */

namespace App\Http;


use Illuminate\Contracts\Support\Arrayable;
use Laravel\Lumen\Http\ResponseFactory;
use Zend\Config\Config;
use Zend\Config\Writer\Xml;

class Response extends ResponseFactory
{
    /**
     * Funcao para criacao de retorno
    */
    public function make($content = '', $status = 200, array $headers = [])
    {
        /** @var Request $request */
        $request = app('request');

        $acceptHeader = $request->header('accept');
        $result = "";
        switch ($acceptHeader) {
            case 'application/json':
                $result = json_encode($content, JSON_UNESCAPED_UNICODE);
                break;
            default:
                if ( env('RESPONSE_TYPE') == 'soap')
                    $result = $this->getSOAP($content);
                else
                    $result = $this->getXML((array) $content);
                break;
        }

        return $result;
    }


    /**
     * Funcao para criacao de xml zend-config
     */
    protected function getXML($data)
    {
        if ( $data instanceof Arrayable ) {
            $data = $data->toArray();
        }
        $config = new Config($data, false);
        $xmlWriter = new Xml();

        return $xmlWriter->toString($config);
    }

    /**
     * Funcao para tratamento de retorno SOAP
     */
    protected function getSOAP($data)
    {
        //Validando erro
        if ( is_array($data) ) {
            if ($data['status'] == 2) { //Erro
                return new \SoapFault($data['code'], $data['message'], null, $data['detail'], 'FaultSpecified');
            }
        }

        return $data;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 29/05/19
 * Time: 14:46
 */

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Downloads\ConsultTotalsController;

class SoapServerController
{
    public function generateUri() {
        $uri = 'http://localhost:98';
        return $uri;
    }

    public function autoDiscover() {
        $autoDiscover = new \Zend\Soap\AutoDiscover();
        $autoDiscover->setUri($this->generateUri()."/server");
        $autoDiscover->setServiceName('EMPSOAP');
        $autoDiscover->setClass(ConsultTotalsController::class);
        $autoDiscover->setOperationBodyStyle(['use' => 'literal']);
        $autoDiscover->handle();
    }

    public function Server() {
        LogMsg('----------- begin', 9);

        $server = new \Zend\Soap\Server();
        $server->setWSDL($this->generateUri()."/emp-soap.wsdl");
        $server->setOptions(
            [
                'cache_wsdl'     => WSDL_CACHE_NONE,
                'soap_version'   => SOAP_1_2,
                'trace'          => false,
                'exceptions'     => true,
            ]
        );
        $server->setUri($this->generateUri()."/server");
        $call = $server
            ->setClass(ConsultTotalsController::class)
            ->handle();

        //Sempre Logar a ultima requisicao
        $lastRequest = $server->getLastRequest();
        /** @var Illuminate\Support\Facades\Log Log*/
        LogMsg("REQUISIÇÃO: [$lastRequest]");

        //Sempre Logar a ultima resposta
        $lastResponse = $server->getResponse();
        /** @var Illuminate\Support\Facades\Log Log*/
        LogMsg("RESPOSTA: [$lastResponse]");

        LogMsg('----------- end', 9);
    }
}
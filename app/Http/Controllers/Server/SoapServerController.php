<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 29/05/19
 * Time: 14:46
 */

namespace App\Http\Controllers\Server;


use App\Http\Controllers\Downloads\TicketsController;

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
        $autoDiscover->setClass(TicketsController::class);
        $autoDiscover->handle();
    }

    public function mountServer() {
        $server = new \Zend\Soap\Server($this->generateUri()."/emp-soap.wsdl", [
            'cache_wsdl' => WSDL_CACHE_NONE,
            'soap_version'   => SOAP_1_2
        ]);
        $server->setUri($this->generateUri()."/server");
        return $server
            ->setReturnResponse(true)
            ->setClass(TicketsController::class)
            ->getSoap()
            ->handle();
    }
}
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/version', function () use ($router) {
    return $router->app->version();
});

//Rota do nosso SOAP Server - direcionando para o controlador de acoes
$router->get('/emp-soap.wsdl', 'Server\SoapServerController@autoDiscover');
$router->post('/server', 'Server\SoapServerController@Server');

//Chamada de teste
$uri = 'http://localhost:98';
$router->get('emp-test-ticket', function () use($uri) {
    $client = new \Zend\Soap\Client("$uri/emp-soap.wsdl", [
        'cache_wsdl' => WSDL_CACHE_NONE
    ]);

    return $client->consultarTotalLoja([
        'company' => 'CAMICADO-BR',
        'store' => "900",
        'date' => '2019-05-16'
    ]);
});
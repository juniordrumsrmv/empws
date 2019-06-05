<?php

/**
 * Funcao para montagem de retorno
*/
function responseWS($content = '', $status = 200, array $headers = [])
{
    /** @var \App\Http\Response $factory*/
    $factory = new \App\Http\Response();

    if ( func_num_args() === 0 ){
        return $factory;
    }

    return $factory->make($content, $status, $headers);
}


/**
 * Funcao para montagem de retorno SOAP
 */
function responseSoapXml($content = '', $type = 0, $error = '')
{
    /** @var \App\Http\Response $factory*/
    $factory = new \App\Soap\Responses\Response();

    if ( func_num_args() === 0 ){
        return $factory;
    }

    return $factory->soapXMLCreate($content, $type, $error);
}

/**
 * Funcao para montagem de retorno ERRO
 */
function responseStatus($type, $code = 0, $data = NULL)
{
    /** @var \App\Http\Response $factory*/
    $factory = new \App\Soap\Responses\ResponsesDefine();

    if ( func_num_args() === 0 ){
        return $factory;
    }

    return $factory->make($type, $code, $data);
}
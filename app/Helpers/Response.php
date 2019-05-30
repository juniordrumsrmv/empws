<?php

function responseWS($content = '', $status = 200, array $headers = [])
{
    $factory = new \App\Http\Response();

    if ( func_num_args() === 0 ){
        return $factory;
    }

    return $factory->make($content, $status, $headers);
}
<?php

/**
 * Funcao customizada de log
 */
function LogMsg($data, $level = 0 ){
    $factory = new \App\Emporium\Log();
    $factory->make($data, $level);
}
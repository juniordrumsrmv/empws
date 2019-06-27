<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 10/06/19
 * Time: 17:25
 */

namespace App\Emporium;


use Monolog\Formatter\LineFormatter;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Log
{

    /**
     * Funcao customizada de log
     * @param string $data
     * @param int $level
     * @param string $type
     */
    public function make($data, $level = 1,  $type = 'info' ){

        //Validando nivel de log
        $USE_LOG = env('DEBUG_LEVEL');
        if ( $level > $USE_LOG ){ return 0; }

//        // Creando arquivo de log
//        $log = new Logger('empws');
//        $handler = new StreamHandler('/var/emporium/log/empws.log');
//        $handler->setFormatter(new LineFormatter('', null, true, true));
//        $log->pushHandler($handler);

        //Logando conforme tipo
        switch ( $type ) {
            case 'error':
                \Log::error($data);
                break;
            case 'warning':
                \Log::warning($data);
                break;
            default:
                \Log::info($data);
                break;
        }
    }
}
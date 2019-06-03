<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 31/05/19
 * Time: 15:21
 */

namespace App\Soap\Responses;


use Illuminate\Support\Facades\Log;

class Response
{

    public $content;
    public $type;
    public $error;
    public $return;

    /**
     * Funcao para retorno de xml SOAP
     */
    public function soapXMLCreate($content = [], $type = 0, $error = E_DEFAULT)
    {
        //Convertendo a array
        if ( $content instanceof Arrayable ) {
            $content = $content->toArray();
        }

        $data = [];
        if ( $type == 2 ) {
            $data = [
                'faultcode' => 500,
                'faultstring' => 'Erro desconhecido'
            ];
            $return = view('responses.fault', compact('data'));
        }
        else {
            //Se há conteudo
            $data = '';
            if (is_array($content) > 0) {

                foreach ( $content as $key1 => $val1 ) {
                    $data .= "        <".$key1.">\n"; // root tag - begin

                    foreach ( $val1 as $key2 => $val2 ) {

                        if ( is_array($val2) ) {

                            foreach ( $val2 as $key3 => $val3 ) {
                                $data .= "            <".$key2.">\n"; // root tag - begin
                                if ( is_array($val3) ) {
                                    foreach ($val3 as $key4 => $val4) {
                                        $data .= "                <".$key4.">".$val4."</".$key4.">\n";
                                    }
                                }
                                $data .= "            </".$key2.">\n"; // root tag - end
                            }

                        }
                        else
                            $data .= "            <".$key2.">".$val2."</".$key2.">\n";
                    }

                    $data .= "        </".$key1.">"; // root tag - end
                }

                $return = view('responses.success', compact('data'));
            }
        }

        return $return;
    }

}
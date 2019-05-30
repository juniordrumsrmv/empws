<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 29/05/19
 * Time: 14:51
 */

namespace App\Http;


use Illuminate\Contracts\Support\Arrayable;
use Zend\Config\Config;
use Zend\Config\Writer\Xml;
use Zend\Soap\Wsdl;

class Response
{
    public function make($content = '', $status = 200, array $headers = [])
    {
        /** @var Request $request */
        $request = app('request');

        $acceptHeader = $request->header('accept');
        print_r($acceptHeader);
        $result = "";
        switch ($acceptHeader) {
            case 'application/json':
                $result = $this->json($content, $status, $headers);
                break;
            default:
                $result = $this->getXML($content);
                break;
        }

        return $result;
    }

    protected function getXML($data)
    {
        if ( $data instanceof Arrayable ) {
            $data = $data->toArray();
        }
        $config = new Config($data, false);
        $xmlWriter = new Xml();

        return $xmlWriter->toString($config);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: boliveira
 * Date: 31/05/19
 * Time: 15:21
 */

namespace App\Webservice\Responses;

class Response
{
    /**
     * @var int $status
     */
    public $status;

    /**
     * @var string $code
     */
    public $code;

    /**
     * @var string $message
     */
    public $message;

    /**
     * @var string $detail
     */
    public $detail;


    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return Response
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Response
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Response
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param string $detail
     * @return Response
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
        return $this;
    }

}
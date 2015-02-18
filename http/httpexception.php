<?php


namespace Smce\Http;

class HttpException extends \Exception
{


     /**
     * @param int
     * @param string
     *
     * @return header
     */

    public function __construct($httpCode,$msg){}
    

     /**
     *
     * @return message
     */
    public function getMsg(){}


     /**
     *
     * @return httpCode
     */
    public function getHttpCode(){}
    

    /**
     *
     * @return httpError
     */
    public function htppError(){}


    
}
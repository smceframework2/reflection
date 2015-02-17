<?php


namespace Smce\Http;

class HttpException extends \Exception
{


     /**
     * @param httpCode,
     * @param message
     *
     * @return header
     */

    public function __construct(int httpCode,string msg)
    

     /**
     *
     * @return message
     */
    public function getMsg()


     /**
     *
     * @return httpCode
     */
    public function getHttpCode()
    

    /**
     *
     * @return httpError
     */
    public function htppError()


    
}
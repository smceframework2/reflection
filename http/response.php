<?php


namespace Smce\Http;


use Smce\Http\HttpException;


class Response extends HttpException
{
	
	/**
     * @param int
     * @param string
     * 
     * @return header
     */
    public function __construct($httpCode,$msg){}

}
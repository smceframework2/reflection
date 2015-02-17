<?php


namespace Smce\Http;


use Smce\Http\HttpException;


class Response extends HttpException
{
	
	/**
     *
     * @return header
     */
    public function __construct(int httpCode,string msg)

}
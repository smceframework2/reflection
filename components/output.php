<?php


namespace Smce\Components;

class Output
{

    /**
    *@param string
    *
    *
    *@return this
    */

    
    public function setContentType($mimeType = ""){}


   /**
    *@param string
    *
    *
    *@return this
    */

    public function setFileName($fileName){}

    
    /**
    *@param mixed
    *
    *
    *@return echo
    */
    public function put($data){}
    
     /**
    *@param string
    *
    *
    *@return void
    */
    public function putFile($file){}
    
    /**
    *
    *
    *@return header
    */
    public function getHeader(){}

}
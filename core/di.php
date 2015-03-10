<?php

namespace Smce\Core;

use Smce\Core\Di\Singleton;
use Smce\Core\Di\DiCache;
use Smce\Core\Di\DiAdapter;

class Di 
{

    /**
    *@param adapter
    *
    *
    *@return void
    */

    public function __construct($adapter=NULL){}


    /**
    *@param string
    *@param Closure
    *
    *@return void|DiCache
    */

    public  static function bind($key,$class){}
    

     /**
    *@param string
    *
    *@return value|false
    */
    public static function resolve($key){}


    /**
    *@param string
    *@param Closure
    *
    *@return new Di\Singleton
    */
    public static function singleton($key,$class){}
    


    /**
    *@param string
    *
    *@return bool
    */
    public static function remove($key=""){}



    /**
    *@param string
    *
    *@return bool
    */
    public static function has($key=""){}

    /**
    *
    *@return void
    */
    public static function reset(){}




    /**
    *
    *@return array
    */
    public static function  getKeys(){}

    /**
    *
    *@return array
    */
    public static function  getAll(){}



    /**
    *
    *@return int
    */
    public static function getCount(){}


}




    
    

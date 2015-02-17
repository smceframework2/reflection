
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

    public function __construct(adapter=NULL)


    /**
    *@param key
    *@param Closure class
    *
    *@return void or DiCache
    */

    public function bind(string key,<\Closure> $class)
    

     /**
    *@param key
    *
    *@return value or false
    */
    public static function resolve(string key)


    /**
    *@param key
    *@param Closure class
    *
    *@return new Di\Singleton
    */
    public function singleton(string key,<\Closure> $class)
    


    /**
    *@param key
    *
    *@return bool
    */
    public static function remove(string key="")



    /**
    *@param key
    *
    *@return bool
    */
    public static function has(string key="")

    /**
    *
    *@return void
    */
    public static function reset()




    /**
    *
    *@return array
    */
    public static function  getKeys()

    /**
    *
    *@return array
    */
    public static function  getAll()



    /**
    *
    *@return int
    */
    public static function getCount()


}




    
    


<?php

namespace Smce\Core;


class EventManager
{

    /**
    *@param key
    *@param params
    *
    *@return function
    */

    public static function __callStatic(string key,array params)



    /**
    *@param key
    *@param params
    *
    *@return function
    */

    public  function __call(string key,array params)


    /**
    *@param key
    *@param Closure $class
    *
    *@return void
    */  
    public function push(key,<\Closure> $class)


    /**
    *@param key
    *
    *@return function or false
    */ 
    public static function pull(string key)



    /**
    *@param key
    *@param Closure $class
    *
    *@return void
    */
    public function bind(string key,<\Closure> $class)


    /**
    *@param key
    *
    *@return boll
    */
    public static function remove(string key="")


    /**
    *@param key
    *
    *@return boll
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
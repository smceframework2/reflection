<?php

namespace Smce\Core;


class EventManager
{

    /**
    *@param string
    *@param array
    *
    *@return function
    */

    public static function __callStatic($key,$params){}



    /**
    *@param string
    *@param array
    *
    *@return function
    */

    public  function __call($key,$params){}


    /**
    *@param string
    *@param Closure
    *
    *@return void
    */  
    public function push($key,$class){}


    /**
    *@param string
    *
    *@return function|false
    */ 
    public static function pull($key){}



    /**
    *@param string
    *@param Closure
    *
    *@return void
    */
    public function bind($key,$class){}


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
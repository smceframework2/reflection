<?php

namespace Smce\Driver;


class Adapter
{

    /**
    * @param string
    * @param int
    * @return bool
    */
    public static function set($key,$str,$duration){}


    /**
    * @param string
    * @return function
    */
    public static function get($key){}


    /**
    * @param string
    * @return bool
    */
    public static function remove($key){}


    /**
    * @param adapter
    * @return void
    *
    * @return bool
    */
    public static function setAdapter($adapter){}


    /**
    * @return bool
    */
    public static function isAdapter(){}
}
<?php


namespace Smce\Driver;

class Redis
{
   
    
    /*
     * @return redis connect
     */
    public function getRedis(){}

    
    /*
     * @return void
     */
    public function setConfig($config){}


     /*
     * @return array
     */

    public function getConfig($config){}
    
    /**
     * @return void
     */
    public function connect(){}
    
    /**
     * @param string
     *
     * @return string
     */
    public function get($key){}
    
    /**
     * @param string
     * @param string
     * @param int
     *
     * @return set
     */
    public function set($key,$value,$duration){}
    
    /**
     * @param string
     * @param string
     *
     * @return lpush
     */
    public function lpush($key,$value){}
    
    /**
     * @param string
     * @param long
     * @param long
     *
     * @return lrange
     */
    public function lrange($key, $x, $y){}
    

}
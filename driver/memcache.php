<?php


namespace Smce\Driver;

class Memcache
{
  
    
    /*
     * @return memcache connect
     */
    public function getMemcache(){}
    
    /*
     * @param array
     * @return void
     */
    public function setConfig($config){}


    /*
     * @return array
     */

    public function getConfig(){}
    

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
     * @param bool
     * @param int
     *
     * @return set
     */
    public function set($key, $value, $bolen,$duration){}
    
    /**
     * @param string
     * @param string
     * @param bool
     * @param int
     *
     * @return add
     */
    public function add($key, $value, $bolen,$duration=10){}
    
    /**
     * @param string
     * @param string
     *
     * @return addServer
     */
    public function addServer($host, $port){}
    /**
     * 
     *
     * @return  close
     *
     */
    public function close(){}
    
    /**
     * @param string
     * @param int
     *
     * @return decrement
     */
    public function decrement($key,$item){}

    /**
     * @param string
     *
     * @return delete
     */
    public function delete($key){}

    
    /**
     * 
     *
     * @return flush
     */
    public function flush(){}

    
    /**
     * 
     *
     * @return getExtendedStats
     */
    public function getExtendedStats(){}


    /**
     * @param string
     * @param string
     *
     * @return getServerStatus
     */
    public function getServerStatus($host, $port){}


    
    /**
     * 
     *
     * @return getStats
     */
    public function getStats(){}
    
    /**
     * 
     *
     * @return getVersion
     */
    public function getVersion(){}
    
    /**
     * @param string
     * @param int
     *
     * @return increment
     */
    public function increment($key,$item){}

    
    /**
     * @param string
     * @param string
     *
     * @return pconnect
     */
    public function pconnect($host, $port){}

    
    /**
     * @param string
     * @param string
     * @param bool
     * @param int
     *
     * @return replace
     */
    public function replace($key,$value,$bol,$duration){}

    
    /**
     * @param int
     * @param float
     *
     * @return setCompressThreshold
     */
    public function setCompressThreshold($i,$d){}


}
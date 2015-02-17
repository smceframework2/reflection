<?php


namespace Smce\Driver;

class Memcache
{
    /**
     * @var array memcache config
     */
    protected config = [];

    /**
     * @var memcache instance
     */
    protected memcache;
  
    
    /*
     * @return memcache connect
     */
    public function getMemcache()
    
    /*
     * @param config
     * @return void
     */
    public function setConfig(config)


    /*
     * @return config
     */

    public function getConfig()
    

    /**
     * @return void
     */
    public function connect()
    
    /**
     * @param key
     *
     * @return value
     */
    public function get(string key)
    
    /**
     * @param key
     * @param value
     * @param bolen
     * @param duration
     *
     * @return set
     */
    public function set(string key, string value,bool bolen,int duration)
    
    /**
     * @param key
     * @param value
     * @param bolen
     * @param duration
     *
     * @return add
     */
    public function add(string key,string value,bool bolen,int duration = 10)
    
    /**
     * @param host
     * @param port
     *
     * @return addServer
     */
    public function addServer(host, port)
    /**
     * 
     *
     * @return  close
     *
     */
    public function close()
    
    /**
     * @param key
     * @param item
     *
     * @return decrement
     */
    public function decrement(string key,int item)

    /**
     * @param key
     *
     * @return delete
     */
    public function delete(string key)

    
    /**
     * 
     *
     * @return flush
     */
    public function flush()

    
    /**
     * 
     *
     * @return getExtendedStats
     */
    public function getExtendedStats()


    /**
     * @param host
     * @param port
     *
     * @return getServerStatus
     */
    public function getServerStatus(string host, port)

    
    /**
     * 
     *
     * @return getStats
     */
    public function getStats()
    
    /**
     * 
     *
     * @return getVersion
     */
    public function getVersion()
    
    /**
     * @param key
     * @param item
     *
     * @return increment
     */
    public function increment(string key,int item)

    
    /**
     * @param host
     * @param port
     *
     * @return pconnect
     */
    public function pconnect(string host, port)

    
    /**
     * @param key
     * @param value
     * @param bolen
     * @param duration
     *
     * @return replace
     */
    public function replace(string key,string value,bool bol,int duration)

    
    /**
     * @param int
     * @param fload
     *
     * @return setCompressThreshold
     */
    public function setCompressThreshold(int i,float d)


}
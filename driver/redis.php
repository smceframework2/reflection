<?php


namespace Smce\Driver;

class Redis
{
    /**
     * @var array redis config
     */
    protected config = [];
 
    /**
     * @var redis instance
     */
    protected redis;
   
    
    /*
     * @return redis connect
     */
    public function getRedis()

    
    /*
     * @return void
     */
    public function setConfig(config)


     /*
     * @return config
     */

    public function getConfig(config)
    
    /**
     * @return void
     */
    public function connect()
    
    /**
     * @param key
     *
     * @return get
     */
    public function get(string key)
    
    /**
     * @param key
     * @param value
     * @param duration
     *
     * @return set
     */
    public function set(string key,string value,int duration)
    
    /**
     * @param key
     * @param value
     * @param duration
     *
     * @return lpush
     */
    public function lpush(string key,string value)
    {
        
        return this->redis->lpush(key, value);
    }
    
    /**
     * @param key
     * @param x
     * @param y
     *
     * @return lrange
     */
    public function lrange(string key, x, y)
    

}
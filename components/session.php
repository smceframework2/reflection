
<?php

namespace Smce\Components;


class Session
{


    /**
    *@param security
    *
    *
    *@return void
    */
	public function setSecurity(security)


     /**
    *
    *@return void
    */
    public function register()


	/**
     * @param $key
     * @param $value
     *
     * @return bool
     */
    public function set(key, value)
    
    /**
     * @param key
     *
     * @return session or false
     */
    public function get(key)
    
    
    /**
     *
     * @return void
     */
    public function reset()


    /**
     *
     * @return bool
     */
    public function remove(key)

    
    /**
     * @param _identity
     * @param duration
     *
     * return param
     */
    public function login(_identity, duration)


    /**
     *
     * return this->get()
     */
    public function getLoginStatus()
 
    /**
     *
     * return bool
     */
    public function isSessionStart()

}
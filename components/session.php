<?php

namespace Smce\Components;


class Session
{


    /**
    *@param string
    *
    *
    *@return void
    */
	public function setSecurity($security){}


     /**
    *
    *@return void
    */
    public function register(){}


	/**
     * @param string
     * @param mixed
     *
     * @return bool
     */
    public function set($key, $value){}
    
    /**
     * @param string
     *
     * @return mixed|false
     */
    public function get($key){}
    
    
    /**
     *
     * @return void
     */
    public function reset(){}


    /**
     *
     * @return bool
     */
    public function remove($key){}

    
    /**
     * @param _identity
     * @param int
     *
     * @return param
     */
    public function login($_identity, $duration){}


    /**
     *
     * return bool
     */
    public function getLoginStatus(){}
 
    /**
     *
     * @return bool
     */
    public function isSessionStart(){}

}
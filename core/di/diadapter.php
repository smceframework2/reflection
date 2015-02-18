<?php


namespace Smce\Core\Di;

use Smce\Core\Di;

class DiAdapter
{
	
	/**
    * @param string
    * @param int
    * @return void
    */
	public static function set($key,$duration){}


	/**
    * @param string
    * @return function
    */
	public static function get($key){}


	/**
    * @param adapter
    * @return void
    */
	public static function setAdapter($adapter){}

	/**
    * @return bool
    */
	public static function isAdapter(){}
}
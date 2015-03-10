<?php

/**
 *
 * @author Samed Ceylan
 * @link http://www.samedceylan.com/
 * @copyright 2015 SmceFramework 2
 * @github https://github.com/smceframework2
 */

namespace Smce\Core\Queue;

use Smce\Core\Queue;

class QueueAdapter
{
	

	/**
    * @param string
    * @param int
    * @return bool
    */
	public static function set($queKey, $key, $class, $duration, $time){}


	/**
    * @param string
    * @param int
    * @return bool
    */
	public static function replace($queKey, $key, $arr, $duration){}

	/**
    * @param string
    * @return function
    */
	public static function get($queKey){}

	/**
    * @param string
    * @param string
    * @return bool
    */
	public static function remove($queKey, $key){}

	/**
    * @param string
    * @return bool
    */
	public static function removeQue($queKey){}


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
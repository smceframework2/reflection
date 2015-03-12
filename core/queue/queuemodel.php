<?php

/**
 *
 * @author Samed Ceylan
 * @link http://www.samedceylan.com/
 * @copyright 2015 SmceFramework 2
 * @github https://github.com/smceframework22
 */

namespace Smce\Core\Queue;

use Smce\Core\Queue\QueueAdapter;
use Smce\Core\Queue\QueueModel;

class QueueModel
{

	
	/**
    * @param string
    * @param string
    * @return void
    */
	public function __construct($queKey, $key, $class){}



	/**
    *@param int
    *@return this
    */
	public function addMinutes($minute=0){}



	/**
    *@param int
    *@return bool|exception
    */
	public function register($duration=0){}


}
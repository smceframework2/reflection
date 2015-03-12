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
use Smce\Driver\Adapter;

class QueueListen
{

	 /**
    *@param adapter
    *@return void
    */
    public function __construct($adapter=NULL,$queKey=NULL){}
  

     /**
    *@return void
    */
	public function start(){}



	/**
    *@return void
    */
	public function stop(){}

    /**
    *@param int
    *@return void
    */

	public function sleep($duration=0){}


	/**
    *@param string
    *@return bool
    */
	public function isQue($queKey){}


	/**
    *@return string
    */
	public function getLastTransactionTime(){}


	/**
    *@return array
    */
	public function status(){}
	

	/**
    *
    *@return false|array
    */
    public static function getAll(){}

}
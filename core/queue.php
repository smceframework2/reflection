<?php

/**
 *
 * @author Samed Ceylan
 * @link http://www.samedceylan.com/
 * @copyright 2015 SmceFramework 2
 * @github https://github.com/smceframework22
 */

namespace Smce\Core;

use Smce\Core\Queue\QueueAdapter;
use Smce\Core\Queue\QueueModel;

class Queue
{

 
    public function __construct($adapter=NULL){}


    /**
    *@param string
    *@param Closure
    *
    *@return false|DiCache
    */
    public static function bind($queKey, $key, $class){}


    /**
    *@param string
    *
    *@return false|array
    */
    public static function resolve($queKey){}


    /**
    *@param string
    *@param string
    *
    *@return bool
    */
    public static function remove($queKey,$key){}


    /**
    *@param string
    *@param string
    *
    *@return bool
    */
    public static function removeQue($queKey){}

}

<?php


namespace Smce\Core\Di;

use Smce\Core\Di;
use Smce\Core\Di\DiAdapter;

class DiCache
{

	/**
    * @param string
    * @param string
    * @return void
    */
	public function __construct($key,$singletonKey=NULL){}


	/**
    * @param int
    * @return void
    */
	public function cache($duration=0){}

	/**
    * @return adapter
    */
	public function get(){}

}
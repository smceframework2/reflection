<?php

/**
 *
 * @author Samed Ceylan
 * @link http://www.samedceylan.com/
 * @copyright 2015 SmceFramework 2
 * @github https://github.com/smceframework22
 */


namespace Smce\Mvc;

use Smce\Http\HttpException;

class Layout
{


	/**
	 * @param string
	 */
	public function setContentDirectory($contentDirectory=""){}

	/**
	 * 
	 * @return string
	 */
	public function getContentDirectory(){}

	/**
     * @param string
     * @param array
	 *
	 * @return void
     */
	public function setContent($view,$arr=array()){}

	
	/**
	 *
	 * @return HttpException|include
     */
	public function run(){}
	
}
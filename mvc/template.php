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
 
class Template 
{
	
	
	/**
	 * @param string
	 * @return void
	 */
	public function setLayout($layout=""){}


	/**
	 * @param string
	 * @return void
	 */
	public function setLayoutDirectory($layoutDirectory=""){}


	/**
	 * 
	 * @return string
	 */
	public function getLayout(){}


	/**
	 * 
	 * @return string
	 */
	public function getLayoutDirectory(){}
	
	/**
	 * @param string
	 * @param array
	 * @return void
	 */
	public function setView($view="",$arr=array()){}


	/**
	 * @param string
	 * @return void
	 */
	public function setViewDirectory($viewDirectory=""){}
	
	
	/**
	 * 
	 * @return string
	 */
	public function getView(){}


	/**
	 * 
	 * @return string
	 */
	public function getViewDirectory(){}


	
	/**
	 * 
	 *@return void
	 */
	public function run(){}
	

	
	/**
	 * 
	 * @return void
	 */
	private function adjustmentLayout($layoutFile){}


	/**
	 * 
	 * @return void
	 */
	private function adjustmentView($viewFile){}
	
	
}


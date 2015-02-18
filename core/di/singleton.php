<?php


namespace Smce\Core\Di;


class Singleton
{
	 
  /**
  * @param string
  * @param class
  * @return void
  */
	public function __construct($key, $class){}


  /**
  * @param string
  * @return void
  */
	public function resolveWhen($key){}


  /**
  * @param string
  * @return false|singleton
  */
	public static function getSingleton($key){}

  /**
  * @return array
  */
	public static function  getKeys(){}

   /**
  * @return array
  */
  public static function  getAll(){}

  /**
  * @return int
  */
  public static function getCount(){}
  

  /**
  * @param string
  * @param string
  * @return void
  */
  public static function make($controller,$action){}




}
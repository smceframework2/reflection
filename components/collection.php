<?php

namespace Smce\Components;


class Collection
{
    

     /**
    *@param array
    *
    *
    *@return void
    */


    public function __construct($items = []){}

    /**
    *@param Closure
    *
    *
    *@return this
    */

    public function each($callback){}


    /**
    *@param Closure callback
    *
    *
    *@return static
    */

    public function map($callback){}


     /**
    *@param Closure
    *
    *
    *@return static
    */


    public function filter($callback){}

   
    /**
    *@param string
    *@param mixed
    *
    *@return static
    */


    public function pull($key, $dt = null){}


    /**
    *
    *@return array_pop
    */

    public function pop(){}

    /**
    *@param array
    *
    *@return static
    */

    public function diff($items){}
    

    /**
    *
    *@return items
    */
    
    public function getAll(){}




     /**
    *@param string
    *@param mixed
    *
    *@return value
    */

    public function get($key, $dt = null){}


     /**
    *
    *@return static
    */

    public function flip(){}
    


     /**
    *@param string
    *
    *@return has
    */
    public function has($key){}


     /**
    *
    *@return bool
    */
    public function isEmpty(){}



     /**
    *
    *@return static
    */
    public function keys(){}


     /**
    *@param string
    *@param string
    *
    *@return array
    */
    public function lists($listsvalue, $listskey = null){}


    /**
    *@param array
    *
    *@return static
    */
    public function merge($items){}
    

     /**
    *
    *@return last value
    */
    public function last(){}


     /**
    *@param string
    *
    *@return bool
    */
    public function offsetExists($key){}

     /**
    *@param mixed
    *
    *@return void
    */
    public function prepend($value){}


    /**
    *@param  callable $callback
    *@param  mixed $initial
    *@return mixed
    *
    */
    public function reduce($callback, $initial = null){}
    

    /**
    *
    *@return static
    *
    */
    public function reverse(){}


    /**
    *@param mixed
    *@param bool $strict
    *
    *@return mixed
    *
    */
    public function search($value, $strict = false){}


    /**
    *
    *@return mixed|null
    *
    */
    public function shift(){}


    /**
    *@param Closure callback
    *
    *@return this
    *
    */
    public function sort($callback){}


    /**
    * @param int $offset
    * @param int $length
    * @param mixed $replacement
    * @return static
    *
    */
    public function splice($offset, $length = 0, $replacement = []){}

 
    /**
    *@param Closure
    *
    *@return this
    *
    */
    public function transform($callback){}


    /**
    *
    *@return static
    *
    */
    public function values(){}


     /**
    *
    *@return static
    *
    */
    public function unique(){}


    /**
    *
    *@return this
    *
    */
    public function shuffle(){}


     /**
    *
    *@return int
    *
    */

    public function count(){}

    /**
    *@param mixed $value
    *
    *@return void
    *
    */

    public function push($value){}


    /**
    * @param mixed $key
    * @param mixed $value
    * @return void
    *
    */
    public function offsetSet($key, $value){}

    
}
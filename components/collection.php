
<?php

namespace Smce\Components;


class Collection
{
    

     /**
    *@param items
    *
    *
    *@return void
    */


    public function __construct(items = [])

    /**
    *@param Closure callback
    *
    *
    *@return this
    */

    public function each(<\Closure> callback)

    /**
    *@param key
    *
    *
    *@return static
    */

    public function fetch(string key)
    

    /**
    *@param Closure callback
    *
    *
    *@return static
    */

    public function map(callback)


     /**
    *@param Closure callback
    *
    *
    *@return static
    */


    public function filter(callback)

   
    /**
    *@param key
    *@param dt
    *
    *@return static
    */


    public function pull(key, dt = null)
    {
        
        return array_pull(this->items, key, dt);

    }


    /**
    *
    *@return array_pop
    */

    public function pop()
    {
        
        return array_pop(this->items);
    }

    /**
    *@param items
    *
    *@return static
    */

    public function diff(array items)
    

    /**
    *
    *@return items
    */
    
    public function getAll()


    /**
    *@param Closure callback
    *@param dt
    *
    *@return fist
    */

    public function first(<\Closure> callback = null, dt = null)

     /**
    *
    *@return static
    */


    public function flatten()


     /**
    *@param key
    *@param dt
    *
    *@return value
    */

    public function get(key, dt = null)


     /**
    *
    *@return static
    */

    public function flip()
    {
        
        return new $static(array_flip(this->items));
    }


     /**
    *@param key
    *
    *@return has
    */

    public function has(key)

     /**
    *
    *@return item empty
    */
    public function isEmpty()



     /**
    *
    *@return static
    */

    public function keys()


     /**
    *@param value
    *@param key
    *
    *@return array
    */

    public function lists(string value, string key = null)


    /**
    *@param key
    *@param dt
    *
    *@return static
    */
    public function merge(array items)
    

     /**
    *
    *@return last value
    */

    public function last()


     /**
    *@param key
    *
    *@return array_key_exists
    */
    
    public function offsetExists(key) -> bool
    {
        
        return array_key_exists(key, this->items);
    }

     /**
    *@param value
    *
    *@return void
    */

    public function prepend(value)
    {

        array_unshift(this->items, value);

    }


    /**
    *@param callback
    *@param initial
    *@return array
    *
    */

    public function reduce(callback, initial = null)
    

    /**
    *
    *@return static
    *
    */

    public function reverse()


    /**
    *@param value
    *@param strict
    *
    *@return value
    *
    */

    public function search(value, bool strict = false)


     /**
    *
    *@return shift
    *
    */
    public function shift()


    /**
    *@param Closure callback
    *
    *@return this
    *
    */
    public function sort(<\Closure> callback)


    /**
    *@param offset
    *@param lenght
    *@param replacement
    *
    *@return static
    *
    */
    public function splice(int offset, int length = 0, replacement = [])

 
    /**
    *@param Closure callback
    *
    *@return this
    *
    */
    public function transform(<\Closure> callback)


    /**
    *
    *@return static
    *
    */
    public function values()


     /**
    *
    *@return static
    *
    */
    public function unique()


    /**
    *
    *@return this
    *
    */
    public function shuffle()


     /**
    *
    *@return count
    *
    */

    public function count()

    /**
    *@param value
    *
    *@return void
    *
    */

    public function push(value)


    /**
    *@param key
    *@param value
    *
    *@return void
    *
    */
    public function offsetSet(key, value)

    
}
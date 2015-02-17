
/**
 *
 * @author Samed Ceylan
 * @link http://www.samedceylan.com/
 * @copyright 2015 SmceFramework 2
 * @github https://github.com/smceframework
 */

namespace Smce\Core\Di;

use Smce\Core\Di;

class DiAdapter
{
	
	private static prefix="smceDi.";

	private static adapter=NULL;

	private static adapterName=NULL;

	public static function set(key,duration)
	{
		

		if !self::adapter->get(self::prefix.key){

			if self::adapterName=="Memcache"
			{

				self::adapter->set(self::prefix.key,serialize(Di::resolve(key)),false,duration);
				Di::remove(key);

			}elseif self::adapterName=="Redis"
			{
				
				self::adapter->set(self::prefix.key,serialize(Di::resolve(key)),duration);
				Di::remove(key);

			}
			
		}
		
		

	}

	public static function get(key)
	{
	
		return unserialize(self::adapter->get(self::prefix.key));

	}

	public static function setAdapter(adapter)
	{

		if self::adapterName==NULL && strpos(get_class(adapter),"Memcache")
		{

			let self::adapterName="Memcache";

		}elseif self::adapterName==NULL && strpos(get_class(adapter),"Redis")
		{

			let self::adapterName="Redis";

		}elseif self::adapterName==NULL
		{

			throw new \Exception("only Memcache and Redis");

		}

		let self::adapter=adapter;

	}

	public static function isAdapter() -> bool
	{
		if self::adapter !=NULL
        {

        	return true;

        }

        return false;

	}
}
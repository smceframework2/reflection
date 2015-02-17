
/**
 *
 * @author Samed Ceylan
 * @link http://www.samedceylan.com/
 * @copyright 2015 SmceFramework 2
 * @github https://github.com/smceframework
 */

namespace Smce\Core\Di;

use Smce\Core\Di;
use Smce\Core\Di\DiAdapter;

class DiCache
{

	private static adapter;

	private static thisKey;

	private static thisSingletonKey=NULL;

	public function __construct(key,singletonKey=NULL)
	{

		let self::thisKey=key;

		if singletonKey!=NULL
		{

			let self::thisSingletonKey=singletonKey;

		}

	}


	public function cache(int duration=0)
	{

		if duration==0
		{

			throw new \Exception("duration is not empty");


		}

		DiAdapter::set(self::thisKey,duration);

		
	}

	public function get()
	{
		return DiAdapter::get(self::thisKey);

	}


}
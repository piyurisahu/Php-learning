

<?php


class Router
{
	public static function make($config)
	{
		try{

	//return new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','');



	return new PDO(
		$config['connection'].';dbname='.$config['name'],
		$config['username'],
		$config['password'],
		$config['option'] 
		 );
 
	}catch(PDOException $e)
	{
		die('Could not coonect to database ');
	}
	}


	protected $routes=[];
	public function define($routes)
	{
		$this->routes=$routes;
	}


	public function direct($url)
	{
		if(array_key_exists($url, $this->routes))
		{
			return $this->routes['about/culture'];
		}

		throw new Exception("No Route for this url");


	}
}

/*class Router
{
	protected $routes=[];
	public function define($routes)
	{
		$this->routes=$routes;
	}


	public function direct($url)
	{
		if(array_key_exists($url, $this->routes))
		{
			return $this->routes['about/culture'];
		}

		throw new Exception("No Route for this url");


	}


}

*/
{}

<?php


class Connection
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




	// Routes.php

	protected $routes=[];

	public static function  load($file)
	{
		$router=new static;
		require $file;

		return $router;
	}

	public function define($routes)
	{
		$this->routes=$routes;
	}


	public function direct($url)
	{
		if(array_key_exists($url, $this->routes))
		{
			return $this->routes[$url];
		}

		throw new Exception("No Route for this url");


	}
}
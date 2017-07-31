<?php




$query=require 'core/bootstarp.php';
//die(var_dump($app));

 //$router=new Connection;



//require 'route.php';

//$url=trim($_SERVER['REQUEST_URI'],'/');
//require $router->direct($url);

// $router = Connection :: load('route.php');
// require $router->direct($url);


require Router :: load('route.php')
				->direct(Request :: uri());







 




 



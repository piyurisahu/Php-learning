<?php




$query=require 'core/bootstarp.php';

 //$router=new Connection;



//require 'route.php';

$url=trim($_SERVER['REQUEST_URI'],'/');
//require $router->direct($url);

require Connection :: load('route.php')
			->direct($url);









 




 



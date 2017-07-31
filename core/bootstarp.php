<?php


	$app=[];
$app['config']=require 'config.php';
 //$config =require 'config.php';
 require 'database/QueryBuilder.php';
 require 'core/Request.php';
 require 'core/Router.php';

require 'database/Connection.php';



 $app['database']= new QueryBuilder(
 	Connection::make($app['config']['database'])
 	);






/*<?php


$app = [];

$app['config']=require 'config.php';
 // $config =require 'config.php';
 require 'database/QueryBuilder.php';

require 'database/Connection.php';

$app['database']=new QueryBuilder(
 	Connection::make($config['database'])
 	);


 // return new QueryBuilder(
 // 	Connection::make($config['database'])
 // 	);





*/
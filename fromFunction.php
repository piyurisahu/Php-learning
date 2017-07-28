<?php
 function connectToDB()
{
		try{
	return new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','');
	}catch(PDOException $e)
	{
		die('Could not coonect to database ');
}
}
function fetchAll($pdo)
{
	$stat=$pdo->prepare('select * from todos');
	$stat->execute();
	return $stat->fetchAll(PDO::FETCH_CLASS,'Task'); 
}
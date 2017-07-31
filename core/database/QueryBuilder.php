<?php

class QueryBuilder
{

	protected $pdo;
	public function __construct($pdo)
	{
		$this->pdo=$pdo;
	}


	public function selectAll(string $table) 
	{
		$stat=$this->pdo->prepare("select * from {$table}");

		$stat->execute();

		return $stat->fetchAll(PDO::FETCH_CLASS); 
	}
}
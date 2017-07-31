<?php


//$tasks=$query->selectAll('todos');

$tasks= $app['database']->selectAll('todos');



 require 'view/index.view.php';

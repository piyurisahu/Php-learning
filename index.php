<?php




$query=require 'bootstarp.php';









$tasks=$query->selectAll('todos');





 require 'index.view.php';



 




 



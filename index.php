<?php 

//ARRAY INDEXADO
$productos=array("arroz","papa","huevos","sal");
print_r($productos);


echo("<br>");

//ARRAY ASOCIATIVO
$productos2=array("producto1"=>"arroz","producto2"=>"papas","producto3"=>"huevos","producto4"=>"sal");
print_r($productos2);


echo("<br>");


//Imprimir un solo cajon:
echo($productos2["producto1"]);



?>
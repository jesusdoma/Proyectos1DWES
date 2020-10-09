<?php

$array = array(
   1 => "a",
   "1" => "b",
   1.5 => "c",
   true=> "d",
);

echo var_dump($array);

//Arrays multidimensionales

// Creación de una matriz que contiene las ciudades de España
$ciudades_españa = array('Huelva','Madrid','Granada');
// Ídem con las ciudades de Italia
$ciudades_italia= array('Roma','Venecia');
// Almacenamiento de las 2 matrices en la tabla de ciudades
$ciudades = array('ESPAÑA' => $ciudades_españa,' ITALIA' => $ciudades_italia);

// Creación por anidamiento de llamadas a array
$ciudades = array('ESPAÑA' =>array('Huelva','Madrid','Granada'),'ITALIA' =>array('Roma','Venecia'));

$ciudades =['ESPAÑA' => ['Huelva','Madrid','Granada'],
            'ITALIA' => ['Roma','Venecia']];
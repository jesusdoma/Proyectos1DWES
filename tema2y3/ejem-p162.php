<?php 
// $pfichero= fopen('http://192.168.250.254/archivo.txt','r');
$pfichero= fopen('../archivo.txt','r');

if(!$pfichero){
   echo'No se pudo abrir archivo.txt :( '; 
}else{ 
   while(!feof($pfichero)){
      $linea=fgets($pfichero);
      echo $linea . '<br/>';
   }
   fclose($pfichero);
} 

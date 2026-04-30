<?php
 $hostName ="127.0.0.1";
 $userName ="root";
 $password =Null;
 $dbName ="db";

 $connection = mysqli_connect($hostName, $userName,$password,$dbName);
 if($connection){
    echo "Coneected";
 }else{
    echo "Not coneected";
 }
?>
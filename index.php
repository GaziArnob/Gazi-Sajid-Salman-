<?php

echo " Arnob<br>";

$yt="code Arnob<br>";
$arnob="Gazi Sajid Salman<br>";

echo $yt;
echo $arnob;

$mark = 90;
if($mark >=90){
    echo "he get A+";
}else{
    echo" he is not getting A+"."<br>";
}
$marks =[45,90,67,90,60];

$users =[
    "Arnob"=>"12345",
    "Gazi"=>"12345",
    "sajid"=>"125335",
    "salman"=>"345234",
];

$realperson =  "Arnob";
$password = "12345";

//foreach($marks as $mark){
  //  echo $mark."<br>";
//}

foreach($users as $name=>$pass){
    if($name == $realperson && $pass == $password){
        echo "<br>found the real person<br>";
    }else{
        echo "we don't get the person ";
    }
break;
}
?> 


<?php
echo "Kak e rado";

$username = "<br>Troshev<br>";
echo $username;

$age = 21;
echo $age;

$bool = true;
echo $bool;

$array = ["<br>laptop<br>", 21];
echo $array[0];

$assocarray = ["username"=>"Ivan", "username"=>"Gosho"];
echo $assocarray["username"];


for ($i = 0; $i<2; $i++) {

  echo $array[$i];
}

foreach ($assocarray as $current){
    echo $current;
}



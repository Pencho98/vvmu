<?php
echo "Hello";


$myNumber=3;
//if($myNumber == 2) {
//echo "<br>golqmo";
//} //elseif($myNumber ==1) {
  //  echo "<br>k";
//}
//else {
  //  echo "<br>ek";
//}



switch($myNumber) {
    case $myNumber > 2;
    echo "<br>My number is greater than 2";
    break;
    case $myNumber == 1;
    echo "<br>My number is equal to 1";
break;
default:
echo "<br>No match";
break;
}


function printMyName($myName){
    echo "<br>My name is".$myName;
}
printMyName( "<br>Pencho");


function modifyName($myName) {
    echo "<br>My name is".$myName;
    $myName = "<br>Dragan";
    return $myName;
}
$myNewName = modifyName("<br>Pencho");
echo "<br>My name is".$myNewName; 

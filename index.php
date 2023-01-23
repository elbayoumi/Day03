<?php
require_once("./autoloaded.php");

$ctr->setHandler("counter.txt");
$ctr->setcounter(); 
 
if($vist->isvisited()){
    echo $ctr->getcounter();
}else {
    $ctr->increasecounter(); 
    echo $ctr->getcounter(); 
}


?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $start=$_GET["start_city"];
    $destin=$_GET["destination"];
    $date=$_GET["date"];
    $pass_num=$_GET["passenger"];

    if($start!=$destin){
        $c=urldecode($start);
        $d=urldecode($destin);
        echo " $c  $d  $date  $pass_num";
    }
}

?>
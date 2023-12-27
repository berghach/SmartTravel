<?php

include("model\cityModel.php");

class cityController{
    function getcity(){
        $city = new cityDAO();
        $C=$city->getCities();

        include("view/home.php");
    }
}

?>
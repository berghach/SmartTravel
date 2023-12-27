<?php

include("model\busModel.php");

class busController{
    function getbus(){
        $bus = new busDAO();
        $BS=$bus->getBuses();

        include("view\bus_list.php");
    }
}

?>
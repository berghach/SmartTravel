<?php

include("model/routeModel.php");

class routeController{
    function getroute(){
        $route = new routeDAO();
        $R=$route->getRoute();

        include("view/route_list.php");
    }
}

?>
<?php

include("model\scheduleModel.php");

class scheduleController{
    function getschedule(){
        $schedule = new scheduleDAO();
        $SC=$schedule->getSchedule();

        include("view/home.php");
    }
}

?>
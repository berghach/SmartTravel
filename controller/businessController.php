<?php

include("model\businessModel.php");

class businessController{
    function getbusiness(){
        $business = new businessDAO();
        $BN=$business->getBusiness();

        include("view\business_list.php");
    }
}


?>
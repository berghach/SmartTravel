<?php

// include("view\home.php");

include("controller\cityController.php");
$controller_city = new cityController();
$controller_city->getcity();



// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     if (isset($_GET["list"])) {
//         $variable = $_GET["list"];

//         switch ($variable) {
//             case 'Citylist':
//                 include("controller\cityController.php");
//                 $controller_city = new cityController();
//                 $controller_city->getcity();
//                 break;

//             case 'Businesslist':
//                 include("controller\businessController.php");
//                 $controller_business = new businessController();
//                 $controller_business->getbusiness();
//                 break;

//             case 'Routelist':
//                 include("controller/routeController.php");
//                 $controller_route = new routeController();
//                 $controller_route->getroute();
//                 break;

//             case 'Schedulelist':
//                 include("controller/scheduleController.php");
//                 $controller_schedule = new scheduleController();
//                 $controller_schedule->getschedule();
//                 break;

//             case 'Buslist':
//                 include("controller/busController.php");
//                 $controller_bus = new busController();
//                 $controller_bus->getbus();
//                 break;

//             default:
//                 include("view/first_page.php");
//                 break;
//         }
//     } else {
//         include("view/first_page.php");
//     }
// }
?>

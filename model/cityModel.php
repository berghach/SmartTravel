<?php

require_once("db_connection\connection.php");

// require_once("C:/laragon/www/brief9/db_connection/connection.php");

class City {
    private $city_name;

    public function __construct($city_name) {
        $this->city_name = $city_name;
    }

    /**
     * Get the value of city_name
     */ 
    public function getCity_name()
    {
        return $this->city_name;
    }
}

class cityDAO {
    private $db;
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getCities() {
        $stmt = $this->db->query("SELECT * FROM city");
        $stmt->execute();
        $citiesData = $stmt->fetchAll();
        $cities = array();
        foreach ($citiesData as $CD) {
            $cities[] = new City($CD["city_name"]);
        }
        return $cities;
    }
}
// // this in controller
// $city = new cityDAO();
// $cities=$city->getCities();
// // this in controller

// //this in view
// echo "<h2>Cities</h2>";
// foreach ($cities as $C) {
//     echo "<p>".$C->getCity_name()."</p><br>";
// }
// //this in view

?>
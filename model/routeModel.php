<?php

require_once("db_connection\connection.php");

class Route {
    private $startCity;
    private $arrivalCity;
    private $Distance;
    private $Duration;
    public function __construct($startCity, $arrivalCity, $distance, $duration) {
        $this->startCity = $startCity;
        $this->arrivalCity = $arrivalCity;
        $this->Distance = $distance;
        $this->Duration = $duration;
    }
    
    public function getStartCity() {
        return $this->startCity;
    }
    public function getArrivalCity() {
        return $this->arrivalCity;
    }
    public function getDistance() {
        return $this->Distance;
    }
    public function getDuration() {
        return $this->Duration;
    }
}

class routeDAO {
    private $db;
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }
    public function getRoute() {
        $stmt = $this->db->query("SELECT * FROM route");
        $stmt->execute();
        $routeData = $stmt->fetchAll();
        $routes = array();
        foreach ($routeData as $RD) {
            $routes[] = new Route($RD["start_city"], $RD["arrival_city"], $RD["distance"], $RD["duration"]);
        }
        return $routes;
    }
}

?>
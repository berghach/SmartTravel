<?php

require_once("db_connection\connection.php");

class Bus{
    private $busNumber;
    private $registerNumber;
    private $capacity;
    private $businessName;
    public function __construct($busNumber, $registerNumber, $capacity, $businessName){
        $this->busNumber = $busNumber;
        $this->registerNumber = $registerNumber;
        $this->capacity = $capacity;
        $this->businessName = $businessName;
    }
    public function getBusNumber(){
        return $this->busNumber;
    }
    public function getRegisterNumber(){
        return $this->registerNumber;
    }
    public function getCapacity(){
        return $this->capacity;
    }
    public function getBusinessName(){
        return $this->businessName;
    }
}

class busDAO{
    private $db;
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }
    public function getBuses(){
        $stmt = $this->db->query("SELECT * FROM bus");
        $stmt->execute();
        $busData=$stmt->fetchAll();
        $buses = array();
        foreach($busData as $B){
            $buses[] = new Bus($B["bus_number"], $B["regist_number"], $B["capacity"],$B["business_name"]);
        }
        return $buses;
    }
}

?>
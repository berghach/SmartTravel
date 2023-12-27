<?php

require_once("db_connection\connection.php");

class Schedule {
    private $id;
    private $startTime;
    private $arrivalTime;
    private $Date;
    private $Price;
    private $busNumber;
    private $startCity;
    private $arrivCity;
    public function __construct($id, $startTime, $arrivalTime, $Date, $Price, $busNumber, $startCity, $arrivCity){
        $this->id = $id;
        $this->startTime = $startTime;
        $this->arrivalTime = $arrivalTime;
        $this->Date = $Date;
        $this->Price = $Price;
        $this->busNumber = $busNumber;
        $this->startCity = $startCity;
        $this->arrivCity = $arrivCity;
    }
    
    public function getId()
    {
        return $this->id;
    }
    public function getStartTime()
    {
        return $this->startTime;
    }
    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }
    public function getDate()
    {
        return $this->Date;
    } 
    public function getPrice()
    {
        return $this->Price;
    }
    public function getBusNumber()
    {
        return $this->busNumber;
    }
    public function getStartCity()
    {
        return $this->startCity;
    }
    public function getArrivCity()
    {
        return $this->arrivCity;
    }
}

class scheduleDAO {
    private $db;
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }
    public function getSchedule() {
        $stmt = $this->db->query("SELECT * FROM schedule");
        $stmt->execute();
        $scheduleData = $stmt->fetchAll();
        $schedules = array();
        foreach ($scheduleData as $SD) {
            $schedules[] = new Schedule($SD["ID"], $SD["start_time"], $SD["arrival_time"], $SD["the_date"], $SD["price"], $SD["bus_num"], $SD["c_start"], $SD["c_arriv"]);
        }
        return $schedules;
    }
}

?>
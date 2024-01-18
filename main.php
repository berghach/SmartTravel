<?php

class viecule{
    protected $marque;
    protected $model;
    protected $year;
    public function __construct($marque, $model, $year){
        $this->marque = $marque;
        $this->model = $model;
        $this->year = $year;
    }

    public function start(){
        echo"{$this->marque}start the engine";
    }
    public function stop(){
        echo "stop the viecule";
    }
    public function speedUp(){
        echo "don't rush!";
    }
}

class car extends viecule{
    
}

class moto extends viecule{
    
}

?>
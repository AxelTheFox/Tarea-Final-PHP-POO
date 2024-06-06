<?php

class Car extends Vehicle {
    private $doorsNum;
    private $airbag;
    private $itvDates;

    public function __construct($fabricationDate, $brand, $model, $consumption, $engineType, $doorsNum, $airbag, $itvDates) {
        parent::__construct($fabricationDate, $brand, $model, $consumption, $engineType);
        $this->doorsNum = $doorsNum;
        $this->airbag = $airbag;
        $this->itvDates = $itvDates;
    }


    public function getDoorsNum() {
        return $this->doorsNum;
    }

    public function getAirbag() {
        return $this->airbag;
    }

    public function getItvDates() {
        return $this->itvDates;
    }

    
    public function setDoorsNum($doorsNum) {
        $this->doorsNum = $doorsNum;
    }

    public function setAirbag($airbag) {
        $this->airbag = $airbag;
    }

    public function setItvDates($itvDates) {
        $this->itvDates = $itvDates;
    }


    public function __toString() {
        $info = parent::__toString();
        $airbagInfo = $this->airbag ? "Sí" : "No";
        $itvDates = implode(", ", $this->itvDates);
        return "$info, Número de puertas: $this->doorsNum, Airbag: $airbagInfo, Fechas ITV: $itvDates";
    }
}
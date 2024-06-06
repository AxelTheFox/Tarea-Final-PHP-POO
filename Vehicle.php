<?php
class Vehicle {
    protected $fabricationDate;
    protected $brand;
    protected $model;
    protected $consumption;
    protected $engineType;

    public function __construct($fabricationDate, $brand, $model, $consumption, $engineType) {
        $this->fabricationDate = $fabricationDate;
        $this->brand = $brand;
        $this->model = $model;
        $this->consumption = $consumption;
        $this->engineType = $engineType;
    }

    public function getFabricationDate() {
        return $this->fabricationDate;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getConsumption() {
        return $this->consumption;
    }

    public function getEngineType() {
        return $this->engineType;
    }

    public function setFabricationDate($fabricationDate) {
        $this->fabricationDate = $fabricationDate;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setConsumption($consumption) {
        $this->consumption = $consumption;
    }

    public function setEngineType($engineType) {
        $this->engineType = $engineType;
    }

    public function __toString() {
        return "Fecha de fabricación: $this->fabricationDate, Marca: $this->brand, Modelo: $this->model, Consumo: $this->consumption l/100km, Tipo de motor: $this->engineType";
    }
}
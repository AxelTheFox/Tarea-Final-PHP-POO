<?php

class InvalidDataException extends Exception {}

class Vehicle {
    protected $fabricationdate;
    protected $brand;
    protected $model;
    protected $consumption;
    protected $enginetype;

    public function __construct($fabricationdate, $brand, $model, $consumption, $enginetype) {
        if (!strtotime($fabricationdate)) {
            throw new InvalidDataException("Fecha de fabricación inválida: $fabricationdate");
        }
        if ($consumption < 0) {
            throw new InvalidDataException("Consumo no puede ser negativo: $consumption");
        }
        $validEngineTypes = ['combustión', 'eléctrico', 'híbrido'];
        if (!in_array($enginetype, $validEngineTypes)) {
            throw new InvalidDataException("Tipo de motor inválido: $enginetype");
        }

        $this->fabricationdate = $fabricationdate;
        $this->brand = $brand;
        $this->model = $model;
        $this->consumption = $consumption;
        $this->enginetype = $enginetype;
    }

    public function getinfo() {
        return "Fecha de fabricación: $this->fabricationdate, Marca: $this->brand, Modelo: $this->model, Consumo: $this->consumption l/100km, Tipo de motor: $this->enginetype";
    }
}

class Car extends Vehicle {
    private $doorsnum;
    private $airbag;
    private $ITVdates;

    public function __construct($fabricationdate, $brand, $model, $consumption, $enginetype, $doorsnum, $airbag, $ITVdates) {
        parent::__construct($fabricationdate, $brand, $model, $consumption, $enginetype);

        if ($doorsnum < 0) {
            throw new InvalidDataException("Número de puertas no puede ser negativo: $doorsnum");
        }
        if (!is_array($ITVdates)) {
            throw new InvalidDataException("Fechas de ITV debe ser un array");
        }
        foreach ($ITVdates as $date) {
            if (!strtotime($date)) {
                throw new InvalidDataException("Fecha de ITV inválida: $date");
            }
        }

        $this->doorsnum = $doorsnum;
        $this->airbag = $airbag;
        $this->ITVdates = $ITVdates;
    }

    public function getinfo() {
        $info = parent::getinfo();
        $airbaginfo = $this->airbag ? "Sí" : "No";
        $ITVdates = implode(", ", $this->ITVdates);
        return "$info, Número de puertas: $this->doorsnum, Airbag: $airbaginfo, Fechas ITV: $ITVdates";
    }
}

class Motorcycle extends Vehicle {
    private $displacement;

    public function __construct($fabricationdate, $brand, $model, $consumption, $enginetype, $displacement) {
        parent::__construct($fabricationdate, $brand, $model, $consumption, $enginetype);

        if ($displacement < 0) {
            throw new InvalidDataException("Cilindrada no puede ser negativa: $displacement");
        }

        $this->displacement = $displacement;
    }

    public function getinfo() {
        $info = parent::getinfo();
        return "$info, Cilindrada: $this->displacement cc";
    }
}
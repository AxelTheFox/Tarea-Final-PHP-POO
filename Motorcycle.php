<?php

class Motorcycle extends Vehicle {
    private $displacement;

    public function __construct($fabricationDate, $brand, $model, $consumption, $engineType, $displacement) {
        parent::__construct($fabricationDate, $brand, $model, $consumption, $engineType);
        $this->displacement = $displacement;
    }

    // Getters
    public function getDisplacement() {
        return $this->displacement;
    }

    // Setters
    public function setDisplacement($displacement) {
        $this->displacement = $displacement;
    }

    // Método __toString()
    public function __toString() {
        $info = parent::__toString();
        return "$info, Cilindrada: $this->displacement cc";
    }
}
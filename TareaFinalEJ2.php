<?php
require_once 'TareaFinalEJ1.php';

try {
    $car1 = new Car("2020-07-12", "Volkswagen", "Golf GTI", 6.5, "combustión", 4, true, ["2020-07-12", "2024-07-12"]);
    $car2 = new Car("2019-03-25", "Renault", "Megane RS", 5.8, "híbrido", 4, false, ["2019-03-25", "2023-03-25"]);
    $car3 = new Car("2023-03-15", "Audi", "Q4 Sportback", 0, "eléctrico", 4, true, ["2027-03-15"]);
    
    $motorcycle1 = new Motorcycle("2022-02-20", "BMW", "R 1250 GS", 4.3, "combustión", 1254);
    $motorcycle2 = new Motorcycle("2024-09-08", "Ducati", "Panigale V2", 4.7, "combustión", 955);
    $motorcycle3 = new Motorcycle("2019-12-21", "Triumph", "Bonneville T100", 0, "eléctrico", 0); //las motocicletas electricas no tienen cilindrada tradicional, por eso mismo es 0
    
    $vehicles = [$car1, $car2, $car3, $motorcycle1, $motorcycle2, $motorcycle3];
    
    foreach ($vehicles as $vehicle) {
        echo $vehicle->getinfo() . "\n";
    }
} catch (InvalidDataException $e) {
    echo "Error: " . $e->getmessage() . "\n";
} catch (Exception $e) {
    echo "Error inesperado: " . $e->getmessage() . "\n";
}   
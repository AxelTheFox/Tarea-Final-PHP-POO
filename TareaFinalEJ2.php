<?php
require_once 'Car.php';
require_once 'Motorcycle.php';

try {
    $car1 = new Car("2020-07-12", "Volkswagen", "Golf GTI", 6.5, "Combustión", 4, true, ["2020-07-12", "2024-07-12"]);
    $car2 = new Car("2019-03-25", "Renault", "Megane RS", 5.8, "Híbrido", 4, false, ["2019-03-25", "2023-03-25"]);
    $car3 = new Car("2023-03-15", "Audi", "Q4 Sportback", 0, "Eléctrico", 4, true, ["2027-03-15"]);
    
    $motorcycle1 = new Motorcycle("2020-06-20", "BMW", "R 1250 GS", 4.3, "Combustión", 1254);
    $motorcycle2 = new Motorcycle("2022-02-14", "Ducati", "Panigale V2", 4.7, "Combustión", 955);
    $motorcycle3 = new Motorcycle("2021-11-11", "Triumph", "Bonneville T100", 0, "Eléctrico", 0);
    
    $vehicles = [$car1, $car2, $car3, $motorcycle1, $motorcycle2, $motorcycle3];
    
    foreach ($vehicles as $vehicle) {
        echo $vehicle . "\n";
    }
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
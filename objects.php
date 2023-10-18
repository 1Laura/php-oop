<?php
//$vehicles =
//  [
//    ["Astro", "Estrella", "2021", 500, 50000, "veh-01.jpg"],
//    ["Terraza", "Spinneo", "2020", 30000, 31000, "veh-02.jpg"],
//    ["Sage", "Ecostar", "2014", 70000, 15000, "veh-03.jpg"]
//  ];

class Vehicle
{
  public function __construct($make, $model, $year, $mileage, $price, $image)
  {
    $this->make = $make;
    $this->model = $model;
    $this->year = $year;
    $this->mileage = $mileage;
    $this->price = $price;
    $this->image = $image;
  }

  var $make;
  var $model;
  var $year;
  var $mileage;
  var $price;
  var $image;
}

$vehicle1 = new Vehicle("Astro", "Estrella", "2022", "500", "50000", "veh-01.jpg");
$vehicle2 = new Vehicle("Terraza", "Spinneo", "2020", "30000", "31000", "veh-02.jpg");
$vehicle3 = new Vehicle("Sage", "Ecostar", "2014", "70000", "15000", "veh-03.jpg");
//$vehicle2->make = "Terraza";
//$vehicle2->model = "Spinneo";
//$vehicle2->year = "2020";
//$vehicle2->mileage = "30000";
//$vehicle2->price = "31000";
//$vehicle2->image = "veh-02.jpg";

$vehicle=[$vehicle1, $vehicle2, $vehicle3];
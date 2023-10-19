<?php
//$vehicles =
//  [
//    ["Astro", "Estrella", "2021", 500, 50000, "veh-01.jpg"],
//    ["Terraza", "Spinneo", "2020", 30000, 31000, "veh-02.jpg"],
//    ["Sage", "Ecostar", "2014", 70000, 15000, "veh-03.jpg"]
//  ];

interface FormattedAccess
{
  function getFormattedMileage();
  function getFormattedPrice();
}

abstract class Vehicle implements FormattedAccess
{
  var $make;
  var $model;
  var $year;
  var $mileage;
  var $price;
  var $image;

  function getFormattedMileage()
  {
    // TODO: Implement getFormattedMileage() method.
    return number_format($this->mileage,0);
  }
  function getFormattedPrice()
  {
    // TODO: Implement getFormattedMileage() method.
    return number_format($this->price,2);
  }

}

class Car extends Vehicle
{
  function __construct($make, $model, $year, $mileage, $price, $image)
  {
    $this->make = $make;
    $this->model = $model;
    $this->year = $year;
    $this->mileage = $mileage;
    $this->price = $price;
    $this->image = $image;
  }


}

class Truck extends Vehicle
{
  function __construct($make, $model, $year, $mileage, $price, $image, $engine)
  {
    $this->make = $make;
    $this->model = $model;
    $this->year = $year;
    $this->mileage = $mileage;
    $this->price = $price;
    $this->image = $image;
    $this->engine = $engine;
  }

  var $engine;
}


$vehicle1 = new Car("Astro", "Estrella", "2022", "500", "50000", "veh-01.jpg");
$vehicle2 = new Car("Terraza", "Spinneo", "2020", "30000", "31000", "veh-02.jpg");
$vehicle3 = new Car("Sage", "Ecostar", "2014", "70000", "15000", "veh-03.jpg");
$vehicle4 = new Truck("Hauler", "Lion", "2021", "200", "40000", "veh-04.jpg", "diesel");

//$vehicle2->make = "Terraza";
//$vehicle2->model = "Spinneo";
//$vehicle2->year = "2020";
//$vehicle2->mileage = "30000";
//$vehicle2->price = "31000";
//$vehicle2->image = "veh-02.jpg";

$vehicles = [$vehicle1, $vehicle2, $vehicle3, $vehicle4];
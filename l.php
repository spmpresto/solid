<?php


interface DriverInterface{
    public function drive(string $str): void;

}

class Driver implements DriverInterface
{

    public function drive(string $str): void
    {
        print_r('Im driving');
    }
}

class BusDriver extends Driver implements DriverInterface{

    public function drive(string $str): void
    {
        print_r('Im driving bus');
    }
}

class TruckDriver extends Driver implements DriverInterface
{

    public function drive(string $str): void
    {
        print_r('Im driving truck');
    }
}

class Operator
{
    private $driver;

    public function setDriver(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function goDrive()
    {
        $this->driver->drive('some str');
    }
}

$operator = new Operator();
$driver = new Driver();
$busDriver = new BusDriver();

//$operator->setDriver($driver);
$operator->setDriver($busDriver);


$operator->goDrive();
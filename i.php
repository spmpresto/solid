<?php
interface BusDriver
{
    public function driveBus();

}

interface TruckDriver
{
    public function driveTruck();
}



class MarketDriver implements TruckDriver, BusDriver
{


    public function driveTruck()
    {
        print_r('Im driving truck');
    }

    public function driveBus()
    {
        print_r('Im driving bus');
    }
}
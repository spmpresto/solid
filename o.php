<?php


class Driver{
    public function drive(string $str): void
    {
        print_r('Im driving');
    }

}


class BusDriver extends Driver{

    public function drive(string $str): void
    {
        print_r('Im driving bus');
    }


}
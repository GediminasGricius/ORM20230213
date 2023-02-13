<?php

require_once "Point.php";

class Line
{
    private Point $p1;
    private Point $p2;

    public function __construct(Point $p1, Point $p2)
    {
        $this->p1=$p1;
        $this->p2=$p2;
    }

    public function dist(){

        return $this->p1->distance($this->p2->getX(), $this->p2->getY());
    }

    public static function lineDistanceFromOrgin(Point $p){
        return $p->distanceFromOrigin();
    }


}
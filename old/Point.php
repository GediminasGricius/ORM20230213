<?php



class Point{
    private $x;
    private $y;


    function __construct($x,$y){
        $this->x=$x;
        $this->y=$y;
    }



    public function distanceFromOrigin(){

        return sqrt($this->x**2+$this->y**2);
    }




    public function translate($dx = 0,$dy = 0)
    {
        $this->x+=$dx;
        $this->y+=$dy;
    }




    public function __toString(): string
    {
        return "[$this->x, $this->y]";
    }



    public function distance($x1,$y1){

        return sqrt(($this->x-$x1)**2+($this->y-$y1)**2);
    }



    public function setLocation(int $x, int $y){
        $this->setX($x);
        $this->setY($y);

    }




    public function getX()
    {
        return $this->x;
    }



    public function setX($x)
    {
        $this->x = $x;
    }



    public function getY()
    {
        return $this->y;
    }



    public function setY($y)
    {
        $this->y = $y;
    }


}

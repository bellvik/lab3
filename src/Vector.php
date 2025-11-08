<?php
class Vector
{
    private $x;
    private $y;

    public function __construct($x = 0, $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX() {return $this->x;}
    public function getY() {return $this->y;}

    public function length(){
        return sqrt($this->x*$this->x + $this->y*$this->y);
    }
    public function isZero (){
        return $this->x==0 && $this->y==0;
    }
    public function isPerpendicular (Vector $other){
        return ($this->x*$other->getX() + $this->y*$other->getY())==0;
    }
}
?>
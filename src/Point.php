<?php

class Point{
    private $x;
    private $y;
    public function __construct($x =0, $y=0){
        $this->x=$x;
        $this->y=$y;
    }
    public function getX() {return $this->x;}
    public function getY() {return $this->y;}
    public function move($dx, $dy){
        $this->x+=$dx;
        $this->y+=$dy;
        return $this;
    }
    public function __toString(){
        return "Point(x={$this->x}, y={$this->y})";
    }
}
?>

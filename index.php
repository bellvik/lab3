<?php

require 'vendor/autoload.php';
require_once 'src/Point.php';
require_once 'src/Vector.php';

$T1 = new Point(5,8);
$V1 = new Vector(4,7);
$V2 = new Vector(0,0);
$V3 = new Vector(7,-4);
echo "Длина вектора V1:". $V1->length()."<br>";
echo "Длина вектора V2:". $V2->length()."<br>";
echo "Длина вектора V3:". $V3->length()."<br>";
echo $V1->isPerpendicular($V3)."<br>";
echo $T1->move($V1->getX(), $V1->getY());

?>
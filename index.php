<?php

 require_once "Line.php";
 require_once "Point.php";
 require_once "DB.php";

 //$linija=new Line( new Point(2,2), new Point(2,3) );
 //echo $linija->dist();



 // $p=new Point(2,2);

 // echo Line::lineDistanceFromOrgin($p);
/*
 $jonas=new Darbuotojas();
 $jonas->name="Jonas";
 Darbuotojas::$c;

 $petras=new Darbuotojas();
 $petras->name="Petras";
 Darbuotojas::$c;


echo $jonas->name." ".Darbuotojas::$c;
echo "<br>";
echo $petras->name." ".Darbuotojas::$c;
*/
 DB::getDB();
 echo "Vkdau savo uzklausas  <br>";



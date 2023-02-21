<?php

require_once "SuGarsu.php";
require_once "SuKojom.php";
require_once "Gyvunas.php";
require_once "Suo.php";
require_once "Kate.php";
require_once "Zuvis.php";
require_once "Bisonas.php";
require_once "Pudelis.php";


function isveskInformacija(Gyvunas $g){
    echo " vardas: ".$g->getName()." <br>";
}

function isleiskGarsa(SuGarsu $g){
    $g->garsas();
}

$brisius= new Bisonas("Brisius", 10);
$lese=new Pudelis("Lese", 11);

$rainius=new Kate("Rainius",12);
$rainius->setGyvibiuKiekis(8);

isleiskGarsa($lese);

$g=new Suo("Sniego zmogus", 500);

//$brisius->garsas();
//$lese->garsas();

//$brisius->
//isveskInformacija($brisius);
//isveskInformacija($lese);
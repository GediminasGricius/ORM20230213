<?php

use helper\Blade;
use models\Category;
 use eftec\bladeone\BladeOne;
 require_once "vendor/autoload.php";


 if (isset($_GET['delete'])){
     Category::get($_GET['delete'])->delete();
     header("location: index.php");
     die();
 }


  $blade=new Blade( __DIR__."/views",__DIR__."/compile",BladeOne::MODE_DEBUG );
  $blade->run("index");
 //$blade->display("index");




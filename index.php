<?php

 use models\Category;
 use eftec\bladeone\BladeOne;
 require_once "vendor/autoload.php";


 if (isset($_GET['delete'])){
     Category::get($_GET['delete'])->delete();
     header("location: index.php");
     die();
 }


  $blade=new BladeOne( __DIR__."/views",__DIR__."/compile",BladeOne::MODE_DEBUG );
  echo $blade->run("index");


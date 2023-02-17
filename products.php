<?php

use eftec\bladeone\BladeOne;
use models\Category;

 require_once "vendor/autoload.php";

 $id=$_GET['id'];
 $category=Category::get($id);

 $blade=new BladeOne( __DIR__."/views",__DIR__."/compile",BladeOne::MODE_DEBUG );
 echo $blade->run("products",[
         "category"=>$category
 ]);
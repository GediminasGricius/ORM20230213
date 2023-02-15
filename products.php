<?php

 use models\Category;

 require_once "vendor/autoload.php";

 $id=$_GET['id'];
 $category=Category::get($id);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
 <div class="container">
     <div class="row">
         <div class="col-md-12 mt-5">
             <div class="card">
                 <div class="card-header">Prekės kategorijoje: <?=$category->getName() ?></div>
                 <div class="card-body">
                     <table class="table">
                         <thead>
                         <tr>
                             <th>Pavadinimas</th>
                             <th>Aprašymas</th>
                             <th>Kaina</th>
                         </tr>
                         </thead>
                         <tbody>
                         <?php foreach ($category->getProducts() as $product){ ?>
                         <tr>
                             <td><?=$product->getName()?></td>
                             <td><?=$product->getDescription()?></td>
                             <td><?=$product->getPrice()?></td>

                         </tr>
                         <?php } ?>
                         </tbody>
                     </table>

                 </div>
             </div>
         </div>
     </div>

 </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>



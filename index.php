<?php


use models\Category;

 require_once "vendor/autoload.php";


 if (isset($_GET['delete'])){
     Category::get($_GET['delete'])->delete();
     header("location: index.php");
     die();
 }




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
                 <div class="card-header">Kategorijos</div>
                 <div class="card-body">
                     <a href="new.php" class="btn btn-success float-end">Pridėti naują kategorija</a>
                     <table class="table">
                         <thead>
                         <tr>
                             <th>Pavadinimas</th>
                             <th>Paveikslas</th>
                             <th>Kiekis</th>
                             <th>Prekės</th>
                             <th>Veiksmai</th>
                         </tr>
                         </thead>
                         <tbody>
                         <?php foreach (Category::all() as $category){ ?>
                         <tr>
                             <td><?=$category->getName()?></td>
                             <td><?=$category->getImage()?></td>
                             <td>
                                 <a class="btn btn-info" href="products.php?id=<?=$category->getId()?>">Prekės</a>
                             </td>
                             <td><?=$category->getCount()?></td>
                             <td>
                                 <a class="btn btn-info" href="update.php?id=<?=$category->getId()?>">Redaguoti</a>
                                 <a class="btn btn-danger" href="index.php?delete=<?=$category->getId()?>">Trinti</a>
                             </td>
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



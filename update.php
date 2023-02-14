<?php
require_once "DB.php";
require_once "models/Category.php";
require_once "models/Product.php";

$id=$_GET['id'];
$category=Category::get($id);

if (isset($_POST['save'])){
    $category=new Category($_POST['name'], $_POST['image'], $_POST['count'], $id);
    $category->save();
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
                    <form method="post" >
                        <div class="mb-3">
                            <label class="form-label">Pavadinimas</label>
                            <input class="form-control" type="text" name="name" value="<?=$category->getName()?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Paveikslas</label>
                            <input class="form-control" type="text" name="image" value="<?=$category->getImage()?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kiekis</label>
                            <input class="form-control" type="text" name="count" value="<?=$category->getCount()?>">
                        </div>
                        <button type="submit" class="btn btn-success" name="save">Atnaujinti</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>



<?php
if ($_POST) {
    $errors = array();
    if (empty($_POST['name']))
    {
        $errors['name'] = "Vous devriez normalement proposer un nom";
    }
    if (empty($_POST['price']))
    {
        $errors['price1'] = "Vous devriez normalement proposer un prix";
    }
    if (empty($_POST['image']))
    {
        $errors['image1'] = "Vous devriez normalement proposer une image";
    }

    if (empty($_POST['carac']))
    {
        $errors['carac1'] = "Vous devriez normalement avoir un numéro de téléphone";
    }
    if (empty($_POST['design']))
    {
        $errors['design1'] = "Vous devriez normalement préciser un sujet";
    }
    if (empty($_POST['desc']))
    {
        $errors['desc1'] = "Vous devriez normalement vouloir nous dire quelque chose";
    }


    if (count($errors) == 0) {
        header("Location : success.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="styleVaisselle.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<?php
require 'header.php'
?>
    <div class="vaisselle container"
        <form action="" method="post">
            <div>
                <label for="nom">Nom du produit :</label>
                <input type="text" id="nom" name="name" required>
                <p><?php if(isset($errors['name1'])) ?></p>
            </div>
            <div>
                <label for="price">Prix : </label>
                <input type="text" id="price" name="price" required>
                <p><?php if(isset($errors['price1'])) ?></p>
            </div>
            <div>
                <label for="image">Image :</label>
                <input type="text" id="image" name="image" required>
                <p><?php if(isset($errors['image1'])) ?></p>
            </div>
            <div>
                <label for="carac">Caractéristiques :</label>
                <input type="text" id="carac" name="carac">
                <p><?php if(isset($errors['carac1'])) ?></p>
            </div><div>
                <label for="design">Design :</label>
                <input type="radio" name="design" value="guitar" checked> Guitare<br>
                <input type="radio" name="design" value="absurd" checked> Absurd Corp<br>
                <p><?php if(isset($errors['design1'])) ?></p>
            </div>
            <div>
                <label for="desc">Description :</label>
                <textarea id="desc" name="desc" required></textarea>
                <p><?php if(isset($errors['desc1'])) ?></p>
            </div>
            <div class="button">
                <button type="submit">Ajouter le produit</button>
            </div>
        </form>
    </div>
    <?php require 'footer.php' ?>
</body>
</html>


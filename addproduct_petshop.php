<?php

require 'trim-petshop.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = trimArray($_POST);

    $errors = [];

    if (empty($data['productName'])) {
        $errors['productName'] = 'Le nom du produit est requis';
    }

    if (empty($data['price'])) {
        $errors['price'] = 'Le prix du produit est requis';
    }

    if (empty($data['description'])) {
        $errors['description'] = 'La description du produit est requise';
    }

    if (empty($data['picture'])) {
        $errors['picture'] = 'Une image est requise';
    }

    if(empty($errors)){
        header('Location: success_petform.php');
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="form_petshop.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Ajout d'un produit dans l'Animalerie</title>
</head>
<body>
<?php
include 'header.php'
?>
<h2 class="title-banner col-12"><span class="s1">A</span>jouter un articl<span class="s1">e</span></h2>
<div class="row justify-content-center">
    <button type="submit" class="btn btn1">+ ADD NEW</button>
</div>
<img src="images/cover-animalerie.jpeg" class="img-cover" alt="Photo de couverture Wild Bazar Animalerie">

<form class="container form-petshop" method="POST" action="addproduct_petshop.php">
    <div>
        <h5 class="label-title">Informations générales</h5>
    </div>
    <div class="form-group">
        <label class ="label-form" for="productName">Nom du Produit : <span class="warning">*</span></label>
        <input type="text" class="form-control" id="productName" name="productName" value="<?php echo $data['productName'] ?>">
        <p class="warning"><?= $errors['productName'] ?></p>
    </div>
    <div class="form-group">
        <label class ="label-form" for="price">Prix : <span class="warning">*</span></label>
        <input type="text" class="form-control" id="price" name="price" value="<?php echo $data['price'] ?>" placeholder="€">
        <p class="warning"><?= $errors['price'] ?></p>
    </div>
    <h5 class ="label-title">Caractéristiques du produit</h5>
    <div class="form-group">
        <label class ="label-form" for="color">Couleur :</label>
        <select class="form-control custom-select">
            <option selected>Choisir une couleur</option>
            <option value="white">Blanc</option>
            <option value="black">Noir</option>
            <option value="blue">Bleu</option>
            <option value="red"> Rouge</option>
            <option value="yellow">Jaune</option>
            <option value="green">Vert</option>
            <option value="brown">Marron</option>
            <option value="beige">Beige</option>
            <option value="grey">Gris</option>
            <option value="pink">Rose</option>
        </select>
    </div>
    <div class="form-group">
        <label class ="label-form" for="madein">Lieu de fabrication : </label>
        <select class="form-control">
            <option selected>Choisir un lieu de fabrication</option>
            <option value="france">France</option>
            <option value="china">Chine</option>
            <option value="italy">Italie</option>
            <option value="usa">Etats-Unis</option>
            <option value="swiss">Suisse</option>
        </select>
    </div>
    <div class="form-group">
        <label class ="label-form" for="size">Taille :</label>
        <select class="form-control">
            <option selected>Choisir une taille</option>
            <option value="uniqueSize">Taille Unique</option>
            <option value="smalldog">Petit chien / chiot</option>
            <option value="regulardog">Chien de taille moyenne</option>
            <option value="bigdog">Gros chien</option>
            <option value="smallcat">Petit chat / chaton</option>
            <option value="regularcat">Chat Adulte</option>
        </select>
    </div>
    <div class="form-group"
    <label class ="label-form" for="dimension">Dimensions :</label>
    <input type="text" class="form-control" id="dimension" name="dimension" value="<?php echo $data['dimension'] ?>">
    </div>
    <div class="form-group">
        <label class ="label-form" for="description">Description du produit : <span class="warning">*</span></label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        <p class="warning"><?= $errors['description'] ?></p>
    </div>
    <div class="form-group">
        <label class ="label-form" for="picture">Image : <span class="warning">*</span></label>
        <input type="text" class="form-control" id="picture" value="<?php $data['picture'] ?>" name="picture">
        <p class="warning"><?= $errors['picture'] ?></p>
    </div>
    <button type="submit" class="btn btn-primary btn-petshop col-2">Soumettre</button>
</form>

<?php
include 'footer.php'
?>
</body>
</html>

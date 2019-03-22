<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Papeterie</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="papeterie.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

</head>

<?php

// define variables and set to empty values
$nameErr = $priceErr = $descriptionErr = "";
$name = $price = $description = "";
$errors= 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($_POST["name"])) {
        $nameErr = "le nom du produit est obligatoire";
        $errors+= 1;
    }

    if (empty($_POST["price"])) {
        $priceErr = "le pris est obligatoire";
        $errors+= 1;
    }

    if (empty($_POST["description"])) {
        $descriptionErr = "la description est obligatoire";
        $errors+= 1;
    }

    header('Location: form.php');
    exit();

}

?>


<body>
<header>

    <?php
    include 'header.php';
    ?>

</header>


<!--Formulaire d'ajout-->

<div class = 'container formajout'>
    <h2>Formulaire d'ajout</h2>
    <p><span class="error">* champs obligatoires</span></p>
    <form action=""  method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nom">Nom du produit</label>
            <input type="text" class="form-control" id="nom" name="name" value="<?= $_POST['name'] ?? '';?>" placeholder="nom du produit" required>
            <p><span class="error">* <?= $nameErr;?></span></p>
        </div>
        <div class="form-group col-md-6">
            <label for="tarif">Prix du produit</label>
            <input type="text" class="form-control" id="tarif" name="price" value="<?= $_POST['price'] ?? '';?>"placeholder="Prix" required>
            <p><span class="error">* <?= $priceErr;?></span></p>
        </div>
    </div>

    <div class="form-group">
        <label for="comment">Description du produit</label>
        <textarea class="form-control" id="comment" name="description" value="<?= $_POST['description'] ?? '';?>" placeholder="description du produit" rows="3" required></textarea>
        <p><span class="error">* <?= $descriptionErr;?></span></p>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputState">Taille</label>
            <select id="inputState" class="form-control">
                <option selected>Choisissez votre taille</option>
                <option>petit</option>
                <option>moyen</option>
                <option>grand</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Couleur</label>
            <select id="inputState" class="form-control">
                <option selected>Choisissez votre couleur</option>
                <option>rouge</option>
                <option>bleu</option>
                <option>noir</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Marque</label>
            <select id="inputState" class="form-control">
                <option selected>Choisissez votre marque</option>
                <option>guitare</option>
                <option>absurd corp</option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>


<!--fin du formulaire-->


<!-- Footer -->
<?php
include 'footer.php';
?>
<!--End Footer -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>





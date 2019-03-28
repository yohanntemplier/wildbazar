<?php
require 'functionpapeterie.php';
require 'connec.php';
$pdo = new PDO(DSN, USER, PASS);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $data = trimArray($_POST);

    $errors=[];

    if(empty($data ['name'])){
        $errors['name'] = 'Le nom du produit est vide';
    }

    $nameMaxLength = 100;
    if(strlen($data ['name']) > $nameMaxLength){
        $errors['name'] = 'Le nom du produit ne doit pas faire plus de' .$nameMaxLength. 'caractères';
    }

    if(empty($data ['description'])){
        $errors['description'] = 'La description du produit est vide';
    }

    if(empty($data ['price'])){
        $errors['price'] = 'Le prix du produit est vide';
    }
    $priceMaxLenght = 11;
    if(strlen($data['price']) > $priceMaxLenght){
        $errors['price'] = 'Le prix du produit ne doit pas faire plus de' .$priceMaxLenght. 'caractères';
    }


if (empty($errors)) {

    $query = "INSERT INTO products (name, description, price, picture) VALUES (:name, :description, :price, :picture)";
    $statement = $pdo->prepare($query);

    $statement->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
    $statement->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
    $statement->bindValue(':price', $_POST['price'], PDO::PARAM_INT);
    $statement->bindValue(':picture', $_POST['picture'], PDO::PARAM_STR);
    $statement->execute();

    header('Location: papeterie.php');
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Papeterie</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="../papeterie.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

</head>




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
    <form action="../formpapeterie.php" method="post">
        <div class="form-group">
            <label for="name">Nom du produit</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $data['name'] ?? '';?>" placeholder="nom du produit">
            <p><span class="error">*<?php if(!empty($errors['name'])) : ?><?= $errors['name']?><?php endif;?></span></p>
        </div>

        <div class="form-group">
            <label for="price">Prix du produit</label>
            <input type="number" class="form-control" id="price" name="price" value="<?= $data['price'] ?? '';?>"placeholder="Prix">
            <p><span class="error">*<?php if(!empty($errors['price'])) : ?><?= $errors['price']?><?php endif;?></span></p>
        </div>

        <div class="form-group">
            <label for="picture">Image du produit</label>
            <input type="url" class="form-control" id="picture" name="picture" value="<?= $data['picture'] ?? '';?>"placeholder="https://image.com">
        </div>

        <div class="form-group">
            <label for="description">Description du produit</label>
            <textarea class="form-control" id="description" name="description" placeholder="description du produit"><?= $data['description'] ?? '';?></textarea>
            <p><span class="error">*<?php if(!empty($errors['description'])) : ?><?= $errors['description']?><?php endif;?></span></p>
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

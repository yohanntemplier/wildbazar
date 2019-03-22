<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>L'univers de la vaisselle - Wild Bazar</title>
	<meta name="description" content="Venez découvrir la magnificience des produits Wild Bazar, tout pour la vaisselle ! Des fourchettes aux couteaux, en passant par les cuillères, vous trouverez tout le nécessaire pour habiller votre table aux couleurs de la meilleure association du monde. Et aussi d'une guitare.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="styleVaisselle.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
    <body>
        <?php require 'header.php' ?>
        <div class="ban">
            <div class="container jumb">
                <h1 class="display-8"><span class="s1">V</span>aisselle</h1>
                <p class="lead">On mange, on en met plein sur les doigts et la table, mais pas avec de la vaisselle !</p>
                <a class="btn align-item-center justify-content-center" href="formVaisselle.php" role="button">Ajouter un produit</a>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-between">
                <?php include "cardVaisselle.php" ?>
            </div>
        </div>
        <?php require "footer.php"?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

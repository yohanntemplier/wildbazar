<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Textiles</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="Stylesheetextiles.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

</head>

<body>

<header>

    <?php
    include 'header.php';
    ?>

    <!-- Jumbotron -->

    <div class="jumbotron d-flex align-items-center flex-column">
        <div class="fond shadow"></div>
        <h1 class="display-4"><span class="titre">T</span>extile<span class="titre">s</span></h1>

        <p class="lead">
            Ici vous trouverez des produits unique pour styliser votre chez vous et vous même !<br>
            libre de droit et 100% laine de yack bien entendu ! </p>

        <a class="btn btn-lg d-flex align-items-center" href="#" role="button">+ ADD NEW</a>

    </div>
    <!-- Jumbotron -->
</header>

<?php

$product = [
    1 => [
        'price' => '50€',
        'title' =>'Culotte pixel art',
        'description' => 'En 1918 apparaît la marque Petit Bateau, ainsi créée en référence aux tranchées de Verdun, souvent inondées. 
                    Cette boucherie industrielle était la première à présenter des culottes sans jarrets. À cette époque, bœufs, génisses et veaux se voyaient découpés et cuisinés sous forme de caleçons longs comprenant les jarrets, cuisses et fesses.
                    Ici vous n\'avez pas une culotte Petit Bateau mais elle est pas mal quand même !',
        'size' => 'Disponible du 36 au 56',
        'composition' => '100% laine de yack BIO',
        'image' => "images/culotte_gui.png",
         'modal' => 1],

    2 => [
        'price' => '20€',
        'title' => 'Coussin Absurd Corp',
        'description' => 'Prout ! Le coussin péteur fut inventé au XIXème prout ! excusez-moi. On trouve un coussin péteur en cadeau dans Pif magazine (maman me l\'a acheté).
                 Celui ci n\'est pas péteur mais il ajouteras une touche de style dans votre salon !',
        'size' => 'Taille 45x45',
        'composition' => '100% laine de yack BIO',
        'image' => "images/coussin_ab-min.png",
        'modal' => 2],

     3 => [
        'price' => '30€',
        'title' => 'Casquette Absurd Corp',
        'description' => 'La casquette Absurd Corp est un couvre-chef et un des articles phares de la marque. ',
        'size' => 'Taille unique',
        'composition' => '100% laine de yack BIO',
        'image' => "images/casquette_ab-min.png",
        'modal' => 3],

    4 => [
        'price' => '20€',
        'title' =>'Coussin pixel art',
        'description' => 'Prout ! Le coussin péteur fut inventé au XIXème prout ! excusez-moi. On trouve un coussin péteur en cadeau dans Pif magazine (maman me l\'a acheté).
                 Celui ci n\'est pas péteur mais il ajouteras une touche de style dans votre salon ! ',
        'size' => 'Taille 45x45',
        'composition' => '100% laine de yack BIO',
        'image' => "images/Coussin_gui.png",
        'modal' => 4],

    5 => [
        'price' => '60€',
        'title' => 'T-shirt Absurd Corp',
        'description' => 'De nombreuses personnes veulent affirmer leurs idées, leur appartenance à un groupe ou à une idéologie, et portent pour ce faire des vêtements à message.',
        'size' => 'Disponible du 36 au 56',
        'composition' => '100% laine de yack BIO',
        'image' => "images/tee-shirt_ab.png",
        'modal' => 5],

    6 => [
        'price' => '60€',
        'title' => 'Sweat pixel art',
        'description' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500',
        'size' => 'Disponible du 36 au 56',
        'composition' => '100% laine de yack BIO',
        'image' => "images/pull_gui.png",
        'modal' => 6],

    7 => [
        'price' => '50€',
        'title' => 'Culotte Absurd Corp',
        'description' => 'En 1918 apparaît la marque Petit Bateau, ainsi créée en référence aux tranchées de Verdun, souvent inondées. 
                Cette boucherie industrielle était la première à présenter des culottes sans jarrets. À cette époque, bœufs, génisses et veaux se voyaient découpés et cuisinés sous forme de caleçons longs comprenant les jarrets, cuisses et fesses.
                Ici vous n\'avez pas une culotte Petit Bateau mais elle est pas mal quand même !',
        'size' => 'Disponible du 36 au 56',
        'composition' => '100% laine de yack BIO',
        'image' => "images/culotte_ab.png",
        'modal' => 7],

    8 => [
        'price' => '85€',
        'title' => 'Grenouillère',
        'description' => 'Vous allez avoir un bébé ? Vous n’avez pas d’idée pour le choix de la tenue qu\'il va souiller jour et nuit ? N’hésitez plus !',
        'size' => 'Disponible du 36 au 56',
        'composition' => '100% laine de yack BIO',
        'image' => "images/grenouillère_ab.png",
        'modal' => 8],

    9 => [
        'price' => '30€',
        'title' => 'Casquette pixel art',
        'description' => 'La vie au Mozambique est plutôt tranquille, il se passe pas grand\'chose...Faut dire qu\'ils ont pas la TV, hein. Si, ils ont bien quelques concerts, mais pas des grandes vedettes: Jean-Pierre Sauzer, 
                 Joseph Garin, Elton John... Les inventions? Ben, la casquette a été inventée au Mozambique par Félix Casquette...
                La TV aussi...Non, pas la TV, j\'ai dit qu\'ils avaient pas la TV. J\'vois pas alors...Je continue? ',
        'size' => 'Taille unique',
        'composition' => '100% laine de yack BIO',
        'image' => "images/casquette_gui-min.png",
        'modal' => 9],

    10 => [
        'price' => '85€',
        'title' => 'Grenouillère pixel art',
        'description' => 'Vous allez avoir un bébé ? Vous n’avez pas d’idée pour le choix de la tenue qu\'il va souiller jour et nuit ? N’hésitez plus !',
        'size' => 'Disponible du 36 au 56',
        'composition' => '100% laine de yack BIO',
        'image' => "images/grenouillère_gui.png",
        'modal' => 10],

    11 => [
        'price' => '30€',
        'title' => 'T-shirt pixel art',
        'description' => 'De nombreuses personnes veulent affirmer leurs idées, leur appartenance à un groupe ou à une idéologie, et portent pour ce faire des vêtements à message. ',
        'size' => 'Disponible du 36 au 56',
        'composition' => '100% laine de yack BIO',
        'image' => "images/tee-shirt_gui.png",
        'modal' => 11],

    12 => [
        'price' => '60€',
        'title' => 'Sweat Absurd Corp',
        'description' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500',
        'size' => 'Disponible du 36 au 56',
        'composition' => '100% laine de yack BIO',
        'image' => "images/pull_ab.png",
        'modal' => 12],

];

?>

<!--Cards -->

<section class="cardsection">
    <div class="container">
        <div class="row justify-content-between">


        <?php

foreach ($product as $key => $value) {
    include 'cardTextiles.php';
}

?>

        </div>
    </div>
</section>
<!-- end card -->









<?php

include 'footer.php';

?>

<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>




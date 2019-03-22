<?php

$products = [
    1 => ['title' => 'Gamelle Absurd Corp', 'price' => 8.99, 'colors' => 'Coloris : Blanc , Rouge , Bleu , Vert', 'size' => '15cm', 'madein' => 'Fabriqué en France', 'modal' => 1, 'picture' => 'images/bol_animaux_ab-min.png'],
    2 => ['title' => 'Gamelle Guitare', 'price' => 8.99, 'colors' => 'Coloris : Blanc , Rouge , Bleu , Vert', 'size' => '15cm', 'madein' => 'Fabriqué en France', 'modal' => 2, 'picture' => 'images/bol_animaux_gui-min.png'],
    3 => ['title' => 'Arbre à chat Absurd Corp', 'price' => 44.99, 'colors' => 'Coloris : Beige , Gris , Marron.', 'madein' => 'Fabriqué en France', 'size' => 'Dimensions : Hauteur : 120cm Largeur : 35cm', 'picture' => 'images/cat_tree_ab.png' , 'modal' => 3,],
    4 => ['title' => 'Arbre à chat Guitare', 'price' => 44.99, 'colors' => 'Coloris : Beige , Gris , Marron.', 'madein' => 'Fabriqué en France', 'size' => 'Dimensions : Hauteur : 120cm Largeur : 35cm', 'picture' => 'images/cat_tree_gui.png', 'modal' => 4,],
    5 => ['title' => 'Pull pour chat logo Guitare', 'price' => 9.99, 'colors' => 'Coloris : Rouge , Jaune , Bleu , Vert , Noir , Gris , Blanc.', 'madein' => 'Fabriqué en France', 'size' => 'Taille : Taille Unique.', 'picture' => 'images/chat-min.png', 'modal' => 5],
    6 => ['title' => 'Pull pour chat Absurd Corp', 'price' => 9.99, 'colors' => 'Coloris : Rouge , Jaune , Bleu , Vert , Noir , Gris , Blanc.', 'madein' => 'Fabriqué en France', 'size' => 'Taille : Taille Unique.', 'picture' => 'images/chqt_qb-min.png', 'modal' => 6,],
    7 => ['title' => 'Doudoune pour chien Absurd Corp', 'price' => 9.99, 'colors' => 'Coloris : Rouge , Jaune , Bleu , Vert , Noir , Gris , Blanc.', 'madein' => 'Fabriqué en France', 'size' => 'Taille : Taille Unique.', 'picture' => 'images/doudoune_chien_ab.png', 'modal' => 7,],
    8 => ['title' => 'Doudoune pour chien Guitare', 'price' => 9.99, 'colors' => 'Coloris : Rouge , Jaune , Bleu , Vert , Noir , Gris , Blanc.', 'madein' => 'Fabriqué en France', 'size' => 'Taille : Taille Unique.', 'picture' => 'images/doudoune_chien.png', 'modal' => 8,],
    9 => ['title' =>'Fauteuil chat Absurd Corp', 'price' => 14.99, 'colors' => 'Coloris : Blanc , Noir.', 'madein' => 'Fabriqué en France', 'size' => 'Dimensions : Largeur : 40cm', 'picture' => 'images/fauteuil_chat_ab.png', 'modal' => 9,],
    10 => ['title' => 'Fauteuil pour chat Guitare', 'price' => 14.99, 'colors' => 'Coloris : Bleu , Rose , Blanc , Noir.', 'madein' => 'Fabriqué en France', 'size' => 'Dimensions : 30x60', 'picture' => 'images/fauteuil_chat_gui.png', 'modal' => 10,],
    11 => ['title' => 'Litière Absurd Corp', 'price' => 8.99, 'colors' => 'Coloris : Bleu , Rose , Blanc , Noir.', 'madein' => 'Fabriqué en France', 'size' => 'Dimensions : 30x60', 'picture' => 'images/litière_chat_ab.png', 'modal' => 11,],
    12 => ['title' => 'Litière Guitare', 'price' => 8.99, 'colors' => 'Coloris : Bleu , Rose , Blanc , Noir.', 'madein' => 'Fabriqué en France', 'size' => 'Dimensions : 30x60', 'picture' => 'images/litière_chat_gui.png', 'modal' => 12,]

]

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wild Bazar - Animalerie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css_page_animaux3.css">
</head>
<body>
<header>
    <?php
        include 'header.php';
    ?>
    <h2 class="title-banner col-12"><span class="s1">A</span>nimaleri<span class="s1">e</span></h2>
    <div class="row justify-content-center">
        <p class="title-desc-banner col-12">Parce que votre ami à quatre pattes a aussi le droit d'avoir du style. Votre style.</p>
        <a href="addproduct_petshop.php"><button type="submit" class="btn btn1"> + ADD NEW</button></a>
    </div>
    <img src="images/cover-animalerie.jpeg" class="img-cover" alt="Photo de couverture Wild Bazar Animalerie">
</header>
<section class="container">
    <div class="row justify-content-around">
        <?php
        foreach ($products as $key => $value) {
            include "articles_animaux.php";
        }
        ?>
    </div>
</section>
<?php
    include 'footer.php';
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>$('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })</script>
</body>
</html>
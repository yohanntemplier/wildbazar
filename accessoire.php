<?php

$products = [
    1 => ['title' => 'Portefeuille', 'price' => 30, 'colors' => 'Coloris : Blanc , Rouge , Bleu , Vert', 'size' => '15cm', 'madein' => 'Fabriqué en France', 'modal' => 1, 'picture' => 'https://fr.louisvuitton.com/images/is/image/lv/1/PP_VP_AS/louis-vuitton--M63512_PM2_Front%20view.jpg?wid=256&hei=256', 'modal' =>1],
    2 => ['title' => 'Porte-Clé', 'price' => 2.99, 'colors' => 'Coloris : Blanc , Rouge , Bleu , Vert', 'size' => '15cm', 'madein' => 'Fabriqué en France', 'modal' => 2, 'picture' => "https://www.pascogifts.com/files/cache/square/files/flex-sleutelhangers-bedrukken-57b5a05f91696.jpg", 'modal'=> 2],
    3 => ['title' => 'Cadre', 'price' => 49.99, 'colors' => 'Coloris : Beige , Gris , Marron.', 'madein' => 'Fabriqué en France', 'size' => 'Dimensions : Hauteur : 120cm Largeur : 35cm', 'picture' => "https://www.destock-cadre.com/index.php?controller=configurateur&ajax=true&action=cadre&id_product=130001475&id_category=12&width=19&height=19&largeur=3.3&service=isorel" , 'modal' => 3,],
    4 => ['title' => 'Bougie', 'price' => 4.99, 'colors' => 'Coloris : Beige , Gris , Marron.', 'madein' => 'Fabriqué en France', 'size' => 'Dimensions : Hauteur : 120cm Largeur : 35cm', 'picture' => "https://fr.seaicons.com/wp-content/uploads/2016/03/Water-Candle-icon.png", 'modal' => 4,],
    5 => ['title' => 'Horloge', 'price' => 39.99, 'colors' => 'Coloris : Rouge , Jaune , Bleu , Vert , Noir , Gris , Blanc.', 'madein' => 'Fabriqué en France', 'size' => 'Taille : Taille Unique.', 'picture' => "https://fr.seaicons.com/wp-content/uploads/2015/07/clock-icon.png", 'modal' => 5],
    6 => ['title' => 'Fatboy', 'price' => 399.99, 'colors' => 'Coloris : Rouge , Jaune , Bleu , Vert , Noir , Gris , Blanc.', 'madein' => 'Fabriqué en France', 'size' => 'Taille : Taille Unique.', 'picture' => "https://www.ahlens.se/INTERSHOP/static/WFS/Ahlens-AhlensSE-Site/-/Ahlens/sv_SE/ProductList/06APDNLR0Y_8718164872730_Front.jpg", 'modal' => 6,],
    7 => ['title' => 'Dessous de Verre', 'price' => 3.99, 'colors' => 'Coloris : Rouge , Jaune , Bleu , Vert , Noir , Gris , Blanc.', 'madein' => 'Fabriqué en France', 'size' => 'Taille : Taille Unique.', 'picture' => "https://www.pascogifts.com/files/cache/square/files/21060900-e2-5c3c81d026b5d.jpg", 'modal' => 7,],
    8 => ['title' => 'Vase', 'price' => 19.99, 'colors' => 'Coloris : Rouge , Jaune , Bleu , Vert , Noir , Gris , Blanc.', 'madein' => 'Fabriqué en France', 'size' => 'Taille : Taille Unique.', 'picture' => "https://www.voltex.fr/media/catalog/product/cache/45/base/256x256/9df78eab33525d08d6e5fb8d27136e95/h/o/holly-all-1.jpg", 'modal' => 8,],
    9 => ['title' =>'Décaplusleur', 'price' => 1.99, 'colors' => 'Coloris : Blanc , Noir.', 'madein' => 'Fabriqué en France', 'size' => 'Dimensions : Largeur : 40cm', 'picture' => "https://static.hanos.com/sys-master/productimages/he6/hfd/9072729096222/623.77597.jpg_256Wx256H", 'modal' => 9,],
    10 => ['title' => 'Etuit téléphone', 'price' => 14.99, 'colors' => 'Coloris : Bleu , Rose , Blanc , Noir.', 'madein' => 'Fabriqué en France', 'size' => 'Dimensions : 30x60', 'picture' => "https://media.cdnws.com/_i/45353/1030/233/30/accessoire-tablette-tactile-etui-targus-thz181ue-7-pouces-infinytech-reunion-3.jpeg", 'modal' => 10,],

]
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wild Bazar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<?php
include 'header.php';
?>

<div class="jumbotron jumbotron-fluid bg-light">
    <div class="container">
        <h1 class="display-8"><span class="s1">W</span>ild <span class="s1">B</span>azar</h1>
        <p class="lead">On y trouve de tout et surtout du n'importe quoi .</p>
        <p class="lead">
            <a class="btn2" href="#" role="button">Learn more</a>
        </p>
    </div>
</div>
<section class="container">
    <div class="row justify-content-around">
        <?php
        foreach ($products as $key => $value) {
            include "modal_accessoire.php";
        }
        ?>
    </div>
</section>
<?php
include 'footer.php';
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>

<?php

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
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="affichage_prix">
                <div class="card" style="width: 18rem;" data-toggle="modal" data-target="#modal-generique"
                     data-img="https://fr.louisvuitton.com/images/is/image/lv/1/PP_VP_AS/louis-vuitton--M63512_PM2_Front%20view.jpg?wid=256&hei=256"
                     data-title="Portefeuille."
                     data-desc="Portefeuille ayant des compartiments transparents pour cartes de visite, papiers d'identité.">
                    <img src="https://fr.louisvuitton.com/images/is/image/lv/1/PP_VP_AS/louis-vuitton--M63512_PM2_Front%20view.jpg?wid=256&hei=256"
                         class="card-img-top mt-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">100€</h5>
                        <p class="card-text">Portefeuille.</p>
                        <a href="#" class="btn2">Détail</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm">
            <div class="affichage_prix">
                <div class="card" style="width: 18rem;" data-toggle="modal" data-target="#modal-generique"
                     data-img="https://www.pascogifts.com/files/cache/square/files/flex-sleutelhangers-bedrukken-57b5a05f91696.jpg"
                     data-title="Porte-clé."
                     data-desc="Pièce métallique qui porte, à une extrémité, le panneton ou des encoches pour actionner le pêne de la serrure et, à l'autre extrémité, un anneau ou une tête pour permettre la manœuvre.">
                    <img src="https://www.pascogifts.com/files/cache/square/files/flex-sleutelhangers-bedrukken-57b5a05f91696.jpg"
                         class="card-img-top mt-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">10€</h5>
                        <p class="card-text">Porte-clé.</p>
                        <a href="#" class="btn2">Détail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="affichage_prix">
                <div class="card" style="width: 18rem;" data-toggle="modal" data-target="#modal-generique"
                     data-img="https://www.destock-cadre.com/index.php?controller=configurateur&ajax=true&action=cadre&id_product=130001475&id_category=12&width=19&height=19&largeur=3.3&service=isorel"
                     data-title="Cadre."
                     data-desc="Bordure rigide limitant une surface dans laquelle on place un tableau, un objet d'art, etc. : Le cadre d'un miroir.">
                    <img src="https://www.destock-cadre.com/index.php?controller=configurateur&ajax=true&action=cadre&id_product=130001475&id_category=12&width=19&height=19&largeur=3.3&service=isorel"
                         class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">30€</h5>
                        <p class="card-text">Cadre.</p>
                        <a href="#" class="btn2">Détail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="affichage_prix">
                <div class="card" style="width: 18rem;" data-toggle="modal" data-target="#modal-generique"
                     data-img="https://fr.seaicons.com/wp-content/uploads/2016/03/Water-Candle-icon.png"
                     data-title="Bougie."
                     data-desc="Bâtonnet en cire, en acide stéarique ou en paraffine entourant une mèche, et dont la combustion fournit une flamme éclairante.">
                    <img src="https://fr.seaicons.com/wp-content/uploads/2016/03/Water-Candle-icon.png"
                         class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">5€</h5>
                        <p class="card-text">Bougie.</p>
                        <a href="#" class="btn2">Détail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="affichage_prix">
                <div class="card" style="width: 18rem;" data-toggle="modal" data-target="#modal-generique"
                     data-img="https://fr.seaicons.com/wp-content/uploads/2015/07/clock-icon.png"
                     data-title="Horloge."
                     data-desc=" Appareil horaire fixe, de grandes dimensions, possédant un dispositif d'indication de l'heure sur un cadran, et souvent un dispositif de sonnerie des heures et des demi-heures">
                    <img src="https://fr.seaicons.com/wp-content/uploads/2015/07/clock-icon.png"
                         class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">100€</h5>
                        <p class="card-text">Horloge.</p>
                        <a href="#" class="btn2">Détail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="affichage_prix">
                <div class="card" style="width: 18rem;" data-toggle="modal" data-target="#modal-generique"
                     data-img="https://www.ahlens.se/INTERSHOP/static/WFS/Ahlens-AhlensSE-Site/-/Ahlens/sv_SE/ProductList/06APDNLR0Y_8718164872730_Front.jpg"
                     data-title="Fatboy."
                     data-desc="Coussin épais, plus haut que large, servant de siège.">
                    <img src="https://www.ahlens.se/INTERSHOP/static/WFS/Ahlens-AhlensSE-Site/-/Ahlens/sv_SE/ProductList/06APDNLR0Y_8718164872730_Front.jpg"
                         class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">300€</h5>
                        <p class="card-text">Fatboy.</p>
                        <a href="#" class="btn2">Détail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="affichage_prix">
                <div class="card" style="width: 18rem;" data-toggle="modal" data-target="#modal-generique"
                     data-img="https://www.pascogifts.com/files/cache/square/files/21060900-e2-5c3c81d026b5d.jpg"
                     data-title="Dessous de verre."
                     data-desc="Rond en carton, papier.">
                    <img src="https://www.pascogifts.com/files/cache/square/files/21060900-e2-5c3c81d026b5d.jpg"
                         class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">5€</h5>
                        <p class="card-text">Dessous de verre.</p>
                        <a href="#" class="btn2">Détail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="affichage_prix">
                <div class="card" style="width: 18rem;" data-toggle="modal" data-target="#modal-generique"
                     data-img="https://www.voltex.fr/media/catalog/product/cache/45/base/256x256/9df78eab33525d08d6e5fb8d27136e95/h/o/holly-all-1.jpg"
                     data-title="Vase."
                     data-desc="Vase de couleur blanc">
                    <img src="https://www.voltex.fr/media/catalog/product/cache/45/base/256x256/9df78eab33525d08d6e5fb8d27136e95/h/o/holly-all-1.jpg"
                         class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">100€</h5>
                        <p class="card-text">Vase.</p>
                        <a href="#" class="btn2">Détail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="affichage_prix">
                <div class="card" style="width: 18rem;" data-toggle="modal" data-target="#modal-generique"
                     data-img="https://static.hanos.com/sys-master/productimages/he6/hfd/9072729096222/623.77597.jpg_256Wx256H"
                     data-title="Decapsuleur."
                     data-desc="permet de Décapsuler une bierre">
                    <img src="https://static.hanos.com/sys-master/productimages/he6/hfd/9072729096222/623.77597.jpg_256Wx256H"
                         class="card-img-top" alt="..."/>
                    <div class="card-body">
                        <h5>5€</h5>
                        <p class="card-text">Décapsuleur.</p>
                        <a href="#" class="btn2">Détail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="affichage_prix">
                <div class="card" style="width: 18rem;" data-toggle="modal" data-target="#modal-generique"
                     data-img="https://media.cdnws.com/_i/45353/1030/233/30/accessoire-tablette-tactile-etui-targus-thz181ue-7-pouces-infinytech-reunion-3.jpeg"
                     data-title="Etuit téléphone."
                     data-desc="Permet de ranger et de protéger son téléphone">
                    <img src="https://media.cdnws.com/_i/45353/1030/233/30/accessoire-tablette-tactile-etui-targus-thz181ue-7-pouces-infinytech-reunion-3.jpeg"
                         class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">5€</h5>
                        <p class="card-text">Etuit téléphone.</p>
                        <a href="#" class="btn2">Détail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="affichage_prix">
                <div class="card" style="width: 18rem;" data-toggle="modal" data-target="#modal-generique"
                     data-img="https://media.cdnws.com/_i/45353/1030/233/30/accessoire-tablette-tactile-etui-targus-thz181ue-7-pouces-infinytech-reunion-3.jpeg"
                     data-title="Etuit téléphone."
                     data-desc="Permet de ranger et de protéger son téléphone">
                    <img src="https://media.cdnws.com/_i/45353/1030/233/30/accessoire-tablette-tactile-etui-targus-thz181ue-7-pouces-infinytech-reunion-3.jpeg"
                         class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">5€</h5>
                        <p class="card-text">Etuit téléphone.</p>
                        <a href="#" class="btn2">Détail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="affichage_prix">
                <div class="card" style="width: 18rem;" data-toggle="modal" data-target="#modal-generique"
                     data-img="https://static.hanos.com/sys-master/productimages/he6/hfd/9072729096222/623.77597.jpg_256Wx256H"
                     data-title="Décapsuleur"
                     meta-prix="300€"
                     data-desc="...">
                    <img src="https://static.hanos.com/sys-master/productimages/he6/hfd/9072729096222/623.77597.jpg_256Wx256H"
                         class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">300€</h5>
                        <p class="card-text">Décapsuleur</p>
                        <a href="#" class="btn2">Détail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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

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
    <h2 class="title col"><span>A</span>nimalerie</h2>
    <div class="row justify-content-center">
        <p class="title-desc col-12">Parce que votre ami nos amis à quatre pattes ont aussi le droit d'avoir du style. Votre style.</p>
        <button type="button" class="btn btn1">+ ADD NEW</button>
    </div>
    <img src="images/cover-animalerie.jpeg" class="img-cover" alt="Photo de couverture Wild Bazar Animalerie">
</header>
<section class="container">
    <div class="row justify-content-between">
        <div class="col-lg-3 col-md-4 col-sm-8 card settings_card">
            <img src="images/bol_animaux_ab-min.png" class="card-img-top card-ts" alt="Photo d'une gamelle pour animaux Absurd Corp">
            <p class="price badge-secondary">8.99&euro;</p>
            <div class="card-body">
                <h5 class="card-title card_title_ts">Gamelle Absurd Corp</h5>
                <button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-1">En savoir plus</button>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-ts-1" tabindex="-1" role="dialog" aria-labelledby="modal-ts-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Gamelle pour animaux Absurd Corp</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <img src="images/bol_animaux_ab-min.png" class="card-img-top col-lg-6 col-md-12" alt="Photo d'une gamelle pour animaux Absurd Corp">
                            <p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts">8.99&euro;</span> <br></p>
                        </div>
                        <p class="carac-modal">Caracteristiques</p>
                        <ul>
                            <li>Coloris : Blanc , Rouge , Bleu , Vert</li>
                            <li>Composition : Céramique , Inox</li>
                            <li>Poids : 750g</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-8 card settings_card">
            <img src="images/bol_animaux_gui-min.png" class="card-img-top card-ts" alt="Photo d'une gamelle pour animaux Guitare">
            <p class="price badge-secondary">19.99&euro;</p>
            <div class="card-body">
                <h5 class="card-title card_title_ts">Gamelle Guitare</h5>
                <button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-2">En savoir plus</button>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-ts-2" tabindex="-1" role="dialog" aria-labelledby="modal-ts-2" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Gamelle pour animaux Guitare</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <img src="images/bol_animaux_gui-min.png" class="card-img-top col-lg-6 col-md-12" alt="Photo de coussin Absurd Corp">
                            <p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts">14.99&euro;</span> <br></p>
                        </div>
                        <p class="carac-modal">Caracteristiques</p>
                        <ul>
                            <li>Coloris : Blanc , Rouge , Bleu , Vert</li>
                            <li>Composition : Céramique , Inox</li>
                            <li>Poids : 750g</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-8 card settings_card">
            <img src="images/cat_tree_ab.png" class="card-img-top card-ts" alt="Photo d'arbre à chat Absurd Corp">
            <p class="price badge-secondary">44.99&euro;</p>
            <div class="card-body">
                <h5 class="card-title card_title_ts">Arbre à chat Absurd Corp</h5>
                <button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-3">En savoir plus</button>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-ts-3" tabindex="-1" role="dialog" aria-labelledby="modal-ts-3" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Coussin Absurd Corp</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <img src="images/cat_tree_ab.png" class="card-img-top col-lg-6 col-md-12" alt="Photo d'arbre à chat Absurd Corp">
                            <p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts">44.99&euro;</span> <br></p>
                        </div>
                        <p class="carac-modal">Caracteristiques</p>
                        <ul>
                            <li>Coloris : Beige , Gris , Marron.</li>
                            <li>Poids : 15kg</li>
                            <li>Dimensions : Hauteur : 120cm Largeur : 35cm</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-lg-3 col-md-4 col-sm-8 card settings_card">
            <img src="images/cat_tree_gui.png" class="card-img-top card-ts" alt="Image d'arbre à chat Guitare">
            <p class="price badge-secondary">44.99&euro;</p>
            <div class="card-body">
                <h5 class="card-title card_title_ts">Arbre à chat Guitare</h5>
                <button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-4">En savoir plus</button>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-ts-4" tabindex="-1" role="dialog" aria-labelledby="modal-ts-4" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Arbre à chat Guitare</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <img src="images/cat_tree_gui.png" class="card-img-top col-lg-6 col-md-12" alt="Image d'arbre à chat Guitare">
                            <p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts">44.99&euro;</span> <br></p>
                        </div>
                        <p class="carac-modal">Caracteristiques</p>
                        <ul>
                            <li>Coloris : Beige , Gris , Marron.</li>
                            <li>Poids : 15kg</li>
                            <li>Dimensions : Hauteur : 120cm Largeur : 35cm</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-8 card settings_card">
            <img src="images/chat-min.png" class="card-img-top card-ts" alt="Photo de pull pour chat guitare">
            <p class="price badge-secondary">9.99&euro;</p>
            <div class="card-body">
                <h5 class="card-title card_title_ts">Pull pour chat logo Guitare</h5>
                <button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-5">En savoir plus</button>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-ts-5" tabindex="-1" role="dialog" aria-labelledby="modal-ts-5" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Pull pour chat logo Guitare</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <img src="images/chat-min.png" class="card-img-top col-lg-6 col-md-12" alt="Photo de pull pour chat guitare">
                            <p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts">9.99&euro;</span> <br></p>
                        </div>
                        <p class="carac-modal">Caracteristiques</p>
                        <ul>
                            <li>Coloris : Rouge , Jaune , Bleu , Vert , Noir , Gris , Blanc.</li>
                            <li>Composition : 100% polyester</li>
                            <li>Taille : Taille Unique.</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-8 card settings_card">
            <img src="images/chqt_qb-min.png" class="card-img-top card-ts" alt="Pull pour chat Absurd Corp">
            <p class="price badge-secondary">9.99&euro;</p>
            <div class="card-body">
                <h5 class="card-title card_title_ts">Pull pour chat Absurd Corp</h5>
                <button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-6">En savoir plus</button>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-ts-6" tabindex="-1" role="dialog" aria-labelledby="modal-ts-6" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Pull pour chat Absurd Corp</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <img src="images/chqt_qb-min.png" class="card-img-top col-lg-6 col-md-12" alt="Pull pour chat Absurd Corp">
                            <p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts">9.99&euro;</span> <br></p>
                        </div>
                        <p class="carac-modal">Caracteristiques</p>
                        <ul>
                            <li>Coloris : Rouge , Jaune , Bleu , Vert , Noir , Gris , Blanc.</li>
                            <li>Composition : 100% polyester</li>
                            <li>Taille : Taille Unique.</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-lg-3 col-md-4 col-sm-8 card settings_card">
            <img src="images/doudoune_chien_ab.png" class="card-img-top card-ts" alt="Doudoune pour chien Absurd Corp">
            <p class="price badge-secondary">9.99&euro;</p>
            <div class="card-body">
                <h5 class="card-title card_title_ts">Doudoune chien Absurd Corp</h5>
                <button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-7">En savoir plus</button>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-ts-7" tabindex="-1" role="dialog" aria-labelledby="modal-ts-7" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Doudoune chien Absurd Corp</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <img src="images/doudoune_chien_ab.png" class="card-img-top col-lg-6 col-md-12" alt="Doudoune pour chien Absurd Corp">
                            <p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts">9.99&euro;</span> <br></p>
                        </div>
                        <p class="carac-modal">Caracteristiques</p>
                        <ul>
                            <li>Coloris : Rouge , Jaune , Bleu , Vert , Noir , Gris , Blanc.</li>
                            <li>Composition : 100% polyester</li>
                            <li>Taille : Taille Unique.</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-8 card settings_card">
            <img src="images/doudoune_chien.png" class="card-img-top card-ts" alt="Doudoune chien Guitare">
            <p class="price badge-secondary">9.99&euro;</p>
            <div class="card-body">
                <h5 class="card-title card_title_ts">Doudoune chien Guitare</h5>
                <button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-8">En savoir plus</button>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-ts-8" tabindex="-1" role="dialog" aria-labelledby="modal-ts-8" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Doudoune chien Guitare</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <img src="images/doudoune_chien.png" class="card-img-top col-lg-6 col-md-12" alt="Doudoune chien Guitare">
                            <p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts">9.99&euro;</span> <br></p>
                        </div>
                        <p class="carac-modal">Caracteristiques</p>
                        <ul>
                            <li>Coloris : Rouge , Jaune , Bleu , Vert , Noir , Gris , Blanc.</li>
                            <li>Composition : 100% polyester</li>
                            <li>Taille : Taille Unique.</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-8 card settings_card">
            <img src="images/fauteuil_chat_ab.png" class="card-img-top card-ts" alt="Fauteuil pour chat Absurd Corp">
            <p class="price badge-secondary">19.99&euro;</p>
            <div class="card-body">
                <h5 class="card-title card_title_ts">Fauteuil chat Absurd Corp</h5>
                <button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-9">En savoir plus</button>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-ts-9" tabindex="-1" role="dialog" aria-labelledby="modal-ts-9" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Fauteuil chat Absurd Corp</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <img src="images/fauteuil_chat_ab.png" class="card-img-top col-lg-6 col-md-12" alt="Fauteuil pour chat Absurd Corp">
                            <p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts">14.99&euro;</span> <br></p>
                        </div>
                        <p class="carac-modal">Caracteristiques</p>
                        <ul>
                            <li>Coloris : Blanc , Noir.</li>
                            <li>Poids : 3g</li>
                            <li>Dimensions : Largeur : 40cm</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-lg-3 col-md-4 col-sm-8 card settings_card">
            <img src="images/fauteuil_chat_gui.png" class="card-img-top card-ts" alt="Fauteuil chat Guitare">
            <p class="price badge-secondary">19.99&euro;</p>
            <div class="card-body">
                <h5 class="card-title card_title_ts">Fauteuil pour chat Guitare</h5>
                <button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-10">En savoir plus</button>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-ts-10" tabindex="-1" role="dialog" aria-labelledby="modal-ts-10" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Fauteuil pour chat Guitare</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <img src="/home/wilder9/Documents/projet1/coussin-ab.png" class="card-img-top col-lg-6 col-md-12" alt="Fauteuil chat Guitare">
                            <p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts">14.99&euro;</span> <br></p>
                        </div>
                        <p class="carac-modal">Caracteristiques</p>
                        <ul>
                            <li>Coloris : Blanc , Noir.</li>
                            <li>Poids : 3g</li>
                            <li>Dimensions : Largeur : 40cm</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-8 card settings_card">
            <img src="images/litière_chat_ab.png" class="card-img-top card-ts" alt="Litière chat Absurd Corp">
            <p class="price badge-secondary">8.99&euro;</p>
            <div class="card-body">
                <h5 class="card-title card_title_ts">Litière pour chat Absurd Corp</h5>
                <button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-11">En savoir plus</button>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-ts-11" tabindex="-1" role="dialog" aria-labelledby="modal-ts-11" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Litière pour chat Absurd Corp</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <img src="images/litière_chat_ab.png" class="card-img-top col-lg-6 col-md-12" alt="Litière chat Absurd Corp">
                            <p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts">14.99&euro;</span> <br></p>
                        </div>
                        <p class="carac-modal">Caracteristiques</p>
                        <ul>
                            <li>Coloris : Bleu , Rose , Blanc , Noir.</li>
                            <li>Composition : 100% plastique</li>
                            <li>Poids : 550g</li>
                            <li>Dimensions : 30x60</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-8 card settings_card">
            <img src="images/litière_chat_gui.png" class="card-img-top card-ts" alt="Litière chat Guitare">
            <p class="price badge-secondary">8.99&euro;</p>
            <div class="card-body">
                <h5 class="card-title card_title_ts">Litière pour chat Guitare</h5>
                <button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-12">En savoir plus</button>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="modal-ts-12" tabindex="-1" role="dialog" aria-labelledby="modal-ts-12" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Litière pour chat Guitare</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <img src="/home/wilder9/Documents/projet1/coussin-ab.png" class="card-img-top col-lg-6 col-md-12" alt="Litière chat Guitare">
                            <p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts">8.99&euro;</span> <br></p>
                        </div>
                        <p class="carac-modal">Caracteristiques</p>
                        <ul>
                            <li>Coloris : Bleu , Rose , Blanc , Noir.</li>
                            <li>Composition : 100% plastique</li>
                            <li>Poids : 550g</li>
                            <li>Dimensions : 30x60</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
                    </div>
                </div>
            </div>
        </div>
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
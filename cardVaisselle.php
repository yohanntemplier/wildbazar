<?php
 $products = [
		 0 => ['title' => 'Assiette motif Absurd Corp', 'price' => '20', 'images' => 'images/assiette_AB-min.png', 'desc' => 'L\'assiette pleine cache une assiette vide, comme l\'être cache le néant.', 'carac' => '91,5 coloris disponibles, allant du bleu macramé au rou.', 'modal' => 0],
		 1 => ['title' => 'Assiette motif guitare','price' => '15', 'images' => 'images/assiette_gui-min.png', 'desc' => 'Plus la part de gâteau est belle, plus elle a de chance de tomber de travers dans l\'assiette au moment de la servir.', 'carac' => '91,5cm de large, de quoi nourrir une tablée !', 'modal' => 1],
		 2 => ['title' => 'Bouteille Absurd Corp','price' => '7', 'images' => 'images/bouteille_ab-min.png', 'desc' => 'Il y a plus de philosophie dans une bouteille de vin que dans tous les livres.', 'carac' => 'Contenance : 1.03 litres', 'modal' => 2],
		 3 => ['title' => 'Bouteille guitare','price' => '3', 'images' => 'images/bouteille_gui-min.png', 'desc' => 'Une amitié fragile est pareille à une bouteille en verre, si elle tombe, elle part en éclats.', 'carac' => 'Hauteur : 20cm', 'modal' => 3],
		 4 => ['title' => 'Cuillère motif Absurd Corp','price' => '3', 'images' => 'images/coillere_ab-min.png', 'desc' => 'Il y a des jours où, pour juste se laisser vivre, il faut ramasser son courage à la petite cuillère.', 'carac' => 'Hauteur : 30cm', 'modal' => 4],
		 5 => ['title' => 'Cuillère motif guitare' ,'price' => '1', 'images' => 'images/coillere_gui-min.png', 'desc' => 'Mieux vaut pas de cuillère que pas de soupe.', 'carac' => 'Permet de découper trois poulets d\'un coup', 'modal' => 5],
		 6 => ['title' => 'Couteau motif Absurd Corp','price' => '3', 'images' => 'images/coutal_ab.png', 'desc' => 'La mère est celle qui prend le couteau par la lame.', 'carac' => 'Vous pouvez aussi vous en servir pour tartiner.', 'modal' => 6],
		 7 => ['title' => 'Couteau motif guitare','price' => '1', 'images' => 'images/coutal_gui.png', 'desc' => 'Le méchant remue le couteau dans la plaie, la brute y plante en plus la fourchette.', 'carac' => 'Peut servir d\'arme', 'modal' => 7],
		 8 => ['title' => 'Fourchette motif Absurd Corp','price' => '3', 'images' => 'images/fourchette_ab.png', 'desc' => 'La fourchette tue plus de monde que l\'épée.', 'carac' => 'C\'est la fourche du démon !', 'modal' => 8],
		 9 => ['title' => 'Fourchette motif guitare','price' => '1', 'images' => 'images/fourchette_gui.png', 'desc' => 'Il vaut mieux creuser sa tombe avec sa fourchette qu\'avec une pelle. C\'est plus agréable et c\'est plus long.', 'carac' => 'Permet d\'engouffrer des entrecôtes dans sa bouche.', 'modal' => 9],
		 10 => ['title' => 'Verre motif Absurd Corp','price' => '5', 'images' => 'images/verre_ab.png', 'desc' => 'La vie est un verre que l\'on remplit par des occupations.', 'carac' => 'Contenance : 50cL', 'modal' => 10],
		 11 => ['title' => 'Verre motif guitare','price' => '3', 'images' => 'images/verre_gui-min.png', 'desc' => 'Un homme se doit de croire en quelque chose... Moi, je crois que je vais boire un autre verre !', 'carac' => 'Malheureusement non, il ne fait pas de musique.', 'modal' => 11],
 ];
 foreach ($products as $product):
 ?>

<div class="col-lg-4 col-sm-6 col-md-5">
    <div class="card">
        <img src="<?php echo $product['images'];?>" class="card-img-top img-thumbnail" alt="<?php echo $product['title'];?>">
        <div class="top-right badge-pill badge-secondary"><?php echo $product['price'];?>€</div>
        <div class="card-body">
            <p class="card-title"><?php echo $product['title'];?></p>
            <!-- Button trigger modal -->
            <button type="button" class="btn" data-toggle="modal" data-target="#modal<?php echo $product['modal']?>">
                En savoir plus
            </button>
            <!-- Modal -->
            <div class="modal fade" id="modal<?php echo $product['modal']?>" tabindex="-1" role="dialog" aria-labelledby="modal<?php echo $product['modal']?>Label" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal<?php echo $product['modal']?>Label"><?php echo $product['title'];?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">
                            <div class="col-lg-6 col-md-12">
                                <img src="<?php echo $product['images'];?>" class="card-img-top" alt="<?= $product['title']?>" />
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p class="textmodal">
                                <span class="prix"><?php echo $product['price'];?>€</span><br><p><?php echo $product['desc'];?></p>
                            </div>
                        </div>
                        <div class="modal-footer flex-column ">
                            <h6>Caractéristiques :</h6>
                            <ul>
                                <li>><?php echo $product['carac'];?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
<?php endforeach;?>
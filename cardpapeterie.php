<?php
$listItem = [

        1 => [
            'title' => 'Classeur absud corp',
            'description' => 'Un classeur est un porte-documents qui permet de ranger des feuilles de papier de même taille. Il est aussi bien utilisé en tant que matériel scolaire que de matériel de bureau.',
            'price' => '15€',
            'picture' => "https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/classeur_ab-min.png",
            'modal' => 1],

        2 =>[ 'title' => 'Classeur guitare',
            'description' => 'Un classeur est un porte-documents qui permet de ranger des feuilles de papier de même taille. Il est aussi bien utilisé en tant que matériel scolaire que de matériel de bureau.',
            'price' => '10€',
            'picture' => "https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/classeur_gui-min.png",
            'modal' => 2],

        3 => ['title' => 'Stylo absurd corp',
            'description' => 'Le stylo est un instrument, généralement de forme allongée facilitant sa préhension, qui sert à écrire ou à dessiner.',
            'price' => '8€',
            'picture' => "https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/stylo_ab.png",
            'modal' => 3],

        4 => [
            'title' => 'Stylo guitare',
            'description' => 'Le stylo est un instrument, généralement de forme allongée facilitant sa préhension, qui sert à écrire ou à dessiner.',
            'price' => '6€',
            'picture' => "https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/stylo_gui.png",
            'modal' => 4],

        5 =>['title' => 'Trousse absurd corp',
            'description' => 'Une trousse à crayons est une trousse utilisée pour ranger des crayons, stylos et du matériel d\'écriture. On peut également se servir d\'une trousse à crayons pour ranger d\'autres articles de papeterie, tels taille-crayons, gomme, colle, effaceur, ciseaux, règle, etc.',
            'price' => '11€',
            'picture' => "https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/trousse_ab.png",
            'modal' => 5],

        6 => ['title' => 'Trousse guitare',
            'description' => 'Une trousse à crayons est une trousse utilisée pour ranger des crayons, stylos et du matériel d\'écriture. On peut également se servir d\'une trousse à crayons pour ranger d\'autres articles de papeterie, tels taille-crayons, gomme, colle, effaceur, ciseaux, règle, etc.',
            'price' => '9€',
            'picture' => "https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/trousse_gui.png",
            'modal' => 6],

        7 => [
            'title' => 'Agenda absurd corp',
            'description' => 'Un agenda est un outil permettant d\'associer des actions à des moments, et d\'organiser ainsi son temps. Il est utilisé afin de pouvoir donner à son utilisateur la possibilité de planifier, de noter son emploi du temps, ses rendez-vous, etc.',
            'price' => '14€',
            'picture' => "https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/art-artistic-blank-616849ab-min.png",
            'modal' => 7],

        8 =>[ 'title' => 'Agenda guitare',
            'description' => 'Un agenda est un outil permettant d\'associer des actions à des moments, et d\'organiser ainsi son temps. Il est utilisé afin de pouvoir donner à son utilisateur la possibilité de planifier, de noter son emploi du temps, ses rendez-vous, etc.',
            'price' => '12€',
            'picture' => "https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/art-artistic-blank-616849gui-min.png",
            'modal' => 8],

        9 => ['title' => 'Tapis de souris absurd',
            'description' => 'Petit tapis de bureau antidérapant pour améliorer l\'efficacité d\'utilisation et de précision des souris informatique à détection de mouvement mécanique à boule, ou infrarouge.',
            'price' => '4€',
            'picture' => "https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/tapis_de_souris%20ab.png",
            'modal' => 9],

        10 => [
            'title' => 'Tapis de souris guitare',
            'description' => 'Petit tapis de bureau antidérapant pour améliorer l\'efficacité d\'utilisation et de précision des souris informatique à détection de mouvement mécanique à boule, ou infrarouge.',
            'price' => '2€',
            'picture' => "https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/tapis_desouris_gui.png",
            'modal' => 10],

        11 =>[ 'title' => 'Corbeille absurd corp',
            'description' => 'Une corbeille à papier est un type de poubelle prévue pour recevoir les déchets d\'un bureau, particulièrement des papiers.',
            'price' => '7€',
            'picture' => "https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/carbeille_a_papier%20ab-min.png",
            'modal' => 11],

        12 => ['title' => 'Corbeille guitare',
            'description' => 'Une corbeille à papier est un type de poubelle prévue pour recevoir les déchets d\'un bureau, particulièrement des papiers.',
            'price' => '5€',
            'picture' => "https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/carbeille_a_papier%20gui-min.png",
            'modal' => 12],
]
?>

<div class="card col-lg-3 col-sm-5 col-md-4">

            <img src="<?php echo $listItem[$key]['picture'];?>" class="card-img-top img-thumbnail" alt="<?php echo $listItem[$key]['title'];?>">
                <div class="top-right badge-pill badge-secondary"><?php echo $listItem[$key]['price'];?></div>
                <div class="card-body col-lg-3">
                <p class="card-title"><?php echo $listItem[$key]['title'];?></p>

            <!-- Button trigger modal -->
                <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal<?php echo $listItem[$key]['modal']?>">
    En savoir plus
</button>

            <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $listItem[$key]['modal']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $listItem[$key]['title'];?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          						          <span aria-hidden="true">&times;</span>
        					              </button>
                                </div>
                                <div class="modal-body row">

                  		              <div class="col-lg-6 col-md-12">
                                    <img src="<?php echo $listItem[$key]['picture'];?>" class="card-img-top" alt="classeur" />
                		                </div>
                		                    <div class="col-lg-6 col-md-12">
                                        <p class="textmodal">

                                        <span class="prix"><?php echo $listItem[$key]['price'];?></span><br><p><?php echo $listItem[$key]['description'];?></p>

                                        </div>
                                    </div>
                                    <div class="modal-footer flex-column ">
                                    <h6>Caractéristiques :</h6>
                                    <ul>
                    	                 <li>- Différentes tailles et colories</li>
                    	                 <li>- 100% matière recyclable</li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

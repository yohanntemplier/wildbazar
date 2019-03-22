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
<body>
    <header>
<!-- Navbar -->
<?php
include 'header.php';
?>
<!-- Fin navbar -->
<!-- Jumbotron -->

  <div class="jumbotron d-flex align-items-center flex-column">
  	   <div class="fond shadow"></div>
        <h1 class="display-4"><span class="titre">P</span>apeteri<span class="titre">e</span></h1>

        <p class="lead">
        Pour donner du style à votre page, <br>vous trouverez ici tout pour le bureau, mais en mieux ! .</p>

        <a class="btn btn-lg d-flex align-items-center" href="formpapeterie.php.php" role="button">Ajouter</a>
  </div>
<!-- Jumbotron -->
</header>

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

<!--Cards -->
  <section>
      <div class="container">

          <div class="row justify-content-around">

		<?php
                    foreach ($listItem as $key => $value){
                        include 'cardpapeterie.php';
                    }
             	 ?>

	    </div>
      </div>
</section>
<!-- fin Cards -->
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

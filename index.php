<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wild Bazar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
	<?php
    $categoryTitle = 'Wild Bazar';
    $categoryDescription = 'On y trouve de tout et surtout du n\'importe quoi.';
    $categoryPicture = 'images/fond_blanc.jpeg';
	include "header.php";
	?>
    <div class="jumbotron jumbotron-fluid bg-light">
    <div class="container">
      <h1 class="display-8"><span class="s1">W</span>ild <span class="s1">B</span>azar</h1>
      <p class="lead">On y trouve de tout et surtout du n'importe quoi .</p>
    </div>
</div>
    <section id="Categories" class="container-fluid c">
		<h2>Catégories</h2>
			<div class="row justify-content-center c">
				<div class="col-sm-6 col-md-5 col-lg-4 c">
					<a href="PageTextiles.html" class="card c">
						<img src="https://images.pexels.com/photos/934070/pexels-photo-934070.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="">
						<div class="card-img-overlay c">
							<h5 class="card-title c">Textiles</h5>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-md-5 col-lg-4 c">
					<a href="vaisselle.html" class="card c">
						<img src="https://images.pexels.com/photos/291767/pexels-photo-291767.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="">
						<div class="card-img-overlay c">
							<h5 class="card-title c">Vaisselle</h5>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-md-5 col-lg-4 c">
					<a href="papeterie.html" class="card c">
						<img src="https://images.pexels.com/photos/632470/pexels-photo-632470.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="">
						<div class="card-img-overlay c">
							<h5 class="card-title c">Papeterie</h5>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-md-5 col-lg-4 c">
					<a href="page_animaux3.php" class="card c">
						<img src="https://images.pexels.com/photos/1378849/pexels-photo-1378849.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="">
						<div class="card-img-overlay c">
							<h5 class="card-title c">Animalerie</h5>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-md-5 col-lg-4 c">
					<a href="accessoire.php" class="card c">
						<img src="https://images.pexels.com/photos/1011334/pexels-photo-1011334.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="">
						<div class="card-img-overlay c">
							<h5 class="card-title c">Accessoires</h5>
						</div>
					</a>
				</div>
			</div>
	</section>

<!-- About us -->
	<section id="Aboutus" class="secabout">
		<div class="container-fluid">
			<div class="card mb-3  cardAb">
				<div class="row no-gutters">
					<div class="col-md-3">
						<img src="https://i.imgur.com/nXjRgyc.jpg" class="aboutus" alt="Our team" />
					</div>
					<div class="col-md-9">
						<div class="card-body">
							<h2 class="card-titleA"><span class="s1">A</span> propo<span class="s1">s</span></h2>
							<p class="card-textA">Depuis son lancement en 2019 par le gang de The Table, Wild Bazar a déjà livré des MILLIONS d'objet imprimés personnalisés à 								des clients qui ont grâce à nous ont du style!<br> 
							Nous mettons tout en oeuvre pour travailler avec des graphiste très talentueux, bénévole et toujours libre de droit of course !
							<br> En faisant confiance à Wild Bazar, vous avez contribué à créer plus de 5 emplois directs en France, 								merci !
							</p>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</section>
<!--End About us -->



	<section id="top-selling">
		<div class="container">
			<div class="row justify-content-center">
				<h2 class="col text-center titre_top_selling"><span class="s1">T</span>op <span class="s1">D</span>es <span class="s1">V</span>entes</h2>
			</div>
			<div class="row justify-content-center">
				<p class="col text-center top_selling_txt">Les meilleures ventes du Wild Bazar.</p>
			</div>
			<div class="row justify-content-between">
				<div class="col-lg-3 col-md-4 col-sm-8 card settings_card">
					<img src="images/coussin_ab-min.png" class="card-img-top card-ts" alt="Photo de coussin Absurd Corp">
					<p class="price badge-secondary">19.99&euro;</p>
					<div class="card-body">
						<h5 class="card-title card_title_ts">Coussin Absurd Corp</h5>
						<button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-1">En savoir plus</button>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="modal-ts-1" tabindex="-1" role="dialog" aria-labelledby="modal-ts-1" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content modal-content-ts">
							<div class="modal-header">
								<h5 class="modal-title">Coussin Absurd Corp</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<img src="images/coussin_ab-min.png" class="card-img-top col-lg-6 col-md-12" alt="Photo de coussin Absurd Corp">
									<p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts">14.99&euro;</span><br>Prout ! Le coussin péteur fut inventé au XIXème prout ! excusez-moi. On trouve un coussin péteur en cadeau dans Pif magazine (maman me l'a acheté).<br>Celui ci n'est pas péteur mais il ajouteras une touche de style dans votre salon ! <br></p>
								</div>
								<p class="carac-modal">Caracteristiques</p>
								<ul>
									<li>Coloris : Blanc , Rouge , Bleu , Vert</li>
									<li>Composition : 100% polyester</li>
									<li>Poids : 550g</li>
									<li>Dimensions : 45x45</li>
								</ul>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-8 card settings_card">
					<img src="images/classeur_ab-min.png" class="card-img-top card-ts" alt="Photo de classeur Absurd Corp">
					<p class="price badge-secondary">9.99&euro;</p>
					<div class="card-body">
						<h5 class="card-title card_title_ts">Classeur Absurd Corp</h5>
						<button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-2">En savoir plus</button>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="modal-ts-2" tabindex="-1" role="dialog" aria-labelledby="modal-ts-2" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content modal-content-ts">
							<div class="modal-header">
								<h5 class="modal-title">Classeur Absurd Corp</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<img src="images/classeur_ab-min.png" class="card-img-top col-lg-6 col-md-12" alt="Photo de classeur Absurd Corp">
									<p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts">14.99&euro;</span> <br>ABSURD CORP vous fait enfin découvir son dernier classeur dernier cri avec quatre anneaux intérieurs, assurant ainsi un confort de rangement optimal. La couverture cartonnée souplement rigide vous rendra accro à sa texture. Existe en 27 coloris tendance allant du vert olive au rouge poussin. Nous avons évidemment pensé aux couleurs de l'année 2019 avec le Living Coral et l'Aspen Gold !</p>
								</div>
								<p class="carac-modal">Caracteristiques</p>
								<ul>
									<li>Coloris : 27, comme dit plus haut. Vous trouverez forcément votre bonheur.</li>
									<li>Poids : 550g</li>
									<li>Dimensions : Largeur : 260mm Hauteur : 360mm Profondeur : 40mm.</li>
								</ul>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-8 card settings_card">
					<img src="images/bol_animaux_ab-min.png" class="card-img-top card-ts" alt="Photo de gamelle pour animaux Absurd Corp">
					<p class="price badge-secondary">14.99&euro;</p>
					<div class="card-body">
						<h5 class="card-title card_title_ts">Gamelle Absurd Corp</h5>
						<button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-3">En savoir plus</button>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="modal-ts-3" tabindex="-1" role="dialog" aria-labelledby="modal-ts-3" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content modal-content-ts">
							<div class="modal-header">
								<h5 class="modal-title mod-title-ts">Gamelle pour animaux Absurd Corp</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<img src="images/bol_animaux_ab-min.png" class="card-img-top col-lg-6 col-md-12" alt="Photo de gamelle pour animaux Absurd Corp">
									<p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts">14.99&euro;</span> <br>Hinc ille commotus ut iniusta perferens et indigna praefecti custodiam protectoribus mandaverat fidis. quo conperto Montius tunc quaestor acer quidem sed ad lenitatem propensior, consulens in commune advocatos palatinarum primos scholarum adlocutus est mollius docens nec decere haec fieri nec </p>
								</div>
								<p class="carac-modal">Caracteristiques</p>
								<ul>
									<li>Couleurs : Blanc , Rouge , Bleu , Vert</li>
									<li>Poids : 200g</li>
								</ul>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
							</div>
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
	</body>
</html>

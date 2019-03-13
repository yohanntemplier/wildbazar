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
    <nav class="navbar navbar-expand-lg navbar-dark"> <a class="navbar-brand" href="#">
        <img src="https://imagizer.imageshack.com/img923/8125/xjvCju.png" alt="logo" class="photo">
        <p class="nav-link2"><span class="s1">W</span>ild<span class="s1">B</span>azar</p>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="index.html">Home </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="PageTextiles.html">Textiles</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="vaisselle.html">Vaisselle</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="papeterie.html">Papeterie<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="page_animaux2.html">Animalerie</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="accessoire.html">Accessoires</a>
                </li> 
            </ul>
        </div>
		</nav>
<!-- Fin navbar -->
<!-- Jumbotron -->

  <div class="jumbotron d-flex align-items-center flex-column">
  	   <div class="fond shadow"></div>
        <h1 class="display-4"><span class="titre">P</span>apeteri<span class="titre">e</span></h1>

        <p class="lead">
        Pour donner du style à votre page, <br>vous trouverez ici tout pour le bureau, mais en mieux ! .</p>

        <a class="btn btn-lg d-flex align-items-center" href="#" role="button">+ ADD NEW</a>
  </div>
<!-- Jumbotron -->
</header>


<!--Cards -->
  <section>
      <div class="container">

          <div class="row justify-content-between">

            <div class="card col-lg-3 col-sm-5 col-md-4">

            <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/classeur_ab-min.png" class="card-img-top img-thumbnail" alt="classeur">
                <div class="top-right badge-pill badge-secondary">9,99 €</div>
                <div class="card-body col-lg-3">
                <p class="card-title">Classeur absud corp</p>
            
            <!-- Button trigger modal -->
                <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal">
  								En savoir plus
							   </button>

            <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Classeur absurd corp</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          						          <span aria-hidden="true">&times;</span>
        					              </button>
                                </div>
                                <div class="modal-body row">
                   
                  		              <div class="col-lg-6 col-md-12">
                                    <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/classeur_ab-min.png" class="card-img-top" alt="classeur" />
                		                </div>
                		                    <div class="col-lg-6 col-md-12">
                                        <p class="textmodal">

                                        <span class="prix">9,99€</span><br><p>Un classeur est un porte-documents qui permet de ranger des feuilles de papier de même taille. Il est aussi bien utilisé en tant que matériel scolaire que de matériel de bureau.</p>

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

        <div class="card col-lg-3 col-sm-5 col-md-4">

          <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/classeur_gui-min.png" class="card-img-top img-thumbnail" alt="classeur" />
          <div class="top-right badge-pill badge-secondary">8,99 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Classeur guitare</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal2">
  En savoir plus

</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Classeur guitare</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>

                  <div class="modal-body row">
                
                <div class="col-lg-6 col-md-12">
                    <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/classeur_gui-min.png" class="card-img-top" alt="classeur" />
                </div>
                  	<div class="col-lg-6 col-md-12">
                    <p class="textmodal">
                    	<span class="prix">8,99€</span><br><p>Un classeur est un porte-documents qui permet de ranger des feuilles de papier de même taille. Il est aussi bien utilisé en tant que matériel scolaire que de matériel de bureau.</p>
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

        <div class="card col-lg-3 col-sm-5 col-md-4">

          <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/stylo_ab.png" class="card-img-top img-thumbnail" alt="stylo" />
          <div class="top-right badge-pill badge-secondary">7,99 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Stylo absurd corp</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal3">
  En savoir plus
</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Stylo absud corp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                 
                <div class="col-lg-6 col-md-12">
                    <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/stylo_ab.png" class="card-img-top" alt="stylo" />
                </div>
                 	<div class="col-lg-6 col-md-12">
                    <p class="textmodal">
                    <span class="prix">7,99€</span><br><p>Le stylo est un instrument, généralement de forme allongée facilitant sa préhension, qui sert à écrire ou à dessiner.</p>
                </div>
                  </div>
                  <div class="modal-footer flex-column ">
                    <h6>Caractéristiques :</h6>
                    <ul>
                    	<li>- Plusieurs modèles et couleurs</li>
                    	<li>- rechargeabla</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-between">
        
        <div class="card col-lg-3 col-sm-5 col-md-4">
          <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/stylo_gui.png" class="card-img-top img-thumbnail" alt="stylo" />
          <div class="top-right badge-pill badge-secondary">5,99 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Stylo guitare</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal4">
  En savoir plus
</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Stulo guitare</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                  	<div class="col-lg-6 col-md-12">
                    <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/stylo_gui.png" class="card-img-top" alt="Stylo" />
                </div>
                  	<div class="col-lg-6 col-md-12">
                    <p>
                    <span class="prix">5,99€</span><br><p>Le stylo est un instrument, généralement de forme allongée facilitant sa préhension, qui sert à écrire ou à dessiner.</p>
                </div>
                  </div>
                   <div class="modal-footer flex-column ">
                    <h6>Caractéristiques :</h6>
                    <ul>
                    	<li>- Plusieurs modèles et couleurs</li>
                      <li>- rechargeabla</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card col-lg-3 col-sm-5 col-md-4">
          <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/trousse_ab.png" class="card-img-top img-thumbnail" alt="Trousse" />
          <div class="top-right badge-pill badge-secondary">10,99 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Trousse absurd corp</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal5">
  			En savoir plus
			</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel5">Trousse absurd corp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                  
                <div class="col-lg-6 col-md-12">
                    <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/trousse_ab.png" class="card-img-top" alt="T-shirt" />
                </div>
                	<div class="col-lg-6 col-md-12">
                    <p class="textmodal">
                    <span class="prix">10,99€</span><br><p>Une trousse à crayons est une trousse utilisée pour ranger des crayons, stylos et du matériel d'écriture. On peut également se servir d'une trousse à crayons pour ranger d'autres articles de papeterie, tels taille-crayons, gomme, colle, effaceur, ciseaux, règle, etc. </p>
                </div>
                  </div>
                  <div class="modal-footer flex-column ">
                    <h6>Caractéristiques :</h6>
                    <ul>
                    	<li>- différentes tailles et colories</li>
                    	<li>- plusieurs formes disponibles</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card col-lg-3 col-sm-5 col-md-4">
        	<div class="top-right badge-pill badge-secondary">8,99 €</div>
          <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/trousse_gui.png" class="card-img-top img-thumbnail" alt="trousse" />
          <div class="card-body col-lg-3">
            <p class="card-title">Trousse guitare</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal6">
  En savoir plus
</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel6">Trousse guitare</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                  
                <div class="col-lg-6 col-md-12">
                    <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/trousse_gui.png" class="card-img-top" alt="trousse" />
                </div>
                	<div class="col-lg-6 col-md-12">
                    <p class="textmodal">
                    	<span class="prix">8,99€</span><br><p>Une trousse à crayons est une trousse utilisée pour ranger des crayons, stylos et du matériel d'écriture. On peut également se servir d'une trousse à crayons pour ranger d'autres articles de papeterie, tels taille-crayons, gomme, colle, effaceur, ciseaux, règle, etc. </p>
                </div>
                  </div>
                  <div class="modal-footer flex-column ">
                    <h6>Caractéristiques :</h6>
                    <ul>
                    	<li>- différentes tailles et colories</li>
                      <li>- plusieurs formes disponibles</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
<div class="row justify-content-between">
        <div class="card col-lg-3 col-sm-5 col-md-4">
          <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/art-artistic-blank-616849ab-min.png" class="card-img-top img-thumbnail" alt="agenda" />
          <div class="top-right badge-pill badge-secondary">13,99 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Agenda absurd corp</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal7">
  								En savoir plus
							</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel7" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel7">Agenda absurd corp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          						<span aria-hidden="true">&times;</span>
        					</button>
                  </div>
                  <div class="modal-body row">
                 
                <div class="col-lg-6 col-md-12">
                    <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/art-artistic-blank-616849ab-min.png" class="card-img-top" alt="agenda" />
                </div>
                 	<div class="col-lg-6 col-md-12">
                    <p class="textmodal">
                    	<span class="prix">13,99€</span><br><p>Un agenda est un outil permettant d'associer des actions à des moments, et d'organiser ainsi son temps. Il est utilisé afin de pouvoir donner à son utilisateur la possibilité de planifier, de noter son emploi du temps, ses rendez-vous, etc. </p>
                </div>
                  </div>
                  <div class="modal-footer flex-column ">
                    <h6>Caractéristiques :</h6>
                    <ul>
                    	<li>- Différentes tailles et colories</li>
                    	<li>- 100% en matière recyclable</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card col-lg-3 col-sm-5 col-md-4">
          <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/art-artistic-blank-616849gui-min.png" class="card-img-top img-thumbnail" alt="agenda" />
          <div class="top-right badge-pill badge-secondary">11,99 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Agenda guitare</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal8">
  En savoir plus
</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel8" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel8">Agenda guitare</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                 
                <div class="col-6">
                    <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/art-artistic-blank-616849gui-min.png" class="card-img-top" alt="agenda" />
                </div>
                 	<div class="col-6">
                    <p class="textmodal">
                    	<span class="prix">11,99€</span><br><p>Un agenda est un outil permettant d'associer des actions à des moments, et d'organiser ainsi son temps. Il est utilisé afin de pouvoir donner à son utilisateur la possibilité de planifier, de noter son emploi du temps, ses rendez-vous, etc. </p>
                </div>
                  </div>
                   <div class="modal-footer flex-column ">
                    <h6>Caractéristiques :</h6>
                    <ul>
                    	<li>- Différentes tailles et colories</li>
                      <li>- 100% en matière recyclable</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card col-lg-3 col-sm-5 col-md-4">
          <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/tapis_de_souris%20ab.png" class="card-img-top img-thumbnail" alt="tapis" />
          <div class="top-right badge-pill badge-secondary">3,99 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Tapis de souris absurd</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal9">
  En savoir plus
</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel9" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel9">Tapis de souris absurd</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                  	
                    	 <div class="col-lg-6 col-md-12">
                    <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/tapis_de_souris%20ab.png" class="card-img-top" alt="tapis" />
                	</div>
                  
                  <div class="col-lg-6 col-md-12">
                    <p class="textmodal">
                    	<span class="prix">3,99€</span><br><p>Petit tapis de bureau antidérapant pour améliorer l'efficacité d'utilisation et de précision des souris informatique à détection de mouvement mécanique à boule, ou infrarouge. </p>
                	</div>
               </div>
                   <div class="modal-footer flex-column ">
                    <h6>Caractéristiques :</h6>
                    <ul>
                    	<li>- Taille unique</li>
                    	<li>- 100% en matière recyclable</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-between">
        <div class="card col-lg-3 col-sm-5 col-md-4">
        	
          <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/tapis_desouris_gui.png" class="card-img-top img-thumbnail" alt="tapis" />
          <div class="top-right badge-pill badge-secondary">1,99 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Tapis de souris guitare</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal10">
  En savoir plus
</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel10" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel10">Tapis de souris guitare</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                  
                <div class="col-lg-6 col-md-12">
                    <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/tapis_desouris_gui.png" class="card-img-top" alt="tapis" />
                </div>
                	<div class="col-lg-6 col-md-12">
                		
                    <p class="textmodal">
					<span class="prix">1,99€</span><br><p>Petit tapis de bureau antidérapant pour améliorer l'efficacité d'utilisation et de précision des souris informatique à détection de mouvement mécanique à boule, ou infrarouge. </p>
                </div>
                  </div>
                   <div class="modal-footer flex-column ">
                    <h6>Caractéristiques :</h6>
                    <ul>
                    	<li>- Taille unique</li>
                      <li>- 100% en matière recyclable</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card col-lg-3 col-sm-5 col-md-4">
          <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/carbeille_a_papier%20ab-min.png" class="card-img-top img-thumbnail" alt="corbeille" />
          <div class="top-right badge-pill badge-secondary">6,99 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Corbeille absurd corp</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal11">
  			En savoir plus
			</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel11" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel11">Corbeille absurd corp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                  
                <div class="col-lg-6 col-md-12">
                    <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/carbeille_a_papier%20ab-min.png" class="card-img-top" alt="corbeille" />
                </div>
                	<div class="col-lg-6 col-md-12">
                    <p class="textmodal">
                    <span class="prix">6,99€</span><br><p>Une corbeille à papier est un type de poubelle prévue pour recevoir les déchets d'un bureau, particulièrement des papiers. </p>
                </div>
                  </div>
                  <div class="modal-footer flex-column ">
                    <h6>Caractéristiques :</h6>
                    <ul>
                    	<li>- différentes tailles et colories</li>
                    	<li>- 100% en matière recyclabe</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card col-lg-3 col-sm-5 col-md-4">
        	<div class="top-right badge-pill badge-secondary">4,99 €</div>
          <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/carbeille_a_papier%20gui-min.png" class="card-img-top img-thumbnail" alt="corbeille" />
          <div class="card-body col-lg-3">
            <p class="card-title">Corbeille guitare</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal12">
  En savoir plus
</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel12" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel12">Corbeille guitare</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                  
                <div class="col-lg-6 col-md-12">
                    <img src="https://raw.githubusercontent.com/WildCodeSchool/orleans-0219-php-wildbazar6/master/images/carbeille_a_papier%20gui-min.png" class="card-img-top" alt="corbeille" />
                </div>
                	<div class="col-lg-6 col-md-12">
	                    <p class="textmodal">
	                    <span class="prix">4,99€</span><br><p>Une corbeille à papier est un type de poubelle prévue pour recevoir les déchets d'un bureau, particulièrement des papiers. </p>
                </div>
                  </div>
                   <div class="modal-footer flex-column ">
                    <h6>Caractéristiques :</h6>
                    <ul>
                    	<li>- différentes tailles et colories</li>
                      <li>- 100% en matière recyclabe</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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

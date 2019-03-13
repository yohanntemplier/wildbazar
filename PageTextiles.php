<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <title>Textiles</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="StyleSheetTextiles.css">

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


<!--Cards -->
  <section class="cardsection">
    <div class="container">

      <div class="row justify-content-between">

        <div class="card col-lg-3 col-sm-5 col-md-4">

          <img src="images/culotte_gui.png" class="card-img-top img-thumbnail bébé" alt="Underwear">
          <div class="top-right badge-pill badge-secondary">50 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Culotte pixel art</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal1">
  								En savoir plus
							</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Culotte pixel art</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          						<span aria-hidden="true">&times;</span>
        					</button>
                  </div>
                  <div class="modal-body row">
                   
                  		 <div class="col-lg-6 col-md-4">
                    <img src="images/culotte_gui.png" class="img-thumbnail"  alt="Culotte" />
                		</div>
                		<div class="col-lg-6 col-md-4">
                   <p class="textmodal">

                     <span class="prix">50 €</span><br>
                     En 1918 apparaît la marque Petit Bateau, ainsi créée en référence aux tranchées de Verdun, souvent inondées. Cette boucherie industrielle était la première à présenter des culottes sans jarrets. À cette époque, bœufs, génisses et veaux se voyaient découpés et cuisinés sous forme de caleçons longs comprenant les jarrets, cuisses et fesses.<br> 
                     Ici vous n'avez pas une culotte Petit Bateau mais elle est pas mal quand même !
                      </p>

                  </div>
              </div>
                  <div class="modal-footer flex-column ">
                    <h6>Caractéristiques</h6>
                    <ul>
                    	<li>Disponible du 36 au 56</li>
                    	<li>100% laine de yack BIO</li>
                    </ul>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-sm-5 col-md-4">

          <img src="images/coussin_ab-min.png" class="card-img-top img-thumbnail bébé" alt="Coussin" />
          <div class="top-right badge-pill badge-secondary">20 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Coussin Absurd Corp</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal2">
  En savoir plus

</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Coussin Absurd Discord</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>

                  <div class="modal-body row">
                
                <div class="ccol-lg-6 col-md-4">
                    <img src="images/coussin_ab-min.png" class="img-thumbnail" alt="Coussin" />
                </div>
                  	<div class="col-lg-6 col-md-4">
                    <p class="textmodal">
                    	<span class="prix">20 €</span><br>
                    Prout ! Le coussin péteur fut inventé au XIXème prout ! excusez-moi. On trouve un coussin péteur en cadeau dans Pif magazine (maman me l'a acheté).<br>
                    Celui ci n'est pas péteur mais il ajouteras une touche de style dans votre salon !
                	</p>
                </div>
                  </div>
                  <div class="modal-footer flex-column ">
                    <h6>Caractéristiques</h6>
                    <ul>
                    	<li>Taille 45x45 </li>
                    	<li>100% laine de yack BIO</li>
                    </ul>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-sm-5 col-md-4">

          <img src="images/casquette_ab-min.png" class="card-img-top img-thumbnail bébé" alt="Casquette" />
          <div class="top-right badge-pill badge-secondary">30 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Casquette Absurd Corp</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal3">
  En savoir plus
</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Casquette Absurd Corp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                 
                <div class="col-lg-6 col-md-4">
                    <img src="images/casquette_ab-min.png" class="img-thumbnail" alt="Casquette" />
                </div>
                 	<div class="col-lg-6 col-md-4">
                    <p class="textmodal">
                    <span class="prix">30 €</span><br>
                    La casquette Absurd Corp est un couvre-chef et un des articles phares de la marque.
                     </p>
                </div>
                  </div>
                  <div class="modal-footer flex-column ">
                    <h6>Caractéristiques</h6>
                    <ul>
                    	<li>Taille unique</li>
                    	<li>100% laine de yack BIO</li>
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

          <img src="images/Coussin_gui.png" class="card-img-top img-thumbnail bébé" alt="..." />
          <div class="top-right badge-pill badge-secondary">20 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Coussin pixel art</p>
            

            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal4">
  En savoir plus
</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel4">Coussin pixel art</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                  	<div class="col-lg-6 col-md-4">
                    <img src="images/Coussin_gui.png" class="img-thumbnail" alt="Coussin" />
                </div>
                  	<div class="col-lg-6 col-md-4">
                    <p>
                    <span class="prix">20 €</span><br>
                    Prout ! Le coussin péteur fut inventé au XIXème prout ! excusez-moi. On trouve un coussin péteur en cadeau dans Pif magazine (maman me l'a acheté).<br>
                    Celui ci n'est pas péteur mais il ajouteras une touche de style dans votre salon !
                    </p>
                </div>

                  </div>

                   <div class="modal-footer flex-column ">
                    <h6>Caractéristiques</h6>
                    <ul>
                    	<li>Dimensions 45x45</li>
                    	<li>100% laine de yack BIO</li>
                    </ul>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="card col-lg-3 col-sm-5 col-md-4">

          <img src="images/tee-shirt_ab.png" class="card-img-top img-thumbnail bébé" alt="T-shirt" />
          <div class="top-right badge-pill badge-secondary">60 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">T-shirt Absurd Corp</p>

            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal5">
  			En savoir plus
			</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel5">T-shirt Absurd Corp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                  
                <div class="col-lg-6 col-md-4">
                    <img src="images/tee-shirt_ab.png" class="img-thumbnail" alt="T-shirt" />
                </div>
                	<div class="col-lg-6 col-md-4">
                    <p class="textmodal">
                    <span class="prix">60 €</span><br>
                    De nombreuses personnes veulent affirmer leurs idées, leur appartenance à un groupe ou à une idéologie, et portent pour ce faire des vêtements à message.
                    </p>
                </div>
                  </div>
                  <div class="modal-footer flex-column ">
                    <h6>Caractéristiques</h6>
                    <ul>
                    	<li>Disponible du 36 au 56</li>
                    	<li>100% laine de yack BIO</li>
                    </ul>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-sm-5 col-md-4">
        	<div class="top-right badge-pill badge-secondary">60 €</div>
          <img src="images/pull_gui.png" class="card-img-top img-thumbnail bébé" alt="Sweat" />
          <div class="card-body col-lg-3">
            <p class="card-title">Sweat pixel art</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal6">
  En savoir plus
</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel6">Sweat pixel art</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                  
                <div class="col-lg-6 col-md-4">
                    <img src="images/pull_gui.png" class="img-thumbnail" alt="Sweat" />
                </div>
                	<div class="col-lg-6 col-md-4">
                    <p class="textmodal">
                    	<span class="prix">60 €</span><br>
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker</p>
                </div>
                  </div>
                  <div class="modal-footer flex-column ">
                    <h6>Caractéristiques</h6>
                    <ul>
                    	<li>Disponible du 36 au 56</li>
                    	<li>100% laine de yack BIO</li>
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

          <img src="images/culotte_ab.png" class="card-img-top img-thumbnail bébé" alt="Underwear" />
          <div class="top-right badge-pill badge-secondary">50 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Culotte Absurd Corp</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal7">
  								En savoir plus
							</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel7">Culotte AbsurdCorp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          						<span aria-hidden="true">&times;</span>
        					</button>
                  </div>
                  <div class="modal-body row">
                 
                <div class="col-lg-6 col-md-4">
                    <img src="images/culotte_ab.png" class="img-thumbnail" alt="Culotte" />
                </div>
                 	<div class="col-lg-6 col-md-4">
                    <p class="textmodal">
                    	<span class="prix">50 €</span><br>
                    En 1918 apparaît la marque Petit Bateau, ainsi créée en référence aux tranchées de Verdun, souvent inondées. Cette boucherie industrielle était la première à présenter des culottes sans jarrets. À cette époque, bœufs, génisses et veaux se voyaient découpés et cuisinés sous forme de caleçons longs comprenant les jarrets, cuisses et fesses.
					Ici vous n'avez pas une culotte Petit Bateau mais elle est pas mal quand même ! </p>
                </div>
                  </div>

                  <div class="modal-footer flex-column ">
                    <h6>Caractéristiques</h6>
                    <ul>
                    	<li>Disponible du 36 au 56</li>
                    	<li>100% laine de yack BIO</li>
                    </ul>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-sm-5 col-md-4">

          <img src="images/grenouillère_ab.png" class="card-img-top img-thumbnail bébé" alt="Coussin" />
          <div class="top-right badge-pill badge-secondary">85 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Grenouillère</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal8">
  En savoir plus

</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel8">Grenouillère bébé</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                 
                <div class="col-lg-6 col-md-4">
                    <img src="images/grenouillère_ab.png" class="img-thumbnail" alt="Grenouillère" />
                </div>
                 	<div class="col-lg-6 col-md-4">
                    <p class="textmodal">
                    	<span class="prix">50 €</span><br>
                  		Vous allez avoir un bébé ? Vous n’avez pas d’idée pour le choix de la tenue qu'il va souiller jour et nuit ? N’hésitez plus !</p>
                </div>
                  </div>
                   <div class="modal-footer flex-column ">
                    <h6>Caractéristiques</h6>
                    <ul>
                    	<li>Disponible du 3 au 12 mois</li>
                    	<li>100% laine de yack BIO</li>
                    </ul>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-sm-5 col-md-4">

          <img src="images/casquette_gui-min.png" class="card-img-top img-thumbnail bébé" alt="Casquette" />
          <div class="top-right badge-pill badge-secondary">30 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Casquette pixel art</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal9">
  En savoir plus
</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel9">Casquette Pixel art</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                  	
                    	 <div class="col-lg-6 col-md-4">
                    <img src="images/casquette_gui-min.png" class="img-thumbnail" alt="Casquette" />
                	</div>
                  
                  <div class="col-lg-6 col-md-4">
                    <p class="textmodal">
                    	<span class="prix">30 €</span><br>
                        La vie au Mozambique est plutôt tranquille, il se passe pas grand'chose...Faut dire qu'ils ont pas la TV, hein. Si, ils ont bien quelques concerts, mais pas des grandes vedettes: Jean-Pierre Sauzer, Joseph Garin, Elton John... 
    					Les inventions? Ben, la casquette a été inventée au Mozambique par Félix Casquette...La TV aussi...Non, pas la TV, j'ai dit qu'ils avaient pas la TV. J'vois pas alors...Je continue?  </p>
                	</div>
               </div>

                   <div class="modal-footer flex-column ">
                    <h6>Caractéristiques</h6>
                    <ul>
                    	<li>Taille unique</li>
                    	<li>100% laine de yack BIO</li>
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
        	
          <img src="images/grenouillère_gui.png" class="card-img-top img-thumbnail bébé" alt="grenouillère" />

          <div class="top-right badge-pill badge-secondary">85 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">Grenouillère pixel art</p>
            

            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal10">
  En savoir plus
</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel10">Grenouillère bébé ou main au choix !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                  
                <div class="col-lg-6 col-md-4">
                    <img src="images/grenouillère_gui.png" class="img-thumbnail" alt="Grenouillère" />
                </div>
                	<div class="col-lg-6 col-md-4">
                		
                    <p class="textmodal">
					<span class="prix">85 €</span><br> 
                    Vous allez avoir un bébé ? Vous n’avez pas d’idée pour le choix de la tenue qu'il va souiller jour et nuit ? N’hésitez plus !</p>
                </div>
                  </div>
                   <div class="modal-footer flex-column ">
                    <h6>Caractéristiques</h6>
                    <ul>
                    	<li>Disponible du 3 au 12 mois</li>
                    	<li>100% laine de yack BIO</li>
                    </ul>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-sm-5 col-md-4">

          <img src="images/tee-shirt_gui.png" class="card-img-top img-thumbnail bébé" alt="T-shirt" />
          <div class="top-right badge-pill badge-secondary">30 €</div>
          <div class="card-body col-lg-3">
            <p class="card-title">T-shirt pixel art</p>

            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal11">
  			En savoir plus
			</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel11">T-shirt blanc pixel art</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                  
                <div class="col-lg-6 col-md-4">
                    <img src="images/tee-shirt_gui.png" class="img-thumbnail" alt="T-shirt" />
                </div>
                	<div class="col-lg-6 col-md-4">
                    <p class="textmodal">
                    <span class="prix">60 €</span><br> 
                    De nombreuses personnes veulent affirmer leurs idées, leur appartenance à un groupe ou à une idéologie, et portent pour ce faire des vêtements à message. </p>
                </div>
                  </div>
                  <div class="modal-footer flex-column ">
                    <h6>Caractéristiques</h6>
                    <ul>
                    	<li>Disponible du 36 au 56</li>
                    	<li>100% laine de yack BIO</li>
                    </ul>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card col-lg-3 col-sm-5 col-md-4">
        	<div class="top-right badge-pill badge-secondary">60 €</div>
          <img src="images/pull_ab.png" class="card-img-top img-thumbnail bébé" alt="Sweat" />
          <div class="card-body col-lg-3">
            <p class="card-title">Sweat Absurd Corp</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal12">
  En savoir plus
</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel12">Sweat Absurd Corp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                  </div>
                  <div class="modal-body row">
                  
                <div class="col-lg-6 col-md-4">
                    <img src="images/pull_ab.png" class="img-thumbnail" alt="Sweat" />
                </div>
                	<div class="col-lg-6 col-md-4">
	                    <p class="textmodal">
	                    <span class="prix">60 €</span><br> 
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker </p>
                </div>
                  </div>
                   <div class="modal-footer flex-column ">
                    <h6>Caractéristiques</h6>
                    <ul>
                    	<li>Disponible du 36 au 56</li>
                    	<li>100% laine de yack BIO</li>
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


<?php

include 'footer.php';

?>
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

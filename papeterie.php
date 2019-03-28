<?php
    require 'connec.php';

$pdo = new PDO(DSN, USER, PASS);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM products";
$statement = $pdo->query($query);
$articles = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


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

        <a class="btn btn-lg d-flex align-items-center" href="formpapeterie.php" role="button">Ajouter</a>
  </div>
<!-- Jumbotron -->
</header>

<!--Cards -->
  <section>
      <div class="container">

          <div class="row justify-content-around">

		<?php
        foreach ($articles as $article){
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

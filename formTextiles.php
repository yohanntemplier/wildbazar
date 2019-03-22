<?php
/**
 * Created by PhpStorm.
 * User: wilder2
 * Date: 20/03/19
 * Time: 17:29
 */


if($_POST) {
    //not empty

    $errors = array();

    //start validation

    if (empty($_POST['produit'])) {
        $errors['produit_empty'] = '* Le nom du produit est requis !';
    }
    if (empty($_POST['price'])) {
        $errors['price_empty'] = '* Le prix est requis !';
    }
    if (empty($_POST['description'])) {
        $errors['description_empty'] = '* Vous devez mettre une description !';
    }
    if(($_POST['color']))
    {
        $errors['color_empty'] = 'You must pick color !';
    }
    if(($_POST['size']))
    {
        $errors['size_empty'] = 'You must pick size !';
    }
    if(($_POST['brand']))
    {
        $errors['brand_empty'] = 'You must pick brand !';
    }


//Check errors

    if (count($errors) == 0) {
        //redirect to sucess page
        header("Location: sucess.php");
        exit();
    }

}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleSheetTextiles.css">
    <title>Formulaire d'ajout</title>
  </head>
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
      </div>
      <!-- Jumbotron -->
  </header>


  <body>


    <div class="container formAjout"">


        <h1 class="colorTitle">Formulaire d'ajout</h1>

        <form method="post" action="formTextiles.php" novalidate>

            <div class="row">
                <div class="col">
                    <label class="sizeLabel" for="produit">Nom du produit</label>
                    <input type="text" class="form-control" id="produit" name="produit"
                           value="<?php if(isset($_POST['produit'])) echo $_POST['produit']; ?>" placeholder="Nom produit" required>
                    <p class="text-warning"><?php if(isset($errors['produit_empty'])) echo $errors['produit_empty'];?></p>
                </div>
                <div class="col">
                    <label class="sizeLabel" for="price">Prix</label>
                    <input type="text" class="form-control"
                           value="<?php if(isset($_POST['price'])) echo $_POST['price']; ?>"
                           placeholder="Prix" id="price" name="price" required>
                    <p class="text-warning"><?php if(isset($errors['price_empty'])) echo $errors['price_empty'];?></p>
                </div>
            </div>


            <div class="form-group">
                <label class="sizeLabel" for="description">Description</label>
                <p class="text-warning"><?php if(isset($errors['description_empty'])) echo $errors['description_empty'];?></p>
                <textarea class="form-control" id="description" name="description" value="<?php if(isset($_POST['description'])) echo $_POST['description']; ?>"
                          placeholder="Description" rows="3" required></textarea>
            </div>


                <div class="row">
                <div class="form-group col-4">
                <label class="sizeLabel" for="size">Size</label>
                <select class="form-control" id="size" name="size">
                    <option>Select size</option>
                    <option>36/38</option>
                    <option>40/42</option>
                    <option>44/46</option>
                </select>

                </div>
                <div class="form-group col-4">
                    <label class="sizeLabel" for="coloris">Coloris</label>
                    <select class="form-control" id="coloris" name="coloris">
                        <option>Select color</option>
                        <option>Blanc</option>
                        <option>Noir</option>
                        <option>Rouge</option>
                    </select>

                </div>
                <div class="form-group col-4">
                    <label class="sizeLabel" for="brand">Marque</label>
                    <select class="form-control" id="brand" name="brand">
                        <option>Select brand</option>
                        <option>Absurd Corp</option>
                        <option>Pixel art</option>
                    </select>
                </div>
                </div>


                    <div class="form-group">
                        <label class="sizeLabel" for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                <button type="submit" class="btn btnajout" value="submit">Ajouter le produit</button>
            </div>
        </form>
    </div>

    <footer>

    <?php

    include 'footer.php';

    ?>

    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
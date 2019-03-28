<?php

$pdo = new PDO(DSN, USER, PASS);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM papeterie";
$statement = $pdo->query($query);
$articles = $statement->fetchAll(PDO::FETCH_ASSOC);
?>




<div class="card col-lg-4 col-sm-8 col-md-5">

    <img src="<?php echo htmlentities($article['picture']);?>" class="card-img-top img-thumbnail" alt="<?php echo htmlentities($article['name']);?>">
    <div class="top-right badge-pill badge-secondary"><?php echo htmlentities($article['price']) .'€';?></div>
<div class="card-body col-lg-3">
    <p class="card-title"><?php echo htmlentities($article['name']);?></p>

    <!-- Button trigger modal -->
    <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal<?php echo $article['id']?>">
        En savoir plus
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal<?php echo $article['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo htmlentities($article['name']);?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body row">
                    <div class="col-lg-6 col-md-12">
                        <img src="<?php echo htmlentities($article['picture']);?>" class="card-img-top" alt="classeur" />
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p class="textmodal">
                            <span class="prix"><?php echo htmlentities($article['price']) .'€';?></span><br><p><?php echo htmlentities($article['description']);?></p>
                        <h6>Caractéristiques :</h6>
                        <ul>
                            <li>- Différentes tailles et colories</li>
                            <li>- 100% matière recyclable</li>
                        </ul>

                    </div>
                </div>
                <div class="modal-footer row ">

                    <div class = 'col-lg-3 col-md-12'>

                        <button type="button" class="btn btn_ts">Ajouter dans mon panier</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
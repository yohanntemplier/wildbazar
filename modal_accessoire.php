<div class="col-lg-4 col-md-5 col-sm-8 card settings_card">
    <img src="<?php echo $products[$key]['picture'] ?>" class="card-img-top card-ts" alt="<?php echo $products[$key]['title'] ?>">
    <p class="price badge-secondary"><?php echo $products[$key]['price']; ?>&euro;</p>
    <div class="card-body">
        <h5 class="card-title card_title_ts"><?php echo $products[$key]['title']; ?></h5>
        <button type="button" class="btn btn_ts col-12" data-toggle="modal" data-target="#modal-ts-1<?php echo $products[$key]['modal'] ?>">En savoir plus</button>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" id="modal-ts-1<?php echo $products[$key]['modal'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-ts-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo $products[$key]['title'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <img src="<?php echo $products[$key]['picture'] ?>" class="card-img-top col-lg-6 col-md-12" alt="<?php echo $products[$key]['title'] ?>">
                    <p class="col-lg-6 col-md-12 desc-ts"><span class="prix-ts"><?php echo $products[$key]['price'] ?>&euro;</span> <br></p>
                </div>
                <p class="carac-modal">Caracteristiques</p>
                <ul>
                    <li><?php echo $products[$key]['colors']; ?></li>
                    <li><?php echo $products[$key]['size']; ?></li>
                    <li><?php echo $products[$key]['madein']; ?></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn_ts">Ajouter dans mon panier</button>
            </div>
        </div>
    </div>
</div>
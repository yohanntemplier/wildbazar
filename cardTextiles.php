<div class="card col-lg-4 col-sm-8 col-md-4">


    <img src="<?= $product[$key]['image']; ?>" class="card-img-top img-thumbnail bébé" alt="">


        <div class="top-right badge-pill badge-secondary"><?= $product[$key]['price']; ?></div>


            <div class="card-body col-lg-3">
                <p class="card-title"></p>


                <!-- Button trigger modal -->
                        <button type="button" class="btn col-lg-3" data-toggle="modal" data-target="#exampleModal<?= $product[$key]['modal']; ?>">
                        En savoir plus
                        </button>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?= $product[$key]['modal']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">


                                <h5 class="modal-title" id="exampleModalLabel"><?= $product[$key]['title']; ?></h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>

                                <div class="modal-body row">

                                    <div class="col-lg-6 col-md-4">
                                        <img src= "<?= $product[$key]['image']; ?>" class="img-thumbnail"  alt="Culotte" />
                                    </div>
                                    <div class="col-lg-6 col-md-4">
                                        <p class="textmodal">

                                            <span class="prix"><?= $product[$key]['price']; ?></span><br>

                                            <?= $product[$key]['description']; ?>

                                        </p>

                                    </div>
                                </div>
                                <div class="modal-footer flex-column ">
                                    <h6>Caractéristiques</h6>
                                    <ul>
                                        <li><?= $product[$key]['size']; ?></li>
                                        <li><?= $product[$key]['composition']; ?></li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>


</div>

<!-- fin Cards -->




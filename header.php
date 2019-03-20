<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2A5762;">
    <a class="navbar-brand" href="index.php">
            <img src="https://imagizer.imageshack.com/img923/8125/xjvCju.png" alt="..." class="photo">
            <p class="nav-link2"><span class="s1">W</span>ild<span class="s1">B</span>azar</p>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                    <li class="nav-item active">
                            <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="PageTextiles.php">Textiles</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="vaisselle.php">Vaisselle</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="papeterie.php">Papeterie</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="page_animaux3.php">Animalerie</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="accessoire.php">Accessoires</a>
                    </li>
            </ul>
    </div>
</nav>
<h2 class="title-banner col-12"><?php echo $categoryTitle ?></h2>
<div class="row justify-content-center">
    <p class="title-desc-banner col-12"><?php echo $categoryDescription ?></p>
    <button type="button" class="btn btn1">+ ADD NEW</button>
</div>
<img src="<?php echo $categoryPicture ?>" class="img-cover" alt="Photo de couverture Wild Bazar Animalerie">
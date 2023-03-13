<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
<meta charset="utf-8" />
<title><?= $title ?></title>
<?php require('../assets/lib/externals.php') ?>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0 fs-5">
                <li class="nav-item">
                <a class="nav-link title-f active background-nav" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link title-f background-nav" href="#">JDR</a>
                </li>
                <li class="nav-item">
                <a class="nav-link title-f background-nav" href="#">Association</a>
                </li>
                <li class="nav-item">
                <a class="nav-link title-f background-nav" href="#">événement</a>
                </li>
                <li class="nav-item">
                <a class="nav-link title-f background-nav" href="#">Actualité</a>
                </li>
                <li class="nav-item">
                <a class="nav-link title-f background-nav" href="#">Contactez-nous</a>
                </li>
            </ul>
        </nav>   
    </header>
    <main>
        <?= $content ?>
    </main>
    <footer>
        <div class="container-fluid text-center mt-5">
            <div class="row">
                <div class="col">
                    Mentions légales :
                </div>
                <div class="col">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At officia labore dicta tenetur incidunt? Facilis, voluptates delectus, eligendi nesciunt sint, hic suscipit tempore nisi iste quia iure iusto enim ab.
                </div>
                <div class="col">
                    <a href="https://www.facebook.com/JoueursdeChimeres/?locale=fr_FR"><i class="fa-brands fa-facebook fa-2xl"></i></a>
                    <a href="https://joueursdechimeres.forumactif.com/"><i class="fa-solid fa-comment fa-2xl ms-3 me-3"></i></a>
                    <a href="https://www.google.com/maps/place/Association+de+jeux+de+r%C3%B4les+Les+Joueurs+de+Chim%C3%A8res/@49.3013212,2.6081633,15z/data=!4m6!3m5!1s0x47e635b89821f977:0xe8c21b41ea93bcb2!8m2!3d49.3013212!4d2.6081633!16s%2Fg%2F11c5b7n3b0"><i class="fa-solid fa-map-location-dot fa-2xl"></i></a>
                </div>
            </div>
            <div class="row" id="footer"></div>
        </div>  
    </footer>
<?php require('../assets/lib/externalsJS.php') ?>
</body>
</html>
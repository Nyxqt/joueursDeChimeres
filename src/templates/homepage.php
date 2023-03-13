<?php $title = "Accueil"; ?>
<?php ob_start(); ?>

<!-- MAIN CONTENT -->

<div class="container-fluid mb-5 p-0">
    <div id="carousel-homepage" class="carousel slide p-0 m-0 carousel-homepage h-60" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/images/tavern.png" class="d-block w-100" alt="Taverne">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/medieval-bgt.png" class="d-block w-100" alt="Ville">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/outdoor-street.png" class="d-block w-100" alt="Rue médiévale">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-homepage" data-bs-slide="prev">
            <span aria-hidden="true"><i class="fa-solid fa-arrow-left fa-xl"></i></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-homepage" data-bs-slide="next">
            <span aria-hidden="true"><i class="fa-solid fa-arrow-right fa-xl"></i></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container mt-5">
    <div class="row text-center align-items-center p-3 mt-3 mb-3">
        <div class="col">
            <i class="fa-solid fa-dragon fa-2xl">
                <span class="important-f fs-2 blur">JDR</span>
            </i>
        </div>
        <div class="col">
            <p class="text-f fs-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum hic deleniti commodi cupiditate quisquam dolorem atque vero. Error ullam odit, placeat a repellendus consequatur quo eius laborum at nulla? Aspernatur.
            </p>
        </div>
        <div class="col">
            <a class="btn btn-outline-info" href="#" role="button">Plus d'information</a>
        </div>
    </div>
    <hr />
    <div class="row text-center align-items-center p-3 mt-3 mb-3">
        <div class="col">
            <i class="fa-solid fa-landmark fa-2xl">
                <span class="important-f fs-2">Association</span>
            </i>
        </div>
        <div class="col">
            <p class="text-f fs-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum hic deleniti commodi cupiditate quisquam dolorem atque vero. Error ullam odit, placeat a repellendus consequatur quo eius laborum at nulla? Aspernatur.
            </p>
        </div>
        <div class="col">
            <a class="btn btn-outline-info" href="#" role="button">Plus d'information</a>
        </div>
    </div>
    <hr />
    <div class="row text-center align-items-center p-3 mt-3 mb-3">
        <div class="col">
            <i class="fa-solid fa-book fa-2xl">
                <span class="important-f fs-2">Evenement</span>
            </i>
        </div>
        <div class="col">
            <p class="text-f fs-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum hic deleniti commodi cupiditate quisquam dolorem atque vero. Error ullam odit, placeat a repellendus consequatur quo eius laborum at nulla? Aspernatur.
            </p>
        </div>
        <div class="col">
            <a class="btn btn-outline-info" href="#" role="button">Plus d'information</a>
        </div>
    </div>
    <hr />
    <div class="row text-center align-items-center p-3 mt-3 mb-3">
        <div class="col">
            <i class="fa-solid fa-leaf fa-2xl">
                <span class="important-f fs-2">Actualité</span>
            </i>
        </div>
        <div class="col">
            <p class="text-f fs-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum hic deleniti commodi cupiditate quisquam dolorem atque vero. Error ullam odit, placeat a repellendus consequatur quo eius laborum at nulla? Aspernatur.
            </p>
        </div>
        <div class="col">
            <a class="btn btn-outline-info" href="#" role="button">Plus d'information</a>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>
<?php
  $recipes = [
    ['title'=> 'mousse au chololat', 'description'=>'Mousse quick example text to build on the card title and make up the bulk of the card\'s content.', 'image'=>'1-chocolate-au-mousse.jpg'],
    ['title'=> 'gratin dauphinois', 'description'=>'Gratin quick example text to build on the card title and make up the bulk of the card\'s content.', 'image'=>'2-gratin-dauphinois.jpg'],
    ['title'=> 'salade', 'description'=>'Salade Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'image'=>'3-salade.jpg'],
  ];

  define('_RECIPES_IMG_PATH_', 'uploads/recipes/');
 
  include_once('templates/header.php');
 ?>





    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="Logo cuisinea"
            width="550" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Cuisinea - Recettes de cuisine</h1>
          <p class="lead">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page
            avant impression.
            Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme
            assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Voir nos recettes</button>
          </div>
        </div>
      </div>
    </div>

    <div class="row">

    <?php 
      foreach ($recipes as $key => $recipe) { ?>
        <div class="col-md-4">
        <div class="card">
          <img src="<?=_RECIPES_IMG_PATH_.$recipe['image']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?=$recipe['title']; ?></h5>
            <p class="card-text"><?=$recipe['description']; ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <?php } ?>


    </div>

    <?php

    include_once('templates/footer.php');
    ?>

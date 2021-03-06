<html>
<meta charset="utf-8" lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Provence Sénégal</title>
    
       <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css')?>" /> 
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/js/bootstrap.js')?>" /> 
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styles.css')?>" />
        <link rel="stylesheet" type="text/css" href="assets/font">
        <link href="https://fonts.googleapis.com/css?family=Trade+Winds" rel="stylesheet"> 
       <!--  <style>
            @import url('https://fonts.googleapis.com/css?family=Trade+Winds');
        </style>  -->

         <?php
                /**
                 * include css file dynamically
                 */
                  if(isset($css_files)){

                 /*   var_dump($css_files); */
                    switch(true){
                      case(is_array($css_files)):
                        foreach($css_files as $path):
                          echo "<link rel='stylesheet' href='" . $path . "'/>";
                        endforeach;
                      break;

                      default:
                        /*  var_dump($css_files);  */
                        echo "<link rel='stylesheet' href='" . $css_files . "'/>";
                      break;
 
                    }
                  }
                ?> 


       
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

     </head>

<body>

<div class="row justify-content-md-center" style="background-image: linear-gradient(to top, #E94E1B , #F2C900);">
  <div class="col col-lg-9">
    <img class="img-fluid d-xl-block d-none " src="<?= base_url('assets/img/logo.png')?>" alt="logo">
    <h1 class="font-weight-bold">Provence Sénégal</h1>
  </div>
  
  <div class="col col-lg-3">
    <!-- <h1 style="font-family: 'Trade Winds', cursive;" class="font-weight-bold">Provence Sénégal</h1> -->
      <img src="<?= base_url('assets/img/baobab.png')?>" alt="baobab">
  </div> 
</div>


<nav class="navbar navbar-expand-lg navbar bg-primary text-light" >  


  <div class="collapse navbar-collapse" id="navbarSupportedContent"><img src="<?= base_url('assets/img/frise3.png')?>">
  <a class="navbar-brand text-light font-weight-bold" href="<?php echo site_url('home')?>">Accueil</a>


    <ul class="navbar-nav mr-auto text-light">
      <li class="nav-item">
        <a class="nav-link  text-light " href="<?php echo site_url('social')?>">Social</a>
      </li>
      <li class="nav-item">
          <a class="nav-link  text-light" href="<?php echo site_url('/culturel')?>">Culturel</a>
        <li>  
            <li class="nav-item">
                <a class="nav-link text-light" href="<?php echo site_url('/contact')?>">Contact</a>
        </li>    
      <li class="nav-item">
          <a class="nav-link text-light" href="<?php echo site_url('actu')?>">Actualités</a> 
      </li>


        <?php if(!isset($_SESSION['oMember'])):?>
            <li class="nav-item">
               <a class="nav-link text-light" href="<?php echo site_url('connexion')?>"><img src="<?= base_url('assets/img/icon.png') ?>"  alt="icone utilisateur">Connexion</a>
            </li>

      <?php else: ?>
          <li class="nav-item">
                <a class="nav-link text-light" href="<?php echo site_url('logout')?>"><img src="<?= base_url('assets/img/icon.png')?>"  alt="icone utilisateur">Déconnexion</a>
            </li>
          
      <?php endif ?>      

  <li class="nav-item bg-light text-primary font-weight-bold">
                <a class="nav-link" href="<?php echo site_url('dashboard')?>">Espace Admin</a>
            </li> <!-- A remettre dans la conditon if/else -->

    </ul>
  

  </div>
</nav>

<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/img/header01.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/header02.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/header03.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 -->



<div class="container-fluid"> 
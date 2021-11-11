<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>SEIKO</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= BASEURL ?>/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= BASEURL ?>/css/fontawesome.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">

          <a class="navbar-brand active" href="<?= BASEURL ?>/index">
            <h2><em>SEIKO</em></h2>
          </a>

          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item" id="nav-home">
                <a class="nav-link" id="btn-home" href="<?= BASEURL ?>/home">Home
                </a>
              </li> 
              <li class="nav-item" id="nav-product">
                <a class="nav-link" href="<?= BASEURL ?>/product">Our Products</a>
              </li>
              <li class="nav-item" id="nav-about">
                <a class="nav-link" id="btn-about" href="<?= BASEURL ?>/about">About Us</a>
              </li>
              <?php if($_SESSION['user']['role_id'] == 1) {?>
                <li class="nav-item" id="nav-contact">
                  <a class="nav-link" href="<?= BASEURL ?>/admin">Menu Admin</a>
                </li>
              <?php }?>  
              <?php if($_SESSION['user']['role_id'] == 2) {?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Keranjang
                  </a>

                  <div class="dropdown-menu">
                    <div class="container">
                      
                    <div class="list-group">
                      
                      <a href="#" class="list-group-item list-group-item-action active">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">List group item heading</h5>
                          <small>x</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small>Donec id elit non mi porta.</small>
                      </a>
                      
                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">List group item heading</h5>
                          <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">Donec id elit non mi porta.</small>
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">List group item heading</h5>
                          <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small class="text-muted">Donec id elit non mi porta.</small>
                      </a>
                    </div>
                    
                    </div>
                  </div>

                </li>
              <?php }?>
            </ul>
          </div>

        </div>
      </nav>
    </header>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-lg">
    <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo IPB.svg" alt="Logo IPB"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ms-3">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown ms-3">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pelayanan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link" href="#">Akademik</a>
        </li>
        <li class="nav-item ms-3">
          <a class="nav-link" href="#">Asrama</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button> -->
        <button class="btn btn-primary rounded-pill">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/search.svg" alt="">
            Search
        </button>
      </form>
    </div>
  </div>
</nav>
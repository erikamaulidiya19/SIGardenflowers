<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Flowers</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link href="{!! asset('asset/plugins/bootstrap/bootstrap.min.css') !!}" rel="stylesheet">
  <!-- slick slider -->
  <link href="{!! asset('asset/plugins/slick/slick.css') !!}" rel="stylesheet">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{!! asset('asset/plugins/themify-icons/themify-icons.css') !!}">

  <!-- Main Stylesheet -->
  <link href="{!! asset('asset/css/style.css') !!}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{!! asset('asset/images/logo.png') !!}" type="image/x-icon">
  <link rel="icon" href="{!! asset('asset/images/logo.png') !!}" type="image/x-icon">

</head>

<body>
  <!-- preloader -->
  <div class="preloader">
    <div class="loader">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- /preloader -->

<header class="navigation">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href=""><img class="img-fluid" src="{!! asset('asset/images/flower.png') !!}" style="width:20em;" alt="parsa"></a>
    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navogation"
      aria-controls="navogation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navogation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link text-uppercase text-dark dropdown-toggle" href="#" id="navbarDropdown"
            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Home
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/">Homepage 1</a>
            <a class="dropdown-item" href="homepage-2.html">Homepage 2</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase text-dark" href="about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase text-dark" href="category">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase text-dark" href="contact">Contact</a>
        </li>
      </ul>
      <form class="form-inline position-relative ml-lg-4">
        <input class="form-control px-0 w-100" type="search" placeholder="Search">
        <!-- <button class="search-icon" type="submit"><i class="ti-search text-dark"></i></button> -->
        <a href="search" class="search-icon"><i class="ti-search text-dark"></i></a>
      </form>
    </div>
  </nav>
</header>

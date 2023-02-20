<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP-MVC</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

    <a class="navbar-brand" href="<?php url(); ?>">
      <img src="<?php echo BURL.'assets/images/logo.png'; ?>" width="100" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php url(); ?>">Home </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?php url('products/index'); ?>">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php url('products/add'); ?>">Add Product</a>
        </li>
        
      </ul>
    
    </div>
  </div>
</nav>

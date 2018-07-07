<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Olshop</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>

<body>

  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Olshop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
         <?php if ($this->session->userdata('logged_in')['level'] == 'admin'): ?>
          <li class="nav-item active">  
            <a class="nav-link" href="<?php echo base_url('Admin') ?>">Admin <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('Users') ?>">Users</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('Sepatu') ?>">Sepatu</a>
          </li>
          <?php else: ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('Home') ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('Cart') ?>">Cart</a>
            </li>
          <?php endif ?>
        </ul>
        <ul class="navbar-nav mr-0">
          <li class="nav-item active">
            <?php if ($this->session->userdata('logged_in')): ?>
              <a class="nav-link" href="<?php echo base_url('Login/logout') ?>">Logout</a>
              <?php else: ?>
                <a class="nav-link" href="<?php echo base_url('Login') ?>">Login</a>
              <?php endif ?>
            </li>
          </ul>
        </div>
      </nav>
    </header>
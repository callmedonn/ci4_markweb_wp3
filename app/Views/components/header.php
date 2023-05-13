<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg navbar-light shadow-sm navbar-bg-custom fixed-top">
      <div class="container d-flex justify-content-between">
        <div class="logo">
          <a href="<?php echo base_url('/'); ?>">
            <img src="<?= base_url('images/logo_landscape.png') ?>" alt="logo" width="120" />
        </a>
        </div>
        <div id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link fw-bold" aria-current="page" href="<?php echo base_url('/'); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="<?php echo base_url('templates'); ?>">Templates</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="<?php echo base_url('price'); ?>">Harga</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Portofolio</a>
            </li>
          </ul>
        </div>
        <div id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item d-flex align-items-center me-3">
              <img src="<?= base_url('images/cart.png') ?>" alt="cart" width="25" />
              <p class="m-0 p-0 fw-bold">(0)</p>
            </li>
            <li class="nav-item d-flex align-items-center">
              <button class="btn-custom-primary">Masuk</button>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->
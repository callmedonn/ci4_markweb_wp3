<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/x-icon" href="<?= base_url('images/fav.png') ?>">
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
                <button class="klik-cart-button" style="background-color: transparent; outline: none; border:none;">
                  <img src="<?= base_url('images/cart.png') ?>" alt="cart" width="25" />
                </button>
                <p class="m-0 p-0 fw-bold" id="number-cart"></p>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a href="<?php echo base_url('auth/login'); ?>">
                  <button class="btn-custom-primary">Masuk</button>
              </a>
              </li>
              </li>
            </ul>
            
        </div>
      </div>
    </nav>

    <script>
      // Mendapatkan elemen dengan id "number-cart" dan mengambil kontennya
      const getCart = document.querySelector("#number-cart");
      const cart = JSON.parse(localStorage.getItem("templateIds"));

      getCart.innerHTML = `( ${cart.length} )`;

          // Menangkap klik tombol dengan class "cart-button"
    document.querySelectorAll('.klik-cart-button').forEach(button => {
        button.addEventListener('click', () => {
            // Arahkan pengguna ke halaman cart dengan menggunakan ID template
            window.location.href = '<?= base_url('/templates/cart?ids=') ?>' + cart
        });
    });
    </script>
    <!-- Navbar End -->
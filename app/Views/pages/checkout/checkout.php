<!DOCTYPE html>
<html>
<head>
<title>MarkWeb - Checkout</title>
  <link rel="stylesheet" href="assets/css/globalStyle.css">

   <!-- Framework bootstrap 5 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

   <link rel="stylesheet" href="<?= base_url('css/globalStyle.css') ?>">
</head>
<body>
	<?= $this->include('components/header') ?>
     <!-- Section Checkout Start -->
     <section class="kxx">
      <?php if (empty($templates)) : ?>
                  <p>Tidak ditemukan hasil.</p>
              <?php else : ?>
                  <?php foreach ($templates as $template) : ?>
                    <div class="container mt-3">
        <img  src="<?= base_url('images/img_web.png') ?>" alt="imgwe" width="200" />
        <div>
          <h3 class="ms-5"><?= $template['title']; ?></h3>
          <p class="ms-5">Rp. <?= $template['price']; ?></p>
          <!-- <button class="btn-custom-danger ms-5">Hapus</button> -->
        </div>
      </div>
        <?php endforeach; ?> 
              <?php endif; ?>
    </section>
    <!-- Section Checkout End -->

    <!-- Section Metode Pembayaran Go To Start -->
    <section>
      <div class="container gotom p-3">
        <h5 class="mt-3">Metode Pembayaran</h5>
        <div class="mt-3">
          <button class="btn-custom-primary">Transfer Bank BCA</button>
          <button class="btn-custom-disabled ms-3">BCA Oneklik</button>
          <button class="btn-custom-disabled ms-3">Alfamart</button>
          <button class="btn-custom-disabled ms-3">Indomaret</button>
        </div>
      </div>
    </section>
    <!-- Section Metode Pembayaran Go To End -->

    <!-- Section Checkout Go To Start -->
    <section>
      <div class="container d-flex justify-content-between goto">
        <div class="d-flex align-items-center">Dengan melanjutkan, Saya setuju dengan &nbsp; <b> Syarat & Ketentuan </b> &nbsp; yang berlaku.</div>
        <div class="d-flex flex-row; align-items-center">
          <div class="me-5">
            <h6>Total Pembelian </h6>
            <p>Rp. <?= $total; ?></p>
          </div>
          <?php if (session()->getFlashData('username')): ?>
            <form action="<?php echo base_url('order'); ?>" method="post">
              <input type="hidden" name="id_user" value="<?= session()->getFlashData('id') ?>">
              <input type="hidden" name="id_template" value="<?php echo htmlspecialchars(json_encode($resultIds)); ?>">
              <input type="hidden" name="total" value="<?= $total; ?>">
              <input type="hidden" name="status" value="pending">
              <input type="hidden" name="no_order" value="ORD23010001">
              <button type="submit" class="btn-custom-primary" onclick="handlePayment()">Bayar Sekarang</button>
            </form>
        <?php else: ?>
          <a href="<?php echo base_url('auth/login'); ?>">
                          <button class="btn-custom-primary">Bayar Sekarang</button>
                      </a>
        <?php endif; ?>
        </div>
      </div>
    </section>
    <script>
        function handlePayment() {
            // Hapus item 'templateIds' dari localStorage
            localStorage.removeItem('templateIds');

            // Tampilkan pesan sukses atau lakukan tindakan lain setelah menghapus item

            // Redirect ke halaman sukses pembayaran atau lakukan tindakan lain
            window.location.href = '/payment/success';
        }
    </script>
    <!-- Section Checkout Go To End -->
	<?= $this->include('components/footer') ?>
  
</body>
</html>
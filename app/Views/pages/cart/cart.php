<!DOCTYPE html>
<html>
<head>
	<title>Contoh Page</title>
  <link rel="stylesheet" href="assets/css/globalStyle.css">

   <!-- Framework bootstrap 5 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

   <link rel="stylesheet" href="<?= base_url('css/globalStyle.css') ?>">
</head>
<body>
<?= $this->include('components/header') ?>

    <!-- Section Checkout Start -->
    <section class="kxx">
      <div class="container mt-3">
        <img src="<?= base_url('images/img_web.png') ?>" alt="imgwe" width="200" />
        <div>
          <h3 class="ms-5">Landing Page</h3>
          <p class="ms-5">Rp. 200.000</p>
          <button class="btn-custom-danger ms-5">Hapus</button>
        </div>
      </div>
    </section>
    <!-- Section Checkout End -->

    <!-- Section Checkout Go To Start -->
    <section>
      <div class="container d-flex justify-content-between goto">
        <div></div>
        <div class="d-flex flex-row; align-items-center">
          <div class="me-5">
            <h6>Total Pembelian (1)</h6>
            <p>Rp. 200.000</p>
          </div>
          <button class="btn-custom-primary">Checkout</button>
        </div>
      </div>
    </section>
    <!-- Section Checkout Go To End -->
<?= $this->include('components/footer') ?>

</body>
</html>
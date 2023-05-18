<!DOCTYPE html>
<html>
<head>
<title>MarkWeb - No Service</title>
  <link rel="stylesheet" href="assets/css/globalStyle.css">

   <!-- Framework bootstrap 5 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

   <link rel="stylesheet" href="<?= base_url('css/globalStyle.css') ?>">
</head>
<body>
	<?= $this->include('components/header') ?>
  <section class="d-flex align-items-center" style="width: 90vw; height: 90vh">
      <div class="container d-flex justify-content-center flex-column align-items-center">
        <img class="ms-5" src="<?= base_url('images/com.png') ?>"  alt="com" width="300" />
        <h3 class="ms-5">Layanan sedang dalam pengembangan</h3>
        <a href="<?php echo base_url('/'); ?>" class="text-decoration-none btn-custom-primary ms-5">
        Kembali Halaman Utama
      </a>
      </div>
    </section>
	<?= $this->include('components/footer') ?>
  
</body>
</html>
<!DOCTYPE html>
<html>

<head>
  <title>MarkWeb - Profile</title>
  <link rel="stylesheet" href="assets/css/globalStyle.css">

  <!-- Framework bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <link rel="stylesheet" href="<?= base_url('css/globalStyle.css') ?>">
</head>

<body>
  <?= $this->include('components/header') ?>


  <!-- Header Start -->
  <div class="jumbotron jumbotron-homepage">
    <div class="container pt-5 pb-5 d-flex justify-content-center">
      <div class="jb-sc-1">
        <p class="lead text-center">Portofolio Markweb</p>
        <h1 class="text-center">Jelajahi Berbagai Pilihan <br> Template Website Berkualitas</h1>
      </div>
    </div>
  </div>
  <!-- Header End -->
  <br /><br /><br />
  <br /><br />

  <!-- Section 1 Start -->
  <section class="mt-5 section-2">
    <div class="container">
      <p class="text-center">Tidak ditemukan portofolio</p>
    </div>
    </div>
  </section>
  <!-- Section 1 End -->

  <?= $this->include('components/footer') ?>

</body>

</html>
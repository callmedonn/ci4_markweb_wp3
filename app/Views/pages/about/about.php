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


  <br /><br /><br />
  <br /><br />

  <!-- Section Header Start -->
  <section class="mb-5">
    <div class="container d-flex flex-column flex-column-reverse align-items-center">
      <h4 class="text-center mt-2"> Kami Menyediakan Layanan Pembuatan Website dan Penyedia <br /> Template Berkualitas
        Tinggi untuk Bisnis
        Anda</h4>
      <h2 class="title-section mt-4">Tentang MarkWeb.id</h2>
      <div class="mt-4">
        <img src="<?= base_url('images/logo_landscape.png') ?>" alt="logo_landscape">
      </div>
    </div>
  </section>
  <!-- Section Header End -->
  <br /><br /> <br /><br />
  <!-- Section 1 Start -->
  <section class="mb-5">
    <div class="container">
      <h6 class="title-section">Tentang Kami</h6>
      <h4> Mengenal Bisnis kami dari Penjualan Template Website dan Jasa Pembuatan Website</h4>
      <div class="mt-4">
        MarkWeb.id adalah usaha bisnis yang bergerak di bidang penjualan template website dan jasa pembuatan website.
        Kami memiliki tim
        yang berpengalaman dalam mengembangkan website yang sesuai dengan kebutuhan klien. Visi kami adalah menjadi
        perusahaan terkemuka
        yang dapat memberikan solusi website yang inovatif dan efektif bagi klien kami. Kami berkomitmen untuk
        memberikan layanan yang
        terbaik dengan harga yang terjangkau. <br />
        <br />
        Misi kami adalah membantu klien dalam mencapai tujuan bisnis mereka melalui website yang menarik, mudah
        digunakan, dan efektif. Kami
        juga terus mengembangkan diri dalam hal teknologi dan tren desain terbaru untuk memberikan hasil terbaik bagi
        klien kami. Kami
        menawarkan berbagai macam template website yang dapat disesuaikan dengan kebutuhan klien, mulai dari website
        perusahaan, toko
        online, hingga website personal. Selain itu, kami juga menyediakan jasa pembuatan website custom yang dapat
        disesuaikan dengan
        kebutuhan dan budget klien.
        <br />
        <br />
        Keunggulan kami adalah tim yang berpengalaman dan profesional dalam mengembangkan website, desain yang menarik
        dan responsif, serta
        harga yang terjangkau. Kami juga memberikan layanan purna jual yang baik untuk memastikan klien kami puas dengan
        hasil kerja kami.
        Jangan ragu untuk menghubungi kami untuk konsultasi atau pemesanan template website atau jasa pembuatan website.
        Kami siap membantu
        Anda mencapai tujuan bisnis Anda melalui website yang efektif dan inovatif.
      </div>
    </div>
  </section>
  <!-- Section 1 End -->

  <!-- Section 2 Start -->
  <section class="mt-5 section-2">
    <div class="container">
      <h6 class="title-section">Visi & Misi</h6>
      <h4>Mengetahui Visi & Misi Bisnis Usaha</h4>
      <div class="mt-4 d-flex ">
        <div class="p-3" style="background-color: #226cff;">
          <h5 class="text-white">Visi MarkWeb.id</h5>
          <p class="text-white">
            Menjadi usaha bisnis yang terdepan dalam menyediakan solusi website dan template berkualitas tinggi untuk
            memenuhi kebutuhan
            bisnis dan personal konsumen.
          </p>
        </div>
        <div class="p-3" style="background-color: #226cff;">
          <h5 class="text-white">Misi MarkWeb.id</h5>
          <p class="text-white">
            Menyediakan template website berkualitas tinggi dengan harga yang terjangkau, Mengembangkan inovasi dan
            teknologi terbaru untuk
            meningkatkan kualitas produk dan layanan.
          </p>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Section 2 End -->

  <?= $this->include('components/footer') ?>

</body>

</html>
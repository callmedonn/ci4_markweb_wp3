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

	    <!-- Header Start -->
			<div class="jumbotron jumbotron-homepage">
      <div class="container pt-5 pb-5 d-flex justify-content-between">
        <div class="jb-sc-1">
          <p class="lead">Bangun Website Professional</p>
          <h1>Solusi Mudah untuk Membuat <br />Website berkualitas</h1>
          <p class="mt-4">Kami Menyediakan Layanan Pembuatan Website dan Penyedia Template Berkualitas Tinggi untuk Bisnis Anda</p>
          <p class="lead">
            <button class="btn-custom-white">Lihat Penawaran</button>
          </p>
        </div>
        <div class="jb-sc-1">
          <img   src="<?= base_url('images/img_header.png') ?>" alt="img_header" width="400" />
        </div>
      </div>
    </div>
    <!-- Header End -->
    <br /><br /><br />
    <br /><br />

    <!-- Section 1 Start -->
    <section class="mb-5">
      <div class="container">
        <h6 class="title-section">Mengapa Harus di MARKWEB?</h6>
        <h4>Meningkatkan Fungsi Website Bisnis Anda dengan Fitur dari Jasa Kami</h4>
        <div class="row mt-5">
          <div class="col-md-6 mb-5">
            <img src="<?= base_url('images/design_pro.png') ?>" alt="design" width="100" />
            <h6 class="fw-bold mt-2">Desain profesional</h6>
            <p class="p-0 m-0">Jasa website dan template yang berkualitas akan memberikan desain yang profesional dan menarik untuk website bisnis Anda.</p>
          </div>
          <div class="col-md-6 mb-5">
            <img src="<?= base_url('images/mobile_friend.png') ?>" alt="design" width="45" />
            <h6 class="fw-bold mt-2">Mobile Friendly</h6>
            <p class="p-0 m-0">Responsife pada semua perangkat, termasuk desktop, tablet, dan ponsel, sehingga memastikan pengunjung situs dapat mengakses situs dengan mudah.</p>
          </div>
          <div class="col-md-6 mb-5">
            <img src="<?= base_url('images/seo_friend.png') ?>" alt="design" width="65" />
            <h6 class="fw-bold mt-2">SEO-friendly</h6>
            <p class="p-0 m-0">Jasa pembuatan website yang baik akan memastikan bahwa website Anda ramah SEO, sehingga meningkatkan peringkat website Anda pada hasil pencarian.</p>
          </div>
          <div class="col-md-6 mb-5">
            <img src="<?= base_url('images/support_live.png') ?>" alt="design" width="65" />
            <h6 class="fw-bold mt-2">Dukungan deploy</h6>
            <p class="p-0 m-0">website yang telah dibangun akan di bantu oleh tim kami untuk proses deploy, seperti konfigurasi DNS, pembaruan server, dan penanganan masalah teknis.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Section 1 End -->

    <!-- Section 2 Start -->
    <section class="mt-5 section-2">
      <div class="container">
        <h6 class="title-section">Template Website</h6>
        <h4>Temukan Template Website Terbaik untuk Bisnis Anda</h4>
        <div class="row mt-4">
          <div class="col-md-6">
            <div class="card-custom-sc-6">
              <div class="p-10 d-flex justify-content-center sc-cst">
              <img src="<?= base_url('images/img_web.png') ?>" alt="img_web" width="60%"></div>
              <div class="p-4 sub-title-sc">
              <div class="d-flex justify-content-between">
                <h5>Landing Page</h5>
                <h6>Free</h6>
              </div>
              </div>
            </div>
          </div>  
          <div class="col-md-6">
            <div class="card-custom-sc-6">
              <div class="p-10 d-flex justify-content-center sc-cst">
              <img src="<?= base_url('images/img_web.png') ?>" alt="img_web" width="60%"></div>
              <div class="p-4 sub-title-sc">
              <div class="d-flex justify-content-between">
                <h5>Landing Page</h5>
                <h6>Free</h6>
              </div>
              </div>
            </div>
          </div>  
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-5 mb-5">
        <button class="btn-custom-primary">Tampilkan Lebih</button>
      </div>
    </section>
    <!-- Section 2 End -->

    <!-- Section 3 Start -->
    <section class="mt-5 section-3">
      <div class="container">
        <h6 class="title-section">Paket Pembuatan Website</h6>
        <h4>Temukan Paket Pembuatan Website yang Sesuai dengan Bisnis Anda</h4>

        <div class="row d-flex justify-content-between mt-4">
          <div class="p-4 cnt-sc-3">
          <h5 class="text-center">Basic</h5>
          <p class="text-center m-0 p-0">Landing page</p>
          <h2 class="text-center mt-4 mb-4">Rp. 600.000</h2>
          <div class="text-center">
            <button class="btn-custom-secondary">Pilih Paket</button>
          </div>
          <p class="mt-4 mb-4">
            Cocok untuk bisnis kecil atau individu yang ingin memiliki website sederhana dengan informasi dasar tentang produk atau layanan yang ditawarkan.
          </p>
          <ul class="ul-sc-3">
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">Unlimited Hosting</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">Gratis Sertifikat SSL</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">5 pilihan tema</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">Integrasi Media Sosial</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">Mobile Friendly</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">SEO Friendly</div>
              </div>
            </li>
          </ul>
          </div>
          <div class="p-4 cnt-sc-3">
          <h5 class="text-center">Intermediate</h5>
          <p class="text-center m-0 p-0">Company Profile / Komunitas</p>
          <h2 class="text-center mt-4 mb-4">Rp. 1.900.000</h2>
          <div class="text-center">
            <button class="btn-custom-secondary">Pilih Paket</button>
          </div>
          <p class="mt-4 mb-4">
            Cocok untuk perusahaan atau bisnis yang membutuhkan website yang kompleks dengan informasi lebih detail tentang produk atau layanan.
          </p>
          <ul class="ul-sc-3">
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">Unlimited Hosting & SSL</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">Request desain</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">5 halaman website</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">Integrasi Media Sosial</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">Mobile Friendly</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">SEO Friendly</div>
              </div>
            </li>
          </ul>
          </div>
          <div class="p-4 cnt-sc-3 mb-5">
          <h5 class="text-center">Advanced</h5>
          <p class="text-center m-0 p-0">Toko Online / Blog</p>
          <h2 class="text-center mt-4 mb-4">Rp. 2.500.000</h2>
          <div class="text-center">
            <button class="btn-custom-secondary">Pilih Paket</button>
          </div>
          <p class="mt-4 mb-4">
            Cocok untuk bisnis yang ingin menjual produk secara online atau blog dengan berbagai macam artikel seperti website berita.
          </p>
          <ul class="ul-sc-3">
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">Unlimited Hosting</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">Gratis Sertifikat SSL</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">Request desain</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">Gratis maintenance 1 bulan</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">Integrasi Wordpress</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">Integrasi Media Sosial</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">Mobile Friendly</div>
              </div>
            </li>
            <li>
              <div class="d-flex">
                <img class="me-2" src="<?= base_url('images/check_icon.png') ?>" alt="check_icon" width="20">
                <div class="p-0 m-0">SEO Friendly</div>
              </div>
            </li>
          </ul>
          </div>
        </div>
    </section>
    <!-- Section 3 End -->

    <!-- Section 4 Start -->
    <div class="jumbotron jumbotron-fluid mt-5 jumbotron-consultant">
      <div class="container d-flex justify-content-between align-items-center">
       <div class="bg-sc-1">
        <h4 >Konsultasi Pembuatan Website Anda bersama <span class="cl-prm">MarkWeb</span></h4>
        <p>konsultasi bersama tim  kami untuk menentukan solusi terbaik dalam membuat website. Hubungi kami sekarang untuk memulai langkah pertama meningkatkan online  bisnis Anda.</p>
     <button class="btn-custom-primary">Konsultasi sekarang</button>
      </div>
       <div class="bg-sc-1">
      <img src="<?= base_url('images/technic.png') ?>" alt="technic" width="500">
      </div>
      </div>
    </div>
    <!-- Section 4 End -->


	<?= $this->include('components/footer') ?>
</body>
</html>
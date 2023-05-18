<!DOCTYPE html>
<html>
<head>
<title>MarkWeb - Templates</title>
  <link rel="stylesheet" href="assets/css/globalStyle.css">

   <!-- Framework bootstrap 5 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

   <link rel="stylesheet" href="<?= base_url('css/globalStyle.css') ?>">
</head>
<body>
	<?= $this->include('components/header') ?>
      <!-- Header Start -->
      <div class="jumbotron jumbotron-homepage">
      <div class="container pt-5 pb-5 d-flex justify-content-center">
        <div class="jb-sc-1">
          <p class="lead text-center">Template Markweb</p>
          <h1 class="text-center">Jelajahi Berbagai Pilihan <br> Template Website Berkualitas</h1>
          <!-- Search Templates -->
          <form action="<?= base_url('templates') ?>" method="GET">
            <div class="search d-flex align-items-center search-template">
              <input class="ms-3 inpt-search" type="search" name="keyword" id="search" value="<?= $keyword ?>"  >
              <button type="submit" class="d-flex align-items-center justify-content-center btn-search-tem">
                <p class="m-0 p-0">Cari Template</p>
              </button>
            </div>
          </form>
          <!-- Form Pencarian --> 
        </div>
      </div>
    </div>
    <!-- Header End -->
    <br /><br /><br />
    <br /><br /> 

        <!-- Section 1 Start -->
        <section class="mt-5 section-2">
          <div class="container"> 
            <div class="row mt-4">
            <?php if (empty($templates)) : ?>
                  <p>Tidak ditemukan hasil pencarian.</p>
              <?php else : ?>
                  <?php foreach ($templates as $template) : ?>
                <div class="col-md-4" >
                  <div class="card-custom-sc-6">
                    <div class="p-10 d-flex justify-content-center sc-cst">
                    <img src="<?= base_url('uploads/' . $template['image']) ?>"  alt="img_web" width="60%"> 
                  <div class="overlay">
                  <button class="me-3 btn-view" >
                  <a href="<?= base_url('templates/' . $template['id']) ?>">
                <img src="<?= base_url('images/eye.svg') ?>"   alt="eye" width="30">
            </a>
                  </button>
                  <button  class="btn-eye">
                    <img src="<?= base_url('images/cart.svg') ?>"  alt="cart" width="30">
                  </button>
                  </div>
                  </div>
                    <div class="p-4 sub-title-sc">
                    <div class="d-flex justify-content-between">
                      <h5><?= $template['title']; ?></h5>
                      <h6><?= $template['price']; ?></h6>
                    </div>
                    </div>
                  </div>
                </div>  
        <?php endforeach; ?> 
              <?php endif; ?>
            </div>
          </div> 
        </section>
        <!-- Section 1 End -->
	  <?= $this->include('components/footer') ?>
  
</body>
</html>
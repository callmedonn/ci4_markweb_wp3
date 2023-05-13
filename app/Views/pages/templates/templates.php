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
      <div class="container pt-5 pb-5 d-flex justify-content-center">
        <div class="jb-sc-1">
          <p class="lead text-center">Template Markweb</p>
          <h1 class="text-center">Jelajahi Berbagai Pilihan <br> Template Website Berkualitas</h1>
          <!-- Search Templates -->
          <form action="">
            <div class="search d-flex align-items-center search-template">
              <input class="ms-3 inpt-search" type="search" name="search" id="search">
              <button class="d-flex align-items-center justify-content-center btn-search-tem">
                <p class="m-0 p-0">Cari Template</p>
              </button>
            </div>
          </form>
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
              <div class="col-md-4">
                <div class="card-custom-sc-6">
                  <div class="p-10 d-flex justify-content-center sc-cst">
                  <img src="<?= base_url('images/img_web.png') ?>" alt="img_web" width="80%">    <div class="overlay">
            <button class="me-3 btn-view" >
              <img src="<?= base_url('images/eye.svg') ?>"  alt="eye" width="30">
            </button>
            <button  class="btn-eye">
              <img src="<?= base_url('images/cart.svg') ?>"  alt="cart" width="30">
            </button>
            </div></div>
                  <div class="p-4 sub-title-sc">
                  <div class="d-flex justify-content-between">
                    <h5>Landing Page</h5>
                    <h6>Free</h6>
                  </div>
                  </div>
                </div>
              </div>  
              <div class="col-md-4">
                <div class="card-custom-sc-6">
                  <div class="p-10 d-flex justify-content-center sc-cst">
                  <img src="<?= base_url('images/img_web.png') ?>" alt="img_web" width="80%">    <div class="overlay">
            <button class="me-3 btn-view" >
              <img src="<?= base_url('images/eye.svg') ?>"  alt="eye" width="30">
            </button>
            <button  class="btn-eye">
              <img src="<?= base_url('images/cart.svg') ?>"  alt="cart" width="30">
            </button>
            </div></div>
                  <div class="p-4 sub-title-sc">
                  <div class="d-flex justify-content-between">
                    <h5>Landing Page</h5>
                    <h6>Free</h6>
                  </div>
                  </div>
                </div>
              </div>  
              <div class="col-md-4">
                <div class="card-custom-sc-6">
                  <div class="p-10 d-flex justify-content-center sc-cst">
                  <img src="<?= base_url('images/img_web.png') ?>" alt="img_web" width="80%">    <div class="overlay">
            <button class="me-3 btn-view" >
              <img src="<?= base_url('images/eye.svg') ?>"  alt="eye" width="30">
            </button>
            <button  class="btn-eye">
              <img src="<?= base_url('images/cart.svg') ?>"  alt="cart" width="30">
            </button>
            </div></div>
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
        </section>
        <!-- Section 1 End -->
	<?= $this->include('components/footer') ?>
  
</body>
</html>
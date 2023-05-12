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

    <!-- Detail Start -->
    <section>
      <div class="container sc-detail">
        <div class="row cdixx">
          <div class="col-md-6 d-flex align-items-center cdix-1">
            <img   src="<?= base_url('images/img_web.png') ?>" alt="imgweb" width="100%" />
          </div>
          <div class="col-md-6 p-4 d-flex justify-content-between flex-column cdix-2">
            <div>
              <h3>Landing Page</h3>
              <p class="p-0 m-0 fw-bold">Description :</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p class="p-0 m-0 fw-bold">Technology :</p>
              <ul>
                <li>HTML 5</li>
                <li>CSS</li>
              </ul>
            </div>
            <div class="d-flex justify-content-between">
              <p class="fw-bold">Rp. 200.000</p>
              <div>
                <button class="btn-custom-primary me-2">Preview</button>
                <button class="btn-custom-primary">Beli</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Detail End -->
<?= $this->include('components/footer') ?>

</body>
</html>
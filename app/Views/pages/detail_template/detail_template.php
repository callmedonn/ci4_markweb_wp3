<!DOCTYPE html>
<html>

<head>
  <title>MarkWeb - Detail</title>
  <link rel="stylesheet" href="assets/css/globalStyle.css">

  <!-- Framework bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <link rel="stylesheet" href="<?= base_url('css/globalStyle.css') ?>">
</head>

<body>
  <?= $this->include('components/header') ?>

  <!-- Detail Start -->
  <section>
    <div class="container sc-detail">
      <div class="row cdixx">
        <div class="col-md-6 d-flex align-items-center cdix-1">
          <img src="<?= base_url('uploads/' . $template['image']) ?>" alt="imgweb" width="100%" />
        </div>
        <div class="col-md-6 p-4 d-flex justify-content-between flex-column cdix-2">
          <div>
            <h3>
              <?= $template['title']; ?>
            </h3>
            <p class="p-0 m-0 fw-bold">Description :</p>
            <p>
              <?= $template['description']; ?>
            </p>
            <p class="p-0 m-0 fw-bold">Technology :</p>
            <ul>
              <li>
                <?= $template['stacks']; ?>
              </li>
            </ul>
          </div>
          <div class="d-flex justify-content-between">
            <p class="fw-bold">
              <?php if ($template['price'] == 0): ?>
                Free
              <?php else: ?>
                Rp.
                <?= $template['price'] ?>
              <?php endif; ?>
            </p>
            <div>
              <a class="btn-custom-primary me-2 text-decoration-none"
                href="<?php echo base_url('templates/assets_template?query=' . $template['url']); ?>">
                Preview
              </a>
              <button class="btn-custom-primary" onclick="goCheckout(<?= $template['id']; ?>)">Beli</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <script>
    function goCheckout(array) {
      // Arahkan pengguna ke halaman cart dengan menggunakan ID template
      window.location.href = '<?= base_url('/templates/checkout?ids=') ?>' + array
    }
  </script>
  <!-- Detail End -->
  <?= $this->include('components/footer') ?>

</body>

</html>
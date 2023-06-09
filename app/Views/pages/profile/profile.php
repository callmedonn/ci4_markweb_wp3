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
  <!-- Profile Start -->
  <section style="margin-top: 150px">
    <div class="container">
      <div class="d-flex flex-column align-items-center justify-content-center mt-5">
        <img src="<?= base_url('images/profile.png') ?>" alt="profile" width="200" />
        <h3 class="fw-bold mt-3">
          <?= session()->getFlashData('fullname') ?>
        </h3>
        <?php session()->keepFlashdata('fullname'); ?>
        <button class="btn-custom-green">Member</button>
      </div>

      <div>
        <div class="d-flex username align-items-center">
          <h6 class="me-3 title-inpt">Username</h6>
          <div class="p-2 inpt-prof">
            <?= session()->getFlashData('username') ?>
          </div>
          <?php session()->keepFlashdata('username'); ?>
        </div>
        <div class="d-flex email align-items-center mt-2">
          <h6 class="me-3 title-inpt">Email</h6>
          <div class="p-2 inpt-prof">
            <?= session()->getFlashData('email') ?>
          </div>
        </div>

        <button class="btn-custom-primary mt-4">Ganti Password</button>
      </div>
    </div>
  </section>
  <!-- Profile End -->

  <!-- History Order Start -->
  <section class="history-order">
    <div class="container">
      <div class="box-history p-3">
        <h4 class="mb-4">Riwayat Pemesanan Template</h4>
        <?php if (empty($templates)): ?>
          <p>Tidak ditemukan hasil pencarian.</p>
        <?php else: ?>
          <?php foreach ($templates as $template): ?>
            <div class="card-download d-flex align-items-center">
              <img class="ms-3" src="<?= base_url('uploads/' . $template['image']) ?>" alt="imgweb" width="200" />
              <div class="d-flex justify-content-between flex-row ms-3" style="width: 100%">
                <div class="d-flex flex-column">
                  <p class="fw-bold text-uppercase">
                    <?= $template['no_order'] ?> -
                    <?= $template['status'] ?>
                  </p>
                  <p class="fs-3 fw-bold">
                    <?= $template['title'] ?>
                  </p>
                  <p class="fw-bold">
                    <?php if ($template['price'] == 0): ?>
                      Free
                    <?php else: ?>
                      Rp.
                      <?= $template['price'] ?>
                    <?php endif; ?>
                  </p>
                </div>
                <div class="d-flex align-items-center me-4">
                  <?php if ($template['status'] == 'success'): ?>
                    <a href="<?= base_url('uploads/' . $template['link_download']) ?>" download
                      class="btn-custom-green-cst text-decoration-none">Download</a>
                  <?php else: ?>
                    <div></div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- History Order End -->
  <!-- History Subscribe Start -->
  <section class="history-order">
    <div class="container">
      <div class="box-history p-3">
        <h4 class="mb-4">Berlangganan</h4>
        <div class="d-flex align-items-center flex-column prof-subs">
          <img src="<?= base_url('images/com.png') ?>" alt="com" width="200" />
          <p class="text-muted">Tidak tersedia..</p>
          <button class="btn-custom-primary">Kunjungi Paket Website</button>
        </div>
      </div>
    </div>
  </section>
  <!-- History Subscribe End -->
  <section class="mt-5">
    <div class="container d-flex justify-content-between">
      <div></div>
      <button class="btn-custom-primary" onclick="logout()">Logout</button>

      <!-- Form logout yang tersembunyi -->
      <form id="logoutForm" method="post" style="display: none;">
        <input type="hidden" name="logout" value="1">
      </form>
    </div>
  </section>

  <script>
    const logout = () => {
      swal({
        title: "Are you sure you want to logout?",
        text: "Once logged out, you will not be able to recover your session!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
        .then((willLogout) => {
          if (willLogout) {
            swal("You have been logged out!", {
              icon: "success",
            })
              .then(() => {
                // Redirect ke halaman logout di CodeIgniter
                window.location.href = "<?php echo site_url('logout'); ?>";
              });
          } else {
            swal("Your session is safe!");
          }
        });
    }
  </script>
  <?= $this->include('components/footer') ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MarkWeb | Dashboard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= base_url('admin/img/svg/logo.svg') ?>" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?= base_url('admin/css/style.min.css') ?>">
</head>

<body>
  <div class="layer"></div>
  <!-- ! Body -->
  <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
  <div class="page-flex">
    <!-- ! Sidebar -->
    <aside class="sidebar">
      <div class="sidebar-start">
        <div class="sidebar-head">
          <a href="/dashboard" class="logo-wrapper" title="Home">
            <span class="sr-only">Home</span>
            <!-- <span class="icon logo" aria-hidden="true"></span> -->
            <img src="<?= base_url('images/mw_mini.png') ?>" alt="mw_mini" width="50">
            <div class="logo-text">
              <span class="logo-subtitle">Dashboard</span>
            </div>
          </a>
          <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
            <span class="sr-only">Toggle menu</span>
            <span class="icon menu-toggle" aria-hidden="true"></span>
          </button>
        </div>
        <div class="sidebar-body">
          <ul class="sidebar-body-menu">
            <li>
              <a href="/dashboard"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
            </li>
          </ul>
          <ul class="sidebar-body-menu">
            <li>
              <a href="<?php echo base_url('/admin/templates'); ?>"><span class="icon edit"
                  aria-hidden="true"></span>Templates</a>
            </li>
            <li>
              <a href="<?php echo base_url('/admin/order'); ?>"><span class="icon edit"
                  aria-hidden="true"></span>Orders</a>
            </li>
            <li>
              <a class="active" href="<?php echo base_url('/admin/user'); ?>"><span class="icon edit"
                  aria-hidden="true"></span>Users</a>
            </li>
            <li>
              <a href="##"><span class="icon setting" aria-hidden="true"></span>Settings</a>
            </li>
          </ul>
        </div>
      </div>
    </aside>
    <?= $this->include('pages/admin/components/navbar') ?>
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Users</h2>
        <div class="row stat-cards">
          <div class="col-md-6 col-xl-3">
            <article class="stat-cards-item">
              <div class="stat-cards-icon warning">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">
                  <?= $usersCount ?>
                </p>
                <p class="stat-cards-info__title">Total users</p>
              </div>
            </article>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9">
            <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Role</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $user): ?>
                    <tr>
                      <td>
                        <?= $user['username'] ?>
                      </td>
                      <td>
                        <?= $user['fullname'] ?>
                      </td>
                      <td><span class="badge-active">
                          <?= $user['role'] ?>
                        </span></td>
                      <td>
                        <?= $user['createdDate'] ?>
                      </td>
                      <td>
                        <button style="background-color: transparent;" onclick="deleteUser(<?= $user['id'] ?>)">
                          <img src="<?= base_url('images/trash-solid.svg') ?>">
                        </button>
                      </td>
                    </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class=" col-lg-3">
            <article class="white-block">
              <div class="top-cat-title">
                <h3>Top categories</h3>
                <p>28 Categories, 1400 Posts</p>
              </div>
              <ul class="top-cat-list">
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">Lifestyle <span>8.2k</span></div>
                    <div class="top-cat-list__subtitle">Dailiy lifestyle articles <span class="purple">+472</span></div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">Tutorials <span>8.2k</span></div>
                    <div class="top-cat-list__subtitle">Coding tutorials <span class="blue">+472</span></div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">Technology <span>8.2k</span></div>
                    <div class="top-cat-list__subtitle">Dailiy technology articles <span class="danger">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">UX design <span>8.2k</span></div>
                    <div class="top-cat-list__subtitle">UX design tips <span class="success">+472</span></div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">Interaction tips <span>8.2k</span></div>
                    <div class="top-cat-list__subtitle">Interaction articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">App development <span>8.2k</span></div>
                    <div class="top-cat-list__subtitle">Mobile development articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">Nature <span>8.2k</span></div>
                    <div class="top-cat-list__subtitle">Wildlife animal articles <span class="warning">+472</span></div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">Geography <span>8.2k</span></div>
                    <div class="top-cat-list__subtitle">Geography articles <span class="primary">+472</span>
                    </div>
                  </a>
                </li>
              </ul>
            </article>
          </div>
        </div>
      </div>
    </main>
    <script>
      function deleteUser(id) {
        console.log(id, "masuk id")
        swal({
          title: "Are you sure delete?",
          text: "Once deleted, you will not be able to recover this imaginary file!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
          .then((willDelete) => {
            if (willDelete) {
              fetch('http://localhost:8080/user/del/' + id, {
                method: 'DELETE',
                headers: {
                  'Content-Type': 'application/json'
                }
              })
                .then(response => {
                  if (!response.ok) {
                    throw new Error('Terjadi kesalahan saat melakukan permintaan.');
                  }
                  console.log('Data berhasil dihapus.');
                })
                .catch(error => {
                  console.error(error);
                });

              swal("Template has been deleted!", {
                icon: "success",
              });

              window.location.href = '/admin/user';

            } else {
              swal("Your imaginary file is safe!");
            }
          });
      }
    </script>
    <?= $this->include('pages/admin/components/footer') ?>

</body>

</html>
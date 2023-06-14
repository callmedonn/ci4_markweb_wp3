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
              <a class="active" href="<?php echo base_url('/admin/orders'); ?>"><span class="icon edit"
                  aria-hidden="true"></span>Templates</a>
            </li>
            <li>
              <a href="<?php echo base_url('/admin/order'); ?>"><span class="icon edit"
                  aria-hidden="true"></span>Orders</a>
            </li>
            <li>
              <a href="<?php echo base_url('/admin/user'); ?>"><span class="icon edit"
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
        <h2 class="main-title">Detail Order</h2>
        <div class="row">
          <form action="<?= base_url('order/upd/' . $order['id']) ?>" method="POST"
            style="background-color: white; padding: 50px; border-radius: 10px">
            <div class="d-flex flex-column">
              <table>
                <tr>
                  <td>
                    <label for="no_order">No Order</label>
                  </td>
                  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td>
                    <input type="text" name="no_order" id="no_order" style="background-color: #eff0f6; width: 500px"
                      value="<?= $order['no_order'] ?>" placeholder="Enter no_order...">
                  </td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td>
                    <label for="status">Status</label>
                  </td>
                  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td>
                    <select name="status" id="status">
                      <option value="" selected disabled hidden>Choose here</option>
                      <option value="success">Success</option>
                      <option value="reject">Reject</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td>
                    <div style="background-color: #0061f7; padding:10px; display:flex; justify-content: center;">
                      <a href="<?= base_url('images/bukti_tf.jpg') ?>" target="_blank">
                        <img src="<?= base_url('images/bukti_tf.jpg') ?>" alt="img_web" width="100">
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td> <button type="submit"
                      style="background-color: #0061f7;padding: 10px 100px; border-radius: 8px; color: white">Update</button>
                  </td>
                </tr>
              </table>
            </div>
          </form>
        </div>
      </div>
    </main>
    <script>
      function deleteTemplate(id) {
        swal({
          title: "Are you sure delete?",
          text: "Once deleted, you will not be able to recover this imaginary file!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
          .then((willDelete) => {
            if (willDelete) {
              fetch('http://localhost:8080/orders/' + id, {
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

              window.location.href = '/admin/orders';

            } else {
              swal("Your imaginary file is safe!");
            }
          });
      }
    </script>
    <?= $this->include('pages/admin/components/footer') ?>

</body>

</html>
<!DOCTYPE html>
<html>

<head>
  <title>MarkWeb - Cart</title>
  <link rel="stylesheet" href="assets/css/globalStyle.css">

  <!-- Framework bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <link rel="stylesheet" href="<?= base_url('css/globalStyle.css') ?>">
</head>

<body>
  <?= $this->include('components/header') ?>

  <!-- Section Checkout Start -->
  <section class="kxx">
    <?php if (empty($templates)): ?>
      <p>Tidak ditemukan hasil.</p>
    <?php else: ?>
      <?php foreach ($templates as $template): ?>
        <div class="container mt-3">
          <img src="<?= base_url('uploads/' . $template['image']) ?>" alt="imgwe" width="200" />
          <div>
            <h3 class="ms-5">
              <?= $template['title']; ?>
            </h3>
            <p class="ms-5">
              <?php if ($template['price'] == 0): ?>
                Free
              <?php else: ?>
                Rp.
                <?= $template['price'] ?>
              <?php endif; ?>
            </p>
            <button class="btn-custom-danger ms-5" onclick="hapusItemCart( <?= $template['id']; ?>)">Hapus</button>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </section>
  <!-- Section Checkout End -->

  <!-- Section Checkout Go To Start -->
  <section>
    <div class="container d-flex justify-content-between goto">
      <div></div>
      <div class="d-flex flex-row; align-items-center">
        <div class="me-5">
          <h6 class="number-cart"></h6>
          <p>Rp.
            <?= $total; ?>
          </p>
        </div>
        <button class="btn-custom-primary"
          onclick="goCheckout(<?php echo htmlspecialchars(json_encode($resultIds)); ?>)">Checkout</button>
      </div>
    </div>
  </section>
  <script>
    // Mendapatkan elemen dengan id "number-cart" dan mengambil kontennya
    const totalCart = document.querySelector(".number-cart");
    const carts = JSON.parse(localStorage.getItem("templateIds"));
    totalCart.innerHTML = `Total Pembelian ( ${carts.length} )`;

    function hapusItemCart(id) {
      // Ambil data cart dari localstorage
      var cart = localStorage.getItem('templateIds');

      // Pastikan data cart tidak kosong
      if (cart) {
        // Ubah data cart menjadi array JavaScript
        var cartArray = JSON.parse(cart);

        // Cari indeks item dengan id yang sesuai dalam array cart
        var index = cartArray.findIndex(function (item) {
          return item === id.toString();
        });
        // Jika indeks item ditemukan, hapus item dari array
        if (index !== -1) {
          cartArray.splice(index, 1);

          // Ubah kembali array cart menjadi string JSON
          var updatedCart = JSON.stringify(cartArray);

          // Simpan kembali data cart ke localstorage
          localStorage.setItem('templateIds', updatedCart);
          // Tampilkan pesan sukses atau lakukan tindakan lainnya
          console.log('Item berhasil dihapus dari cart.');
          swal({
            title: "Success Hapus Cart!",
            text: "You clicked the button!",
            icon: "success",
          });
          setTimeout(() => {
            // Refresh halaman
            // Arahkan pengguna ke halaman cart dengan menggunakan ID template
            window.location.href = '<?= base_url('/templates/cart?ids=') ?>' + cartArray
          }, 1000);

        }
      }
    }

    function goCheckout(array) {
      // Arahkan pengguna ke halaman cart dengan menggunakan ID template
      window.location.href = '<?= base_url('/templates/checkout?ids=') ?>' + array
    }
  </script>

  <!-- Section Checkout Go To End -->
  <?= $this->include('components/footer') ?>

</body>

</html>
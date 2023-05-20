<!DOCTYPE html>
<html>
<head>
<title>MarkWeb - Payment</title>
  <link rel="stylesheet" href="assets/css/globalStyle.css">

   <!-- Framework bootstrap 5 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
   <style> 
    </style>
   <link rel="stylesheet" href="<?= base_url('css/globalStyle.css') ?>">
</head>
<body>
<?= $this->include('components/header') ?>

    <!-- Section Checkout Go To Start -->
    <section>
      <div class="container d-flex justify-content-between goto">
        <div class="d-flex align-items-center">Dengan melanjutkan, Saya setuju dengan &nbsp; <b> Syarat & Ketentuan </b> &nbsp; yang berlaku.</div>
        <div class="d-flex flex-row; align-items-center">
          <div class="me-5">
            <h6>Total Pembelian</h6>
            <p>Rp. <?= $total; ?></p>
          </div>
        </div>
      </div>
    </section>
    <!-- Section Checkout Go To End -->

    <!-- Section CountDown Start -->
    <section>
      <div class="container d-flex justify-content-between gotocstm">
        <div class="d-flex align-items-center">Bayar Dalam</div>
        <div class="d-flex flex-row; align-items-center">
          <div class="me-5 count" id="countdown"></div>
        </div>
      </div>
    </section>
    <!-- Section CountDown End -->

    <!-- Section Rekening Start -->
    <section>
      <div class="container d-flex justify-content-between gotocstm">
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center ms-2">Status</div>
        </div>
        <div class="d-flex flex-row; align-items-center">
          <div class="me-5 count"><?= $status; ?></div>
        </div>
      </div>
    </section>
    <!-- Section Rekening End -->
    <!-- Section Rekening Start -->
    <section>
      <div class="container d-flex justify-content-between gotocstm">
        <div class="d-flex align-items-center">
          <img  src="<?= base_url('images/logo_bca.png') ?>" alt="bca" width="80" />
          <div class="d-flex align-items-center ms-2">Transfer Bank BCA</div>
        </div>
        <div class="d-flex flex-row; align-items-center">
          No Rekening :
          <div class="me-5 count">126 0877 7077 6163</div>
        </div>
      </div>
    </section>
    <!-- Section Rekening End -->

    <!-- Section Rule Start -->
    <section>
      <div class="container gotocstmxx p-3">
        <h6>Petunjuk Transfer mBanking</h6>
        <ol>
          <li>Pilih &nbsp; <b>m-Transfer > BCA Virtual Account</b></li>
          <li>Masukkan nomor Virtual Account &nbsp; <b>126 0877 7077 6163</b> &nbsp; dan pilih Send.</li>
          <li>Periksa informasi yang tertera dilayar. Pastikan Merchant adalah &nbsp; <b>MarkWeb</b> . Jika benar pilih &nbsp;<b>Ya</b>.</li>
          <li>Masukkan PIN m-BCA anda dan pilih &nbsp; <b>OK</b>.</li>
          <li>Jika sudah berhasil &nbsp;<b>Choose File</b> untuk upload bukti transfer, dikolom pembayaran.</li>
          <li>Dan lakukan &nbsp;<b>Submit</b> pembayaran.</li>
        </ol>
       <div >
       <form class="d-flex justify-content-between" action="<?= base_url('order/image') ?>" method="post" enctype="multipart/form-data">
        <input class="btn-custom-primary mt-5 d-flex" type="file" name="image" id="image">
        <input type="hidden" name="id" value="<?= $idOrder; ?>">
        <button type="submit" class="cstm-button-byr btn-custom-primary mt-5 d-flex">Submit</button>
    </form>

       </div>
      </div>
    </section>
    <!-- Section Rule End -->
    <script>
      // Menangkap klik tombol dengan class "register-cstm-button"
      document.querySelectorAll('.cstm-button-byr').forEach(button => {
        button.addEventListener('click', (e) => { 
          // e.preventDefault();

            swal({
            title: "Success Payment!",
            text: "You clicked the button!",
            icon: "success",
          }); 

        });
    });
</script>
    <script>
        // Waktu akhir countdown (diatur sesuai kebutuhan)
        var endTime = new Date();
        endTime.setHours(endTime.getHours() + 23);
        endTime.setMinutes(endTime.getMinutes() + 57);
        endTime.setSeconds(endTime.getSeconds() + 19);

        function countdown() {
            var now = new Date().getTime();
            var distance = endTime - now;

            var hours = Math.floor(distance / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            var countdownElement = document.getElementById("countdown");
            countdownElement.innerHTML = hours + " jam " + minutes + " menit " + seconds + " detik";

            // Jika waktu countdown habis, hentikan countdown
            if (distance <= 0) {
                clearInterval(countdownInterval);
                countdownElement.innerHTML = "Countdown selesai";
            }
        }

        // Memulai countdown dan memperbarui setiap 1 detik
        var countdownInterval = setInterval(countdown, 1000);
    </script>
<?= $this->include('components/footer') ?>

</body>
</html>
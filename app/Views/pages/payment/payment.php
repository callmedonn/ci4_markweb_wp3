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

    <!-- Section Checkout Go To Start -->
    <section>
      <div class="container d-flex justify-content-between goto">
        <div class="d-flex align-items-center">Dengan melanjutkan, Saya setuju dengan &nbsp; <b> Syarat & Ketentuan </b> &nbsp; yang berlaku.</div>
        <div class="d-flex flex-row; align-items-center">
          <div class="me-5">
            <h6>Total Pembelian</h6>
            <p>Rp. 200.000</p>
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
          <div class="me-5 count">23 jam 57 menit 19 detik</div>
        </div>
      </div>
    </section>
    <!-- Section CountDown End -->

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
          <li>Jika sudah berhasil &nbsp;<b>upload bukti transfer</b>, dikolom pembayaran.</li>
        </ol>
        <button class="btn-custom-primary mt-5 d-flex">Upload Bukti Transfer</button>
      </div>
    </section>
    <!-- Section Rule End -->
<?= $this->include('components/footer') ?>

</body>
</html>
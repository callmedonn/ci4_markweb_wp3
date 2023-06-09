<!DOCTYPE html>
<html>
<head>
<title>MarkWeb - Cart</title>
  <link rel="stylesheet" href="assets/css/globalStyle.css">

   <!-- Framework bootstrap 5 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

   <link rel="stylesheet" href="<?= base_url('css/globalStyle.css') ?>">

   <style> 

 
      .login-container {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        padding: 40px;
        width: 100%;
      }

      .login-container h2 {
        text-align: center;
        margin-bottom: 30px;
      }

      .login-container input[type="text"],
      .login-container input[type="password"] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 20px;
        font-size: 16px;
      }

      .login-container button {
        background-color: #226cff;
        color: white;
        padding: 12px 20px;
        border: 1px solid  #226cff;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
        transition:.3s
      }

      .login-container button:hover {
        background-color: transparent;
        color: #226cff;

      }

      .login-container p {
        text-align: center;
        margin-top: 20px;
      }

      .login-container p a {
        color: #4caf50;
        text-decoration: none;
      }
   </style>
</head>
<body>
<?= $this->include('components/header') ?>
<div class="container d-flex align-items-center justify-content-center" style="width: 100vw; height: 100vh;">
<div class="login-container ">
      <h2>Register</h2>
      <form action="<?= base_url('user') ?>" method="POST">
        <input type="text" name="fullname" placeholder="Full Name" required />
        <input type="text" name="username" placeholder="Username" required />
        <input type="text" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="password" name="confirm" placeholder="Confirmation Password" />
        <button class="register-cstm-button" type="submit">Register</button>
      </form>
      <p>Sudah punya akun?  <a href="<?php echo base_url('auth/login'); ?>">Login</a>
    </p>
    </div>
</div>
<script>
      // Menangkap klik tombol dengan class "register-cstm-button"
      document.querySelectorAll('.register-cstm-button').forEach(button => {
        button.addEventListener('click', (e) => { 
          // e.preventDefault();

            swal({
            title: "Success Register!",
            text: "You clicked the button!",
            icon: "success",
          }); 

        });
    });
</script>
<?= $this->include('components/footer') ?>

</body>
</html>
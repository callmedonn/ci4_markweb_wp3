<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Blog By Tahu Coding</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">

  <style>
    :root {
      --darkGray: #2d3748;
      --gray: #4a5568;
      --grayLight: #f7fafc;
      --primary: #6b46c1;
    }

    body {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      font-family: "Inter", sans-serif;
    }

    .navbar {
      background: white;
      height: 85px;
      display: flex;
      padding: 0 10%;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 2px 4px 0 rgba(1, 1, 1, 0.1);
    }

    .navbar>h1 {
      font-size: 20px;
      font-weight: bolder;
    }

    .nav-menu {
      display: flex;
      gap: 30px;
    }

    .hero-container {
      display: flex;
      height: 470px;
      padding: 0 10%;
    }

    .hero-container>div {
      width: 50%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .hero-container h1 {
      font-size: 60px;
      width: 360px;
      margin: 20px 0;
      font-weight: bolder;
    }

    .hero-container p {
      font-size: 30px;
      color: var(--gray);
    }

    .hero-container>img {
      width: 50%;
      height: 323px;
      align-self: center;
    }

    .description-container {
      height: 280px;
      margin: 40px 0;
      padding: 0 10%;
      display: flex;
    }

    .description-container>div {
      width: 60%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      box-shadow: 0px 4px 8px 0px rgba(1, 1, 1, 0.1);
      border-top: 1px solid rgb(228, 228, 228);
    }

    .description-container h2 {
      color: var(--darkGray);
      font-weight: bolder;
    }

    .description-container p {
      color: var(--gray);
    }

    .description-container>div>div {
      width: 500px;
    }

    .description-container>img {
      width: 40%;
      object-fit: cover;
    }

    .description-left-footer {
      display: flex;
      justify-content: space-between;
    }

    .content-container {
      min-height: 400px;
      margin: 40px 0;
      padding: 0 10%;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
    }

    .content-container .card {
      height: 100%;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(1, 1, 1, 0.1);
      transform: 0.3s;
    }

    .card:hover {
      box-shadow: 0 4px 8px 0 rgba(1, 1, 1, 0.2);
      cursor: pointer;
    }

    .card>img {
      object-fit: fill;
      height: 240px;
      width: 100%;
    }

    .card>.card-body {
      padding: 20px;
    }

    .card h3 {
      font-size: 20px;
      margin: 0 15px 0 0;
    }

    .card p {
      color: var(--gray);
      font-size: 16px;
    }

    .card>.card-footer {
      display: flex;
      justify-content: space-between;
      padding: 0 20px;
    }

    .what-is-container {
      height: 600px;
      padding: 0 10%;
      display: flex;
      margin: 40px 0;
    }

    .what-is-container h1 {
      font-size: 60px;
    }

    .what-is-container p {
      color: var(--gray);
      font-size: 16px;
    }

    .what-is-container>div {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      width: 48%;
      background: yellow;
      background: var(--grayLight);
    }

    .what-is-container>div>div {
      width: 400px;
    }

    .what-is-container>img {
      width: 52%;
      background: red;
    }

    .what-is-container>div>.footer {
      display: flex;
      justify-content: space-between;
    }

    .button-container {
      display: flex;
      justify-content: flex-end;
      padding: 0 10%;
      margin: 40px 0;
    }

    .btn {
      background: var(--primary);
      outline: none;
      border: none;
      padding: 10px 15px;
      color: white;
      border-radius: 5px;
      font-weight: bold;
    }

    footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 10%;
      height: 80px;
    }

    footer>div {
      display: flex;
      gap: 30px;
    }

    /*utils */

    .font-weight-bold {
      font-weight: bold;
    }

    @media only screen and (max-width: 420px) {
      .hero-container {
        flex-wrap: wrap;
        height: 100%;
      }

      .hero-container>div {
        width: 100%;
        height: 250px;
      }

      .hero-container>img {
        width: 100%;
        height: 100%;
      }

      .hero-container h1 {
        font-size: 36px;
        text-align: center;
        width: 100%;
      }

      .hero-container p {
        font-size: 22px;
        text-align: center;
      }

      .content-container {
        grid-template-columns: 1fr;
      }

      .description-container {
        flex-wrap: wrap;
        height: 100%;
      }

      .description-container h2,
      .description-container p {
        text-align: center;
      }

      .description-container>div {
        width: 100%;
        padding: 5%;
      }

      .description-container>div>div {
        width: 100%;
      }

      .description-container>img {
        width: 100%;
        height: 200px;
      }

      .what-is-container {
        flex-wrap: wrap;
        height: 100%;
        flex-direction: column-reverse;
      }

      .what-is-container>div {
        width: 100%;
      }

      .what-is-container>div>div {
        width: 100%;
      }

      .what-is-container>img {
        width: 100%;
      }

      .what-is-container h1 {
        font-size: 36px;
        text-align: center;
        width: 100%;
      }

      .what-is-container p {
        width: 100%;
        font-size: 18px;
        text-align: center;
      }

      nav>.nav-menu {
        display: none;
      }

      .card img {
        height: 200px;
      }

      .button-container {
        justify-content: center;
      }

      footer {
        flex-direction: column-reverse;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar">
    <h1>Tahu Coding</h1>
    <div class="nav-menu">
      <p>Home</p>
      <p>Articles</p>
      <img src="<?= base_url('images/instagram.svg') ?>" alt="instagram">
      <img src="<?= base_url('images/twitter.svg') ?>" alt="twitter">
      <img src="<?= base_url('images/linkedin.svg') ?>" alt="linkedin">
    </div>
  </nav>
  <section class="hero-container">
    <div>
      <div>
        <h1>Make better coffee
        </h1>
        <p>why learn how to blog?</p>
      </div>
    </div>
    <img src="<?= base_url('images/hero.svg') ?>" alt="hero">
  </section>
  <section class="description-container">
    <div>
      <div>
        <h2> long established</h2>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when
          looking at its layout. The point of using Lorem Ipsum is that....</p>
      </div>
      <div class="description-left-footer">
        <p>May 20th 2020</p>
        <p class="font-weight-bold">Read more</p>
      </div>
    </div>
    <img src="<?= base_url('images/desc.png') ?>" alt="desc">
  </section>
  <section class="content-container">
    <div class="card">
      <img src="<?= base_url('images/card1.png') ?>" alt="card1">
      <div class="card-body">
        <h3>long established</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when
          looking at its layout. The point of using Lorem Ipsum is that....</p>
      </div>
      <div class="card-footer">
        <p>May 20th 2020</p>
        <p class="font-weight-bold">Read more</p>
      </div>
    </div>
    <div class="card">
      <img src="<?= base_url('images/card2.png') ?>" alt="card2">
      <div class="card-body">
        <h3>long established</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when
          looking at its layout. The point of using Lorem Ipsum is that....</p>
      </div>
      <div class="card-footer">
        <p>May 20th 2020</p>
        <p class="font-weight-bold">Read more</p>
      </div>
    </div>
    <div class="card">
      <img src="<?= base_url('images/card3.png') ?>" alt="card3">
      <div class="card-body">
        <h3>long established</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when
          looking at its layout. The point of using Lorem Ipsum is that....</p>
      </div>
      <div class="card-footer">
        <p>May 20th 2020</p>
        <p class="font-weight-bold">Read more</p>
      </div>
    </div>
  </section>
  <section class="what-is-container">
    <div>
      <div>
        <h1>What is Lorem Ipsum?</h1>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when
          looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
          distribution...</p>
      </div>
      <div class="footer">
        <p>May 20</p>
        <p class="font-weight-bold">Read more</p>
      </div>
    </div>
    <img src="<?= base_url('images/desc2.png') ?>" alt="what-is">
  </section>
  <section class="button-container">
    <button class="btn">See More Now</button>
  </section>
  <footer>
    <p><b>hotcoffee</b> 2020 copyright all rights reserved</p>
    <div>
      <img src="<?= base_url('images/instagram.svg') ?>" alt="instagram">
      <img src="<?= base_url('images/twitter.svg') ?>" alt="twitter">
      <img src="<?= base_url('images/linkedin.svg') ?>" alt="linkedin">
    </div>
  </footer>

</body>

</html>
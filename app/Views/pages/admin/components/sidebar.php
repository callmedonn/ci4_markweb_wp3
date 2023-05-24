<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Elegant Dashboard | Dashboard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= base_url('admin/img/svg/logo.svg') ?>" type="image/x-icon" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?= base_url('admin/css/style.min.css') ?>" />
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
              <a class="active" href="/dashboard"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
            </li>
          </ul>
          <ul class="sidebar-body-menu">
            <li>
              <a href="appearance.html"><span class="icon edit" aria-hidden="true"></span>Templates</a>
            </li>
            <li>
              <a href="appearance.html"><span class="icon edit" aria-hidden="true"></span>Orders</a>
            </li>
            <li>
              <a href="appearance.html"><span class="icon edit" aria-hidden="true"></span>Users</a>
            </li>
            <li>
              <a href="##"><span class="icon setting" aria-hidden="true"></span>Settings</a>
            </li>
          </ul>
        </div>
      </div>
    </aside>
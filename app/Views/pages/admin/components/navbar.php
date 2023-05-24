<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
      <div class="container main-nav">
        <div class="main-nav-start">
          <div class="search-wrapper">
            <i data-feather="search" aria-hidden="true"></i>
            <input type="text" placeholder="Enter keywords ..." required />
          </div>
        </div>
        <div class="main-nav-end">
          <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
            <span class="sr-only">Toggle menu</span>
            <span class="icon menu-toggle--gray" aria-hidden="true"></span>
          </button>
          <div class="lang-switcher-wrapper">
            <button class="lang-switcher transparent-btn" type="button" onclick="logout()">
              Logout
              <i data-feather="chevron-down" aria-hidden="true"></i>
            </button>
          </div>
          <div class="notification-wrapper">
            <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
              <span class="sr-only">To messages</span>
              <span class="icon notification active" aria-hidden="true"></span>
            </button>
            <ul class="users-item-dropdown notification-dropdown dropdown">
              <li>
                <a href="##">
                  <div class="notification-dropdown-icon info">
                    <i data-feather="check"></i>
                  </div>
                  <div class="notification-dropdown-text">
                    <span class="notification-dropdown__title">System just updated</span>
                    <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                      here.</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="##">
                  <div class="notification-dropdown-icon danger">
                    <i data-feather="info" aria-hidden="true"></i>
                  </div>
                  <div class="notification-dropdown-text">
                    <span class="notification-dropdown__title">The cache is full!</span>
                    <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                      interfere ...</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="##">
                  <div class="notification-dropdown-icon info">
                    <i data-feather="check" aria-hidden="true"></i>
                  </div>
                  <div class="notification-dropdown-text">
                    <span class="notification-dropdown__title">New Subscriber here!</span>
                    <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
                  </div>
                </a>
              </li>
              <li>
                <a class="link-to-page" href="##">Go to Notifications page</a>
              </li>
            </ul>
          </div>
          <div class="nav-user-wrapper">
            <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
              <span class="sr-only">My profile</span>
              <span class="nav-user-img">
                <picture>
                  <source srcset=" <?= base_url('admin/img/avatar/avatar-illustrated-02.webp') ?>" type="image/webp" />
                  <img src=" <?= base_url('admin/img/avatar/avatar-illustrated-02.png') ?>" alt="User name" />
                </picture>
              </span>
            </button>
            <ul class="users-item-dropdown nav-user-dropdown dropdown">
              <li>
                <a href="##">
                  <i data-feather="user" aria-hidden="true"></i>
                  <span>Profile</span>
                </a>
              </li>
              <li>
                <a href="##">
                  <i data-feather="settings" aria-hidden="true"></i>
                  <span>Account settings</span>
                </a>
              </li>
              <li>
                <a class="danger" href="##">
                  <i data-feather="log-out" aria-hidden="true"></i>
                  <span>Log out</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
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
    <!-- ! Main -->
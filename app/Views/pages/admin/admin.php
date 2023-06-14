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
  <?= $this->include('pages/admin/components/sidebar') ?>
  <?= $this->include('pages/admin/components/navbar') ?>
  <!-- ! Main -->
  <main class="main users chart-page" id="skip-target">
    <div class="container">
      <h2 class="main-title">Dashboard</h2>
      <div class="row stat-cards">
        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon primary">
              <i data-feather="bar-chart-2" aria-hidden="true"></i>
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">
                <?= $user ?>
              </p>
              <p class="stat-cards-info__title">Total users</p>
            </div>
          </article>
        </div>
        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon warning">
              <i data-feather="file" aria-hidden="true"></i>
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">
                <?= $templates ?>
              </p>
              <p class="stat-cards-info__title">Total templates</p>

            </div>
          </article>
        </div>
        <div class="col-md-6 col-xl-3">
          <article class="stat-cards-item">
            <div class="stat-cards-icon purple">
              <i data-feather="file" aria-hidden="true"></i>
            </div>
            <div class="stat-cards-info">
              <p class="stat-cards-info__num">
                <?= $order ?>
              </p>
              <p class="stat-cards-info__title">Total orders</p>
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
                  <th>
                    <label class="users-table__checkbox ms-20"> <input type="checkbox" class="check-all" />Thumbnail
                    </label>
                  </th>
                  <th>Title</th>
                  <th>Status</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <label class="users-table__checkbox">
                      <input type="checkbox" class="check" />
                      <div class="categories-table-img">
                        <picture>
                          <source srcset="<?= base_url('images/img_web.png') ?>" type="image/webp" />
                          <img src="<?= base_url('images/img_web.png') ?>" alt="category" />
                        </picture>
                      </div>
                    </label>
                  </td>
                  <td>Starting your traveling blog with Vasco</td>
                  <td><span class="badge-pending">Pending</span></td>
                  <td>17.04.2021</td>
                  <td>
                    <span class="p-relative">
                      <button class="dropdown-btn transparent-btn" type="button" title="More info">
                        <div class="sr-only">More info</div>
                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                      </button>
                      <ul class="users-item-dropdown dropdown">
                        <li><a href="##">Edit</a></li>
                        <li><a href="##">Quick edit</a></li>
                        <li><a href="##">Trash</a></li>
                      </ul>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label class="users-table__checkbox">
                      <input type="checkbox" class="check" />
                      <div class="categories-table-img">
                        <picture>
                          <source srcset="<?= base_url('images/img_web.png') ?>" type="image/webp" />
                          <img src="<?= base_url('images/img_web.png') ?>" alt="category" />
                        </picture>
                      </div>
                    </label>
                  </td>
                  <td>Start a blog to reach your creative peak</td>
                  <td><span class="badge-pending">Pending</span></td>
                  <td>23.04.2021</td>
                  <td>
                    <span class="p-relative">
                      <button class="dropdown-btn transparent-btn" type="button" title="More info">
                        <div class="sr-only">More info</div>
                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                      </button>
                      <ul class="users-item-dropdown dropdown">
                        <li><a href="##">Edit</a></li>
                        <li><a href="##">Quick edit</a></li>
                        <li><a href="##">Trash</a></li>
                      </ul>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label class="users-table__checkbox">
                      <input type="checkbox" class="check" />
                      <div class="categories-table-img">
                        <picture>
                          <source srcset="<?= base_url('images/img_web.png') ?>" type="image/webp" />
                          <img src="<?= base_url('images/img_web.png') ?>" alt="category" />
                        </picture>
                      </div>
                    </label>
                  </td>
                  <td>Helping a local business reinvent itself</td>
                  <td><span class="badge-active">Active</span></td>
                  <td>17.04.2021</td>
                  <td>
                    <span class="p-relative">
                      <button class="dropdown-btn transparent-btn" type="button" title="More info">
                        <div class="sr-only">More info</div>
                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                      </button>
                      <ul class="users-item-dropdown dropdown">
                        <li><a href="##">Edit</a></li>
                        <li><a href="##">Quick edit</a></li>
                        <li><a href="##">Trash</a></li>
                      </ul>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label class="users-table__checkbox">
                      <input type="checkbox" class="check" />
                      <div class="categories-table-img">
                        <picture>
                          <source srcset="<?= base_url('images/img_web.png') ?>" type="image/webp" />
                          <img src="<?= base_url('images/img_web.png') ?>" alt="category" />
                        </picture>
                      </div>
                    </label>
                  </td>
                  <td>Caring is the new marketing</td>
                  <td><span class="badge-active">Active</span></td>
                  <td>17.04.2021</td>
                  <td>
                    <span class="p-relative">
                      <button class="dropdown-btn transparent-btn" type="button" title="More info">
                        <div class="sr-only">More info</div>
                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                      </button>
                      <ul class="users-item-dropdown dropdown">
                        <li><a href="##">Edit</a></li>
                        <li><a href="##">Quick edit</a></li>
                        <li><a href="##">Trash</a></li>
                      </ul>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label class="users-table__checkbox">
                      <input type="checkbox" class="check" />
                      <div class="categories-table-img">
                        <picture>
                          <source srcset="<?= base_url('images/img_web.png') ?>" type="image/webp" />
                          <img src="<?= base_url('images/img_web.png') ?>" alt="category" />
                        </picture>
                      </div>
                    </label>
                  </td>
                  <td>How to build a loyal community online and offline</td>
                  <td><span class="badge-active">Active</span></td>
                  <td>17.04.2021</td>
                  <td>
                    <span class="p-relative">
                      <button class="dropdown-btn transparent-btn" type="button" title="More info">
                        <div class="sr-only">More info</div>
                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                      </button>
                      <ul class="users-item-dropdown dropdown">
                        <li><a href="##">Edit</a></li>
                        <li><a href="##">Quick edit</a></li>
                        <li><a href="##">Trash</a></li>
                      </ul>
                    </span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label class="users-table__checkbox">
                      <input type="checkbox" class="check" />
                      <div class="categories-table-img">
                        <picture>
                          <source srcset="<?= base_url('images/img_web.png') ?>" type="image/webp" />
                          <img src="<?= base_url('images/img_web.png') ?>" alt="category" />
                        </picture>
                      </div>
                    </label>
                  </td>
                  <td>How to build a loyal community online and offline</td>
                  <td><span class="badge-active">Active</span></td>
                  <td>17.04.2021</td>
                  <td>
                    <span class="p-relative">
                      <button class="dropdown-btn transparent-btn" type="button" title="More info">
                        <div class="sr-only">More info</div>
                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                      </button>
                      <ul class="users-item-dropdown dropdown">
                        <li><a href="##">Edit</a></li>
                        <li><a href="##">Quick edit</a></li>
                        <li><a href="##">Trash</a></li>
                      </ul>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-3">
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
                  <div class="top-cat-list__subtitle">Dailiy technology articles <span class="danger">+472</span></div>
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
                  <div class="top-cat-list__subtitle">Interaction articles <span class="warning">+472</span></div>
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
                  <div class="top-cat-list__subtitle">Geography articles <span class="primary">+472</span></div>
                </a>
              </li>
            </ul>
          </article>
        </div>
      </div>
    </div>
  </main>
  <?= $this->include('pages/admin/components/footer') ?>

</body>

</html>
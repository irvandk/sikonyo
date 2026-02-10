<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <?= $this->renderSection('title') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
<link rel="stylesheet" href="<?=base_url()?>/template/assets/css/components.css">
<link rel="stylesheet" href="<?=base_url()?>/template/assets/css/custom.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>

        </form>
        <ul class="navbar-nav navbar-right">
          
          <?php if(session()->get('isLoggedIn')): ?>
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="<?= base_url() ?>/template/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, <?= session()->get('nama') ?></div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in as <?= ucfirst(session()->get('role')) ?></div>
                <div class="dropdown-divider"></div>
                <a href="<?= site_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
              </div>
            </li>

          <?php else: ?>
            <li class="nav-item">
              <a href="<?= site_url('login') ?>" class="nav-link nav-link-lg">
                <div class="d-sm-none d-lg-inline-block btn btn-primary btn-sm">
                    <i class="fas fa-sign-in-alt"></i> Login
                </div>
                <i class="fas fa-sign-in-alt d-lg-none"></i>
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
          <a href="<?= site_url() ?>" style="display: flex; align-items: center; text-decoration: none; color: inherit;">
            <img src="icon/logo.png"  style="max-width: 50px; height: auto; margin-right: 10px; margin-left: 10px;">
            <span>Sistem Pemetaan Kuliner <br> dan Oleh-Oleh Khas Jogja</span>
          </a>
            <!-- <a href="<?= site_url() ?>">Sistem Pemetaan Kuliner <br> dan Oleh-Oleh Khas Jogja </a> -->
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= site_url() ?>" style="display: flex; align-items: center; text-decoration: none; color: inherit;">
              <img src="icon/logo.png" style="max-width: 50px; height: auto; margin-left: 10px; margin-top: 5px;">
            </a>
          </div>
          <ul class="sidebar-menu">
          <?= $this->include('layout/menu') ?>
        </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <?= $this->renderSection('content') ?>
      </div>
    </div>
  </div>

  <!-- General JS Scripts -->
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?=base_url()?>/template/assets/js/stisla.js"></script>



  <!-- Template JS File -->
  <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/template/assets/js/custom.js"></script>

</body>
</html>

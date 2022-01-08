<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Halaman <?= $data['judul']; ?></title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?= BASEURL; ?>/images/favicon.png">
  <!-- Custom Stylesheet -->
  <link href="<?= BASEURL; ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
  <link href="<?= BASEURL; ?>/css/style.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
</head>

<body>

  <!--*******************
        Preloader start
    ********************-->
  <div id="preloader">
    <div class="sk-three-bounce">
      <div class="sk-child sk-bounce1"></div>
      <div class="sk-child sk-bounce2"></div>
      <div class="sk-child sk-bounce3"></div>
    </div>
  </div>
  <!--*******************
        Preloader end
    ********************-->


  <!--**********************************
        Main wrapper start
    ***********************************-->
  <div id="main-wrapper">

    <!--**********************************
            Nav header start
        ***********************************-->
    <div class="nav-header">
      <a href="index.html" class="brand-logo">
        <img class="logo-abbr" src="<?= BASEURL; ?>/images/logo.png" alt="">
        <img class="logo-compact" src="<?= BASEURL; ?>/images/logo-text.png" alt="">
        <img class="brand-title" src="<?= BASEURL; ?>/images/logo-text.png" alt="">
      </a>

      <div class="nav-control">
        <div class="hamburger">
          <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
      </div>
    </div>
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Header start
        ***********************************-->
    <div class="header">
      <div class="header-content">
        <nav class="navbar navbar-expand">
          <div class="collapse navbar-collapse justify-content-between">
            <div class="header-left">
              <div class="dashboard_bar">
                PHP MVC
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->
    <div class="deznav">
      <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
          <li><a class="ai-icon" href="<?= BASEURL; ?>/Home" aria-expanded="false">
              <i class="flaticon-381-home"></i>
              <span class="nav-text">Dashboard</span>
            </a>
          </li>
          <li><a class="ai-icon" href="https://github.com/Ikram-Maulana/TugasPBO/" target="_blank"
              aria-expanded="false">
              <i class="flaticon-381-network"></i>
              <span class="nav-text">Repository</span>
            </a>
          </li>
        </ul>

      </div>
    </div>
    <!--**********************************
            Sidebar end
        ***********************************-->
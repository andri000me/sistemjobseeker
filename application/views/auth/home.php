<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>JOKER</title>

  <!-- Font Awesome Icons -->
  <link href="<?= base_url('landingassets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="<?= base_url('landingassets/'); ?>https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='<?= base_url('landingassets/'); ?>https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="<?= base_url('landingassets/'); ?>vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="<?= base_url('landingassets/'); ?>css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">JOKER</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Apa Itu JOKER ?</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Joker adalah situs untuk mempermudah mahasiswa untuk mencari pekerjaan partime, intership, maupun full time</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Pelajari Lebih Lanjut</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Apa yang disediakan oleh JOKER ?</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Pada joker anda dapat mecari pekerjaan dengan mudah dan praktis. Selain itu jika anda merupakan pemilik perusahaan anda dapat mencari pekerja yang cocok dan sesuai dengan pekerjaan yang anda iklankan.</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Job Category</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-4 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-user-clock text-primary mb-4"></i>
            <h3 class="h4 mb-2">Part Time Worker</h3>
            <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-calendar-alt text-primary mb-4"></i>
            <h3 class="h4 mb-2">Daily Worker</h3>
            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-user-tie text-primary mb-4"></i>
            <h3 class="h4 mb-2">Intership</h3>
            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="page-section bg-dark text-white">
    <div class="container text-center mb-8">
      <h2 class="mb-4">Daftar Sekarang!</h2>
      <a class="btn btn-light btn-xl" href="<?= base_url('auth/registration'); ?>">Daftar</a>
      <h2 class="mb-4">Login Sekarang!</h2>
      <a class="btn btn-light btn-xl" href="<?= base_url('auth/login'); ?>">Login</a>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Kontak Person</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Masih ada pertanyaan seputar JOKER? Hubungi nomor telepon dan email berikut</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+62 81 339-673-992</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:contact@yourwebsite.com">customer@joker.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">
      <span>Copyright &copy; MAHASISWA GANTENG <?= date('Y'); ?></span>
      </div>
      <div class="small text-center text-muted">Theme By Start Bootstrap</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('landingassets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('landingassets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?= base_url('landingassets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('landingassets/'); ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?= base_url('landingassets/'); ?>js/creative.min.js"></script>

</body>

</html>

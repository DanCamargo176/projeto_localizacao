<?php

$ip = $_SERVER['REMOTE_ADDR'];


  session_start();
    if(isset($_SESSION['usuario'])){
      $usuario = $_SESSION['usuario'][0];
      $userLogado = $_SESSION['usuario'];

      
      
    }else{
      echo "<script> window.location = 'login.html'</script>";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LOCALIZA-CÃO - Acesso Restrito</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!--MENU NOVO-->
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index_adm.php">LOCALIZA-CÃO<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown"><a href="#"><span>Funcionalidades</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li class="dropdown"><a href="#"><span>PET'S</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="tela_pets_adocao.php">PETS para adoção</a></li>
                  <li><a href="tela_pets_abandonados.php">PETS abandonados</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Voluntários</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="tela_voluntarios.php">Consulta de Voluntários</a></li>
                  <li><a href="tela_voluntarios.php">Exclusão de Voluntários</a></li>
                </ul>
              </li>
            </ul>
          </li>
                    <li class="dropdown"><a href="#"><span><?php echo $userLogado; ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li class="dropdown"><a href="#"><span><?php echo "Seu IP é: ". $ip; ?></span> </a></li>
              <li><a href="logout.php">Sair</a></li>
            </ul>
          </li>
          
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Sistema de Gerenciamento LOCALIZA-CÃO</h2>
          <ol>
            <li><a href="index_adm.php">Home</a></li>
            <li>Acesso Restrito</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
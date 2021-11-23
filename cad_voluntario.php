<?php
require './conexao.php';

    $ip = $_SERVER['REMOTE_ADDR'];

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LOCALIZA-CAO</title>
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

  <!-- =======================================================
  * Template Name: Gp - v4.3.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">LOCALIZA-CÃO<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Início</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre nós</a></li>
          <li><a class="nav-link scrollto" href="tela_galeria_pub.php">Galeria de Fotos</a></li>
          <li><a class="nav-link scrollto" href="#team">Blog</a></li>
          <li class="dropdown"><a href="#"><span>PET's</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="tela_desaparecidos_pub.php"><span>Desaparecidos</span></i></a>
              </li>

              <li class="dropdown"><a href="tela_adocao_pub.php"><span>Disponíveis para Adoção</span></i></a>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Fale Conosco</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <a href="login.html" class="get-started-btn scrollto">Área Administrativa</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Cadastro de Voluntários</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

<div class="container">
<form method="POST" action="insere_voluntario.php" enctype="multipart/form-data">
    <br><br>
    <h2>Dados Pessoais</h2><br>
  <div class="form-group">
    <label>Nome Completo</label>
    <input type="text" name="nome_completo" class="form-control" placeholder="Exemplo: João da Silva Pereira">
  </div>
    <div class="form-group">
    <label>Data de Nascimento</label>
    <input type="text" name="dt_nasc" class="form-control" placeholder="Exemplo: 01/01/2000">
  </div>
    <div class="form-group">
    <label>Endereço</label>
    <input type="text" name="endereco" class="form-control" placeholder="Exemplo: Rua Correia Dias, 496 - Paraíso">
  </div>
    <div class="form-group">
    <label>Celular</label>
    <input type="text" name="celular" class="form-control" placeholder="Exemplo: (11) 5084-2126">
  </div>
    <div class="form-group">
    <label>RG</label>
    <input type="text" name="rg" class="form-control" placeholder="Exemplo: 00.000.000-6">
  </div>
    <div class="form-group">
    <label>CPF</label>
    <input type="text" name="cpf" class="form-control" placeholder="Exemplo: 000.000.000-00">
  </div>
  <div class="form-group">
    <label>Profissão</label>
    <input type="text" name="profissao" class="form-control" placeholder="Exemplo: Programador">
  </div>
  <div class="form-group">
    <label>E-mail</label>
    <input type="text" name="email" class="form-control" placeholder="Exemplo: exemplo@exemplo.com.br">
  </div>
  <div class="form-group">
    <label>Informações complementares</label>
    <textarea class="form-control" rows="6" name="obs"></textarea>
  </div>
  <br><br>
  <div align="center">
  <button type="submit" class="btn btn-warning" name="Cadastrar" Value="Cadastrar">Cadastrar</button>
  <button type="reset" class="btn btn-warning" name="reset" value="Limpar">Limpar</button>
  <a href="index_adm.php" class="btn btn-warning" role="button" >Sair</a>
</div>  
</form>
</div>
<br><br>
  </main><!-- End #main -->

<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Localiza-CÃO<span>.</span></h3>
              <p>
                Rua de Exemplificação, Nº 123<br>
                São Paulo - SP<br>
                CEP: 00000-000<br>
                <strong>Telefone:</strong> +55 (12) 3456-7890<br>
                <strong>Email:</strong> localizacao@localizacao.org.br<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Mapa do Site</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Início</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Sobre nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="tela_galeria_pub.php">Galeria de Fotos</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <ul>

            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Projeto Social Localiza-CÃO</h4>
            <p></p>
            <img src="assets/img/logo.png" width="200rem" height="150rem">
          
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

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
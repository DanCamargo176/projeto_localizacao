<?php
include_once('conexao.php');
$id = $_GET['id'];
 ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Localiza-CÃO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
              <li class="dropdown"><a href="#"><span>Cães</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="http://www.intranet.policiamilitar.sp.gov.br/boletimgeral.html" target="_blank">Adoção</a></li>
                  <li class="dropdown"><a href="http://sisbol.intranet.pm.sp.gov.br/_sisbolsc8/frmlogin/" target="_blank"><span>Desaparecidos</span></a></li>                  
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>Gatos</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="http://www.intranet.policiamilitar.sp.gov.br/boletimgeral.html" target="_blank">Adoção</a></li>
                  <li class="dropdown"><a href="http://sisbol.intranet.pm.sp.gov.br/_sisbolsc8/frmlogin/" target="_blank"><span>Desaparecidos</span></a></li>                  
                </ul>
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

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Ocorrência do Mês</h2>
          <ol>
            <li><a href="index_adm.php">Home</a></li>
            <li>Ocorrência do Mês</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

<div class="container">
    <?php
                $rs = $conn->prepare("SELECT * FROM tb_adocao WHERE id=$id");;
        if($rs->execute()){
                if($rs->rowCount() > 0){
                    while($row = $rs->fetch(PDO::FETCH_OBJ)){
        
                    ?>
<form method="POST" enctype="multipart/form-data">
    <br><br>

    <div class="card-body" align="center"> <?php echo "<img src='fotos/".$row->foto_pet."' alt='Foto de exibição' width='280' height='500' /><br />"; ?></div>
    <h2 align="center">DESAPARECIDO!</h2><br>
  <div class="form-group">
    <label hidden="true">ID:</label>
    <input type="text" name="ID" class="form-control" disabled="" hidden="true" value="<?php echo $row->cod; ?>">
  </div>
    <div class="form-group">
    <label>Nome do PET:</label>
    <input type="text" name="nome_pet" class="form-control" disabled="" value="<?php echo $row->nome_pet; ?>"><br>
  </div>
  <div class="form-group">
    <label>Raça:</label>
    <input type="text" name="raca_pet" class="form-control" disabled="" value="<?php echo $row->raca_pet; ?>">
  </div><br>
  <div class="form-group">
    <label>Sexo:</label>
    <input type="text" name="sexo_pet" class="form-control" disabled="" value="<?php echo $row->sexo_pet; ?>">
  </div><br>
      <div class="form-group">
    <label>Última Localização:</label>
    <row><input type="text" name="ultima_localizacao_pet" class="form-control" disabled="" value="<?php echo $row->localizacao_pet; ?>">
    </row>
  </div><br>

    <div class="form-group">
    <label>Castração:</label><br>
    <input type="text" name="castracao" class="form-control" disabled="" value="<?php echo $row->castracao_pet; ?>"><br>
    <label>Vacinação:</label><br>
    <input type="text" name="vacinacao" class="form-control" disabled="" value="<?php echo $row->vacinacao_pet; ?>"><br>
  </div>
  <div class="form-group">
    <label>Descrição:</label>
    <textarea class="form-control" name="obs" disabled="" rows="12" ><?php echo $row->obs; ?></textarea>

  </div><br>
  <?php }}} ?>
  <br>
  <div align="center">
  <a href="tela_adocao_pub.php" class="btn btn-warning" role="button" >Voltar</a>
  </div>
  <br><br>  
</form>
</div>
<br><br>
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
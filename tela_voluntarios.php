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

  <title>LOCALIZA-CÃO</title>
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
                  <li><a href="tela_pets_abandonados.php">PETS Desaparecidos</a></li>
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
          <h2>Voluntários<a href="cad_voluntarios_adm.php"><img src="assets/img/add.png"  width="50" height="50"></a></h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<body>

	<?php
	//Lista todo o Efetivo do Banco de Dados SQL
	include_once('conexao.php');
	$rs = $conn->prepare("SELECT * FROM tb_voluntarios");;
		if($rs->execute()){
				if($rs->rowCount() > 0){?>
				
				<div class="row">
					<?php while($row = $rs->fetch(PDO::FETCH_OBJ)){?>
					<div class="thumbnail" style="width: 20rem;"> 
							<center>
							  <div class="card-body">
									<h5 class="card-title"><?php echo $row->nome . "<br />"; ?></h5>
									<p class="card-text"><?php echo $row->data_nasc . "<br />"; ?></p>
									<p class="card-text"><?php echo $row->celular . "<br />"; ?></p>
                  <p class="card-text"><?php echo $row->email . "<br />"; ?></p>
									<?php echo "<a href='detalhes_voluntarios.php?id=".$row->id."'' class='btn btn-warning' role='button''>Ver Mais</a><br><hr>";?>
									<?php echo "<a href='editar_voluntarios_adm.php?id=".$row->id."'' class='btn btn-warning' role='button''>Atualizar</a><br><hr>";?>
									<?php echo "<a href='delete_voluntarios.php?id=".$row->id."'' class='btn btn-warning' role='button''>Excluir</a><br><hr>";?>				
							  </div>
							</center>
					 </div>		  
	  


<?php 
           } ?> </div>	<!--Fecha o While-->
			
			
			<?php
         } //Fecha o 2º IF da Condição da COntagem de Linhas > 0
		
		
}	//Fecha o 1º IF DO EXECUTE
?>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Início</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Galeria de Fotos</a></li>
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
<?php

include_once('conexao.php');
// pega o codigo de list_adm





$id = $_POST['codigo'];
$sql_consuta=mysqli_query($ligar, "SELECT * FROM tb_vagas WHERE id_vagas='$id' ");
$dados=mysqli_fetch_array($sql_consuta);


$i = $dados[1];
$sql_consut=mysqli_query($ligar, "SELECT * FROM tb_empregador WHERE id='$i' ");
$dad=mysqli_fetch_array($sql_consut);


?>




<!DOCTYPE html>
<html lang="en">
<head>

     <title>Opus </title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <link rel="icon" href="images/01.png">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="list.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">
     

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg position-relative">
        <div class="container">
            <a class="navbar-brand" href="index.html">
              <i class="fa fa-line-chart"></i>
              Opus
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">Sobre a Plataforma</a>
                    </li>
                   
                    <li class="nav-item">
                        <a href="##" class="nav-link contact">Voltar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- PROJECT DETAIL -->
     <section class="project-detail section-padding-half">
          <div class="container">
               <div class="row">

                    <div class="col-lg-9 mx-auto col-md-10 col-12 mt-lg-5 text-center" data-aos="fade-up">

                      <h4>Vagas para <?= $dados[2]?></h4>

                      <h1><?= $dad[1]?></h1>
                    </div>

               </div>
          </div>
     </section>


     <!-- PROJECT DETAIL -->
      <!-- PROJECT DETAIL -->
     <section class="project-detail section-padding">
          <div class="container">
               <div class="row">

    

                 <div class="col-lg-6 col-md-6 col-12 mb-5">
                      <img src="images/project/project-detail/personal-website.png" class="img-fluid" alt="personal website" data-aos="fade-up">
                    </div>
                    <div class="col-lg-5 col-md-6 mr-lg-auto mt-lg-5 col-12" data-aos="fade-up" data-aos-delay="200">

                      <h2>Informações da vaga:</h2>

                      <p class="mt-3 mb-4">Procuramos alguem que tenha as seguintes expecificações:</p>

                      <ul class="list-detail">
                        <li><span><?= $dados[4]?></span></li>
                      </ul>
                    </div>
               </div>
              <div class="col-lg-9 mx-auto col-12" data-aos="fade-up">
                <div class="client-info mt-lg-5 py-lg-5">
                    <h3><?= $dad[7]?></h3>

                    <div class="d-flex align-items-center mt-3">
                      <img src="images/project/project-detail/male-avatar.png" class="img-fluid" alt="male avatar">

                      <p><?= $dad[2]?></p>
                    </div>
                  <p>Interesse na vaga? Clique <strong> <a href="index_usu"> Aqui!! </a> </strong></p>
                </div>
              </div>
          </div>
     </section>


    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">We make creative <strong>brands</strong> only.</h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              +99 080 070 4224
            </p>

            <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                hello@company.com
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Our Studio</h4>

            <p class="mb-1">
              <i class="fa fa-home mr-2 footer-icon"></i> 
              Centro - Pedro II - PI, Brasil
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Copyright &copy; 2020 Your Company
            <br>
            <a rel="nofollow noopener" href="https://templatemo.com">Design: TemplateMo</a></p>
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            
            <ul class="footer-link">
              <li><a href="#">Stories</a></li>
              <li><a href="#">Work with us</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="#" class="fa fa-instagram"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-dribbble"></a></li>
              <li><a href="#" class="fa fa-behance"></a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
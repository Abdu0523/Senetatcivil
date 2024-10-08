
<?php

session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsuid']==1)) {
  header('location:certificat-form.php');
  } else{
  
   
?>

  
  <!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SENETACIVIL</title>


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. -->
  <link href="assets/css/variables.css" rel="stylesheet">
  
  <!--  Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
        <h1><span>Sen&eacute;tatciviL</span></h1>
      </a>

         
              <i class="bi bi-list mobile-nav-toggle d-none"></i>
          </div>
      </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Déclaration enregistrée</h2>
          
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Block Section ======= -->
    <section class="inner-page">
      <div class="container" data-aos="fade-left">

     <h1 class="text-primary">Félicitation votre requete a bien ete enregistrée</h1>
      </div>  
      <?php
                               
$sql="SELECT * from tblcertificat where Status is null ORDER BY id DESC LIMIT 1 ";

$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
      <div class="container" data-aos="fade-right">
        <p style="font-size:18px; color:green;">
        Votre numero temporaire est :<span class="font-monospace text-black fw-bold fs-2">"<?php  echo htmlentities($row->ApplicationID);?>" </span>
      </p>
    </div>
    <?php $cnt=$cnt+1;}} ?> 
    <div class="col-md-6 col-sm-12 mx-auto text-center">
    <a href="etat-suivi.php?search=<?php echo htmlentities ($row->ID);?>" class="btn btn-info text-light">Mon etat de suivi</a>
    </div>
    </section><!-- End Inner Page -->
    <div class="container" >
      <div class="row ">
      <div class="col-md-6 col-sm-12 mx-auto text-center">
        <p style="font-size:18px;">
          Vous pouvez maintenant consulter l'etat de votre demande en utilisant le <span class="text-primary">"numero temporaire"</span>  ci dessus.
        </p>
    </div>
    <!-- ======= Block  ======= -->
   
    <section class="inner-page">
   
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

   
    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
          &copy; <?php echo date('Y'); ?> | <strong><span><a href="index.php">SEN&Eacute;TATCIVIL </a> </span></strong> - Tous droits réservés 
             
             </div>
             <div class="credits">
              
             Conçu par <a href="#">Abdou_ndour_ndiaye</a>
          </div>
        </div>

        

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php } ?>
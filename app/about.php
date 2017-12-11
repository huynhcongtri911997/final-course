<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost:8080/final-course/public/uploads/");
?>
<!DOCTYPE html>
<html>
<head>
    <?php include "lib.php"; ?> 
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>

</head>
<body style="background-color: #F0F4C3;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <?php include "menuabout.php" ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
              </a> 
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="about.php">About</a>
              <span class="sr-only">(current)</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <div class="container">
      <div class="row">
       <?php include "slide-left.php" ?> 
      <div class="col-lg-9">
     
      <?php include "slide.php" ?>
      <div class="row">
        <?php include "aboutedit.php" ?></div>
      </div>
      </div>
  </div>
<div class="footer" style=" width: auto; height: auto;"></div>
<?php include "footer.php" ?>
</body>
</html>
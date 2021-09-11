<?php require("./shared/inc/functions.inc.php"); ?>
<!Doctype html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Praxisprojekt CSS -->
    <link rel="stylesheet" href="css/index.min.css" type="text/css">

    <!-- Icons Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Golden</title>
  </head>

  <body>
    <div id="page" class=""> <!-- mobile-nav-opened -->
      <!-- navbar + header -->
      <?php require("./parts/header.php"); ?>
      <!-- Dienstleistungen -->
      <?php require("./parts/services.php"); ?>
      <!-- Portfolio -->
      <?php require("./parts/portfolio.php"); ?>
      <!-- Über uns-->
      <?php require("./parts/aboutus.php"); ?>
      <!-- Unser Team -->
      <?php require("./parts/team.php"); ?>
      <!-- Kontaktformular -->
      <?php require("./parts/contact.php"); ?>
      <!-- footer -->
      <?php require("./parts/footer.php"); ?>
    </div>
    <!-- Popper, Jquery Bootstrap JS -->
    <script type="text/javascript" src="lib/jquery/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap-5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
  </body>
</html>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  </body>
</html>

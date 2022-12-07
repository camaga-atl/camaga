<?php
$title = "CAMAGA";
$pageTitle = "CAMAGA";
$description = "Home page for CAMAGA - Carnatic Music Association of Georgia";
?>
<!DOCTYPE html>
<html lang="en">
<?php
define("CAMAGA_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/");
include(CAMAGA_ROOT . "common/html_head.php");
?>

<body id="home">
   <div class="wrapper">
      <?php
      include(CAMAGA_ROOT . "common/site_header.php");
      ?>
      <div id="content">
         <!-- upcoming concerts START  -->
         <?php
            include( CAMAGA_ROOT . "concerts/upcoming.php");
         ?>
         <!-- upcoming concerts END -->
      </div>
   </div>
</body>

</html>
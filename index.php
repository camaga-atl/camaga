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
         <br/>
         <br/>
         <p>
            <i>* membership</i><br/>
            Membership is open for 2022. Please note the <a href="member">new membership rates</a>
         </p>   
      </div>
   </div>
</body>

</html>
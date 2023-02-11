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
         <!-- 2023 great composers day -->
         <h2>Upcoming Events</h2>
            
         <!-- 2023 great composers day -->
         <div class="list-concert-box">
               <h3><a href="events#2023-great-composers-day">2023 Great Composers' Day</a></h3>
               <h4>February 18th & 19th 2023</h4>
               <p>
                  <a target="_blank" href="http://maps.google.com/?q=The Hindu Temple Of Atlanta">
                     Venue: Hindu Temple of Atlanta
                  </a>
               </p>
               <img src="events/composers-day/trinity.jpg" style="max-width: 100%; height: auto"/>
               <h4>Download Documents</h4>
               <p>
               <a href="events/2023/composers-day/2023-composers-day-program.pdf"  target="_blank">Composers Day Program Details&nbsp;&nbsp;<i class="fa fa-download"></i></a><br/>
               <a href="events/2023/composers-day/2023-composers-day-participants-list.pdf"  target="_blank">Participants List&nbsp;&nbsp;<i class="fa fa-download"></i></a>
            </p>
         </div>
         <!-- 2023 great composers day  END-->

         <!-- upcoming concerts START  -->
         <?php
            include( CAMAGA_ROOT . "concerts/upcoming.php");
         ?>
         <!-- upcoming concerts END -->
      </div>
   </div>
</body>

</html>
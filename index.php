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
            <div class="list-concert-box">
               <h3><a href="events#2023-great-composers-day">2023 Great Composers' Day</a></h3>
               <h5>February 18th & 19th 2023</h5>
               <p>
                  <a target="_blank" href="http://maps.google.com/?q=Hindu Temple Of Atlanta">
                  Venue: Hindu Temple of Atlanta
                  </a>
               </p>
               <img class="desktop" src="events/composers-day/purandaradasa.png"  />
               <img class="desktop" src="events/composers-day/syama-sastri.png"   />
               <img class="desktop" src="events/composers-day/thyagaraja.png"   />
               <img class="desktop" src="events/composers-day/muthuswami-dikshithar.png"  />
               <img class="mobile" src="events/composers-day/trinity.jpg" />
               <br/>
               <br/>
               <p>
                  Camaga will be celebrating the <a href="events#2023-great-composers-day">Great Composers’ day</a> on Sat Feb 15th and Sun Feb 16th, 2020. For more details refer <a href="events#2020-great-composers-day">here</a>
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
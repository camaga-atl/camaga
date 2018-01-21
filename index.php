<?php 
   $title="CAMAGA";
   $pageTitle="CAMAGA";
   $description="Home page for CAMAGA - Carnatic Music Association of Georgia";
   ?>
<!DOCTYPE html>
<html lang="en">
   <?php 
      define( "CAMAGA_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/" );
      include( CAMAGA_ROOT . "common/html_head.php"); 
      ?>
   <body id="home">
      <div class="wrapper">
         <?php
            include(CAMAGA_ROOT . "common/site_header.php");
            ?>
         <div id="content">
            <!-- composers day -->
            <h2>Upcoming Events</h2>
            <div class="list-concert-box">
               <h3><a href="events#composersDay">Great Composers' Day Celebrations 2018</a></h3>
               <p><i>February 17th & 18th 2018</i></p>
               <p>
                  <a target="_blank" href="http://maps.google.com/?q=Hindu Temple Of Atlanta">
                  Venue: Hindu Temple of Atlanta
                  </a>
               </p>
               <img  class="desktop" src="events/2016/composersDay/purandaradasa.png"  />
               <img class="desktop" src="events/2016/composersDay/syama-sastri.png"   />
               <img class="desktop" src="events/2016/composersDay/thyagaraja.png"   />
               <img class="desktop" src="events/2016/composersDay/muthuswami-dikshithar.png"  />
               <img class="mobile" src="events/2016/composersDay/trinity.jpg" />
               <br/>
               <br/>
               <p>
                  Camaga will be celebrating the <a href="events#composersDay">Great Composers’ day</a> on February 17th and 18th, 2018. For more details refer <a href="events#composersDay">here</a>             
               </p>
               <hr/>
               <h4>Registration Closed <sup>updated as of Jan 18, 2018</sup></h4>
               <p>
                  Thanks to all who have sent in their registration. Unfortunately, 
                  owing to overwhelming registration and constraints of time, 
                  we had to close the registration for the two-day event as of January 18, 2018 
               </p>
               <p>
                  If you have already registered, please make sure to send in the registration fee before end of January 2018.
                  As always CAMAGA thanks you for your support and cooperation.
               </p>
               <hr/>
            </div>
            <!-- composers day  END-->
            <!-- upcoming concerts START  --
               <h1><?php echo $pageTitle; ?></h1>
               <!-- upcoming concerts -->
            <?php
               include( CAMAGA_ROOT . "concerts/upcoming.php");
               ?>
            <!-- upcoming concerts END -->
            <h2>CAMAGA in Pictures</h2>
            <div id="gallery" >
               <img src="data/concerts/201708261600/thumbs/007.jpg"
                  data-image="data/concerts/201708261600/007.jpg"
                  data-description="Aug 26, 2017, Patri Satish Kumar, Abhishek Raghuram & H.N.Bhaskar" />
               <img src="data/concerts/201708261600/thumbs/001.jpg"
                  data-image="data/concerts/201708261600/001.jpg"
                  data-description="Aug 26, 2017, Patri Satish Kumar, Abhishek Raghuram & H.N.Bhaskar" />
               <img src="data/concerts/201708261600/thumbs/002.jpg"
                  data-image="data/concerts/201708261600/002.jpg"
                  data-description="Aug 26, 2017, Abhishek Raghuram" />
               <img src="data/concerts/201708261600/thumbs/003.jpg"
                  data-image="data/concerts/201708261600/003.jpg"
                  data-description="Aug 26, 2017, Patri Satish Kumar" />
               <img src="data/concerts/201708261600/thumbs/004.jpg"
                  data-image="data/concerts/201708261600/004.jpg"
                  data-description="Aug 26, 2017, Patri Satish Kumar, Abhishek Raghuram & H.N.Bhaskar" />
               <img src="data/concerts/201708261600/thumbs/005.jpg"
                  data-image="data/concerts/201708261600/005.jpg"
                  data-description="Aug 26, 2017, Abhishek Raghuram & H.N.Bhaskar" />
               <img src="data/concerts/201708261600/thumbs/006.jpg"
                  data-image="data/concerts/201708261600/006.jpg"
                  data-description="Aug 26, 2017, Patri Satish Kumar, Abhishek Raghuram & H.N.Bhaskar" />
               <img src="data/concerts/201708261600/thumbs/008.jpg"
                  data-image="data/concerts/201708261600/008.jpg"
                  data-description="Aug 26, 2017, Patri Satish Kumar, Abhishek Raghuram & H.N.Bhaskar" />
               <img src="data/concerts/201708261600/thumbs/009.jpg"
                  data-image="data/concerts/201708261600/009.jpg"
                  data-description="Aug 26, 2017, Patri Satish Kumar, Abhishek Raghuram & H.N.Bhaskar" />
               <img src="data/concerts/201708261600/thumbs/010.jpg"
                  data-image="data/concerts/201708261600/010.jpg"
                  data-description="Aug 26, 2017, Patri Satish Kumar, Abhishek Raghuram & H.N.Bhaskar" />
               <img src="data/concerts/201703251600/thumbs/IMG_0001.jpg"
                  data-image="data/concerts/201703251600/IMG_0001.jpg"
                  data-description="Mar 25, 2017, Thanjavur K Murugaboopathi. SundarKumar, Kunnakudi M.Balamuralikrishna & H.N.Bhaskar" />
               <img src="data/concerts/201703251600/thumbs/IMG_0002.jpg"
                  data-image="data/concerts/201703251600/IMG_0002.jpg"
                  data-description="Mar 25, 2017, SundarKumar &, Kunnakudi M.Balamuralikrishna" />
               <img src="data/concerts/201703251600/thumbs/IMG_0003.jpg"
                  data-image="data/concerts/201703251600/IMG_0003.jpg"
                  data-description="Mar 25, 2017, Thanjavur K Murugaboopathi & SundarKumar" />
               <img src="data/concerts/201703251600/thumbs/IMG_0005.jpg"
                  data-image="data/concerts/201703251600/IMG_0005.jpg"
                  data-description="Mar 25, 2017, H.N.Bhaskar" />
               <img src="data/concerts/201703251600/thumbs/IMG_0006.jpg"
                  data-image="data/concerts/201703251600/IMG_0006.jpg"
                  data-description="Mar 25, 2017, Kunnakudi M.Balamuralikrishna" />
               <img src="data/concerts/201703251600/thumbs/IMG_0007.jpg"
                  data-image="data/concerts/201703251600/IMG_0007.jpg"
                  data-description="Mar 25, 2017, Kunnakudi M.Balamuralikrishna" />
               <img src="data/concerts/201703251600/thumbs/IMG_0008.jpg"
                  data-image="data/concerts/201703251600/IMG_0008.jpg"
                  data-description="Mar 25, 2017,  Kunnakudi M.Balamuralikrishna & H.N.Bhaskar" />
               <img src="data/concerts/201703251600/thumbs/IMG_0009.jpg"
                  data-image="data/concerts/201703251600/IMG_0009.jpg"
                  data-description="Mar 25, 2017,  Kunnakudi M.Balamuralikrishna & H.N.Bhaskar" />
               <img src="data/concerts/201704011500/thumbs/IMG_0001.jpg"
                  data-image="data/concerts/201704011500/IMG_0001.jpg"
                  data-description="Apr 1, 2017, Harikatha - N.C.Bharadwaj, Suchitra Balasubramanian & V.V.S.Murari" />
               <img src="data/concerts/201704011500/thumbs/IMG_0002.jpg"
                  data-image="data/concerts/201704011500/IMG_0002.jpg"
                  data-description="Apr 1, 2017, Harikatha - Suchitra Balasubramanian" />
               <img src="data/concerts/201704011500/thumbs/IMG_0003.jpg"
                  data-image="data/concerts/201704011500/IMG_0003.jpg"
                  data-description="Apr 1, 2017, Harikatha - Suchitra Balasubramanian" />
               <img src="data/concerts/201704011500/thumbs/IMG_0004.jpg"
                  data-image="data/concerts/201704011500/IMG_0004.jpg"
                  data-description="Apr 1, 2017, Harikatha - Suchitra Balasubramanian" />
               <img src="data/concerts/201704011500/thumbs/IMG_0005.jpg"
                  data-image="data/concerts/201704011500/IMG_0005.jpg"
                  data-description="Apr 1, 2017, V.V.S.Murari" />
               <img src="data/concerts/201704011500/thumbs/IMG_0008.jpg"
                  data-image="data/concerts/201704011500/IMG_0008.jpg"
                  data-description="Apr 1, 2017, N.C.Bharadwaj" />
               <img src="data/concerts/201704011500/thumbs/IMG_0012.jpg"
                  data-image="data/concerts/201704011500/IMG_0012.jpg"
                  data-description="Apr 1, 2017, Harikatha - Suchitra Balasubramanian & V.V.S.Murari" />
               <img src="data/concerts/201704011500/thumbs/IMG_0014.jpg"
                  data-image="data/concerts/201704011500/IMG_0014.jpg"
                  data-description="Apr 1, 2017, Harikatha - Suchitra Balasubramanian" />
               <img src="data/concerts/201704011500/thumbs/IMG_0016.jpg"
                  data-image="data/concerts/201704011500/IMG_0016.jpg"
                  data-description="Apr 1, 2017, Harikatha - N.C.Bharadwaj, Suchitra Balasubramanian & V.V.S.Murari" />
               <img src="data/concerts/201704011500/thumbs/IMG_0018.jpg"
                  data-image="data/concerts/201704011500/IMG_0018.jpg"
                  data-description="Apr 1, 2017, B.Sivaraman, Shashikiran, Ganesh, Rengarajan, Shenkottai Hariharasubramanian, Manikandan & V.V.S.Murari" />
               <img src="data/concerts/201704011500/thumbs/IMG_0019.jpg"
                  data-image="data/concerts/201704011500/IMG_0019.jpg"
                  data-description="Apr 1, 2017, B.Sivaraman, Shashikiran, Ganesh, Rengarajan, Shenkottai Hariharasubramanian, Manikandan & V.V.S.Murari" />
               <img src="data/concerts/201704011500/thumbs/IMG_0020.jpg"
                  data-image="data/concerts/201704011500/IMG_0020.jpg"
                  data-description="Apr 1, 2017, B.Sivaraman, Shashikiran, Ganesh, Rengarajan, Shenkottai Hariharasubramanian, Manikandan & V.V.S.Murari" />
               <img src="data/concerts/201704011500/thumbs/IMG_0021.jpg"
                  data-image="data/concerts/201704011500/IMG_0021.jpg"
                  data-description="Apr 1, 2017, Shashikiran, Ganesh, Rengarajan & Shenkottai Hariharasubramanian" />
               <img src="data/concerts/201704011500/thumbs/IMG_0023.jpg"
                  data-image="data/concerts/201704011500/IMG_0023.jpg"
                  data-description="Apr 1, 2017, Shashikiran, Ganesh, Rengarajan & Shenkottai Hariharasubramanian" />
               <img src="data/concerts/201704011500/thumbs/IMG_0025.jpg"
                  data-image="data/concerts/201704011500/IMG_0025.jpg"
                  data-description="Apr 1, 2017, Ganesh, Rengarajan, Shenkottai Hariharasubramanian, Manikandan & V.V.S.Murari" />
               <img src="data/concerts/201704011500/thumbs/IMG_0026.jpg"
                  data-image="data/concerts/201704011500/IMG_0026.jpg"
                  data-description="Apr 1, 2017, B.Sivaraman, Shashikiran, Ganesh, Rengarajan, Shenkottai Hariharasubramanian" />
               <img src="data/concerts/201704011500/thumbs/IMG_0027.jpg"
                  data-image="data/concerts/201704011500/IMG_0027.jpg"
                  data-description="Apr 1, 2017, B.Sivaraman, Shashikiran, Ganesh, Rengarajan, Shenkottai Hariharasubramanian, Manikandan & V.V.S.Murari" />
            </div>
            <br/></br/>
         </div>
         <div class="push"></div>
      </div>
      <?php 
         include(CAMAGA_ROOT . "common/site_footer.php");
         ?>
      <script src='thirdparty/unitegallery/unitegallery-master/package/unitegallery/js/unitegallery.min.js'></script> 
      <script src='thirdparty/unitegallery/unitegallery-master/package/unitegallery/themes/compact/ug-theme-compact.js'></script> 
      <script type="text/javascript"> 			
         jQuery(document).ready(function(){ 
         	jQuery("#gallery").unitegallery({
         		gallery_theme: "compact",
         		gallery_min_width: 150,	
         		slider_scale_mode: "down",
         		theme_hide_panel_under_width: 4000,
         		slider_enable_text_panel: true
         	});	
         }); 		
      </script>
   </body>
</html>
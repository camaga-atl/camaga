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
            <!-- upcoming concerts START  --
            <h1><?php echo $pageTitle; ?></h1>
            -->
            <?php
               include( CAMAGA_ROOT . "concerts/upcoming.php");
               ?>
            <!-- upcoming concerts END -->
            <h2>CAMAGA in Pictures</h2>
            <div id="gallery" >
               <img src="data/concerts/201909071600/thumbs/001.jpg"
                   data-image="data/concerts/201909071600/001.jpg"
                   data-description="Sep 7, 2019 - K.V.Prasad, A.Kanyakumari and Vittal Rangan" />
               <img src="data/concerts/201909071600/thumbs/002.jpg"
                   data-image="data/concerts/201909071600/002.jpg"
                   data-description="Sep 7, 2019 - A.Kanyakumari"/>
               <img src="data/concerts/201909071600/thumbs/003.jpg"
                   data-image="data/concerts/201909071600/003.jpg"
                   data-description="Sep 7, 2019 - Vittal Rangan" />
               <img src="data/concerts/201909071600/thumbs/004.jpg"
                   data-image="data/concerts/201909071600/004.jpg"
                   data-description="Sep 7, 2019 - K.V.Prasad" />
               <img src="data/concerts/201909071600/thumbs/005.jpg"
                   data-image="data/concerts/201909071600/005.jpg"
                   data-description="Sep 7, 2019 - K.V.Prasad, A.Kanyakumari and Vittal Rangan" />
               <img src="data/concerts/201909071600/thumbs/006.jpg"
                   data-image="data/concerts/201909071600/006.jpg"
                   data-description="Sep 7, 2019 - K.V.Prasad, A.Kanyakumari and Vittal Rangan" />
               <img src="data/concerts/201905051630/thumbs/001.jpg"
                   data-image="data/concerts/201905051630/001.jpg"
                   data-description="May 5, 2019 - Srivani Yella" />
               <img src="data/concerts/201904131600/thumbs/002.jpg"
                   data-image="data/concerts/201904131600/002.jpg"
                   data-description="Apr 13, 2019 - Amrutha Venkatesh" />
               <img src="data/concerts/201904271600/thumbs/003.jpg"
                   data-image="data/concerts/201904271600/003.jpg"
                   data-description="Apr 27, 2019 - Ranjini Ramakrishnan" />
               <img src="data/concerts/201903231600/thumbs/002.jpg"
                   data-image="data/concerts/201903231600/002.jpg"
                   data-description="Mar 23, 2019 - Thanjavur Murugaboopathy, Sherthala K.N.Renganatha Sarma and B.U.Ganesh Prasad" />
               <img src="data/concerts/201905051630/thumbs/003.jpg"
                   data-image="data/concerts/201905051630/003.jpg"
                   data-description="May 5, 2019 - Ram Sriram" />
               <img src="data/concerts/201904271600/thumbs/006.jpg"
                   data-image="data/concerts/201904271600/006.jpg"
                   data-description="Apr 27, 2019 - Vijayalakshmi Subramaniam" />
               <img src="data/concerts/201905051630/thumbs/004.jpg"
                   data-image="data/concerts/201905051630/004.jpg"
                   data-description="May 5, 2019 - Srivani Yella" />
               <img src="data/concerts/201904271600/thumbs/002.jpg"
                   data-image="data/concerts/201904271600/002.jpg"
                   data-description="Apr 27, 2019 - Vijayalakshmi Subramaniam" />
               <img src="data/concerts/201904131600/thumbs/006.jpg"
                   data-image="data/concerts/201904131600/006.jpg"
                   data-description="Apr 13, 2019 - Arjun Ganesh" />
               <img src="data/concerts/201904061600/thumbs/002.jpg"
                   data-image="data/concerts/201904061600/002.jpg"
                   data-description="Apr 6, 2019 - V.K.Manimaran" />
               <img src="data/concerts/201904271600/thumbs/004.jpg"
                   data-image="data/concerts/201904271600/004.jpg"
                   data-description="Apr 27, 2019 - Karthik Narayanan" />
               <img src="data/concerts/201904131600/thumbs/005.jpg"
                   data-image="data/concerts/201904131600/005.jpg"
                   data-description="Apr 13, 2019 - Arjun Ganesh" />
               <img src="data/concerts/201905051630/thumbs/002.jpg"
                   data-image="data/concerts/201905051630/002.jpg"
                   data-description="May 5, 2019 - Ram Sriram & Srivani Yella" />
               <img src="data/concerts/201904061600/thumbs/004.jpg"
                   data-image="data/concerts/201904061600/004.jpg"
                   data-description="Apr 6, 2019 - Poongulam Subramaniam" />
               <img src="data/concerts/201904271600/thumbs/005.jpg"
                   data-image="data/concerts/201904271600/005.jpg"
                   data-description="Apr 27, 2019 - Vijayalakshmi Subramaniam" />
               <img src="data/concerts/201904131600/thumbs/004.jpg"
                   data-image="data/concerts/201904131600/004.jpg"
                   data-description="Apr 13, 2019 - Rajeev Mukundan" />
               <img src="data/concerts/201903231600/thumbs/001.jpg"
                   data-image="data/concerts/201903231600/001.jpg"
                   data-description="Mar 23, 2019 - Thanjavur Murugaboopathy, Sherthala K.N.Renganatha Sarma and B.U.Ganesh Prasad" />
               <img src="data/concerts/201904061600/thumbs/001.jpg"
                   data-image="data/concerts/201904061600/001.jpg"
                   data-description="Apr 6, 2019 - Poongulam Subramaniam, V.K.Manimaran and B.Raghavendra Rao" />
               <img src="data/concerts/201904271600/thumbs/007.jpg"
                   data-image="data/concerts/201904271600/007.jpg"
                   data-description="Apr 27, 2019 - Karthik Narayanan, Vijayalakshmi Subramaniam and Ranjini Ramakrishnan" />
               <img src="data/concerts/201904131600/thumbs/001.jpg"
                   data-image="data/concerts/201904131600/001.jpg"
                   data-description="Apr 13, 2019 - Arjun Ganesh, Amrutha Venkatesh and Rajeev Mukundan" />
               <img src="data/concerts/201904131600/thumbs/003.jpg"
                   data-image="data/concerts/201904131600/003.jpg"
                   data-description="Apr 13, 2019 - Arjun Ganesh" />
               <img src="data/concerts/201904271600/thumbs/001.jpg"
                   data-image="data/concerts/201904271600/001.jpg"
                   data-description="Apr 27, 2019 - Karthik Narayanan, Vijayalakshmi Subramaniam and Ranjini Ramakrishnan" />
               <img src="data/concerts/201904061600/thumbs/003.jpg"
                   data-image="data/concerts/201904061600/003.jpg"
                   data-description="Apr 6, 2019 - B.Raghavendra Rao" />
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

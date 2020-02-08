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
            <h2>Upcoming Events</h2>
            
            <!-- 2020 great composers day -->
            <div class="list-concert-box">
                <h3><a href="events#2020-great-composers-day">2020 Great Composers' Day</a></h3>
                <h4>February 15th & 16th 2020</h4>
                <p>
                    <a target="_blank" href="http://maps.google.com/?q=The Hindu Temple Of Atlanta">
                        Venue: Hindu Temple of Atlanta
                    </a>
                </p>
                <img class="desktop" src="events/composers-day/purandaradasa.png"  />
                <img class="desktop" src="events/composers-day/syama-sastri.png"   />
                <img class="desktop" src="events/composers-day/thyagaraja.png"   />
                <img class="desktop" src="events/composers-day/muthuswami-dikshithar.png"  />
                <img class="mobile" src="events/composers-day/trinity.jpg" />
                <p>
                    Like every year, Camaga will be celebrating the <a href="events#2020-great-composers-day">Great Composers’ day</a> on Sat Feb 15th and Sun Feb 16th, 2020.
				</p>	
                <hr/>
                <h4>Registration Closed <sup>updated as of Jan 20, 2020</sup></h4>
                <p>
                    Thanks to all who have sent in their registration. Unfortunately, 
                    owing to overwhelming registration and constraints of time, 
                    we had to close the registration for the two-day event as of January 20, 2020 
                </p>
                <p>
                    If you have already registered, please make sure to send in the registration fee before end of January 2020.
                    As always CAMAGA thanks you for your support and cooperation.
                </p>
                <hr/>
				<br/>
                <a href="events#2020-great-composers-day">More .....</a>            
            </div>
            <!-- 2020 great composers day  END-->
            
            <!-- Trinity drama START -->
            <div class="list-concert-box">
                <h3><a href="events#2020-trinity-drama">Trinity Drama</a></h3>
                <h4>Sat Mar 21, 2020</i></h4>
                <a target="_blank" href="http://maps.google.com/?q=The Hindu Temple Of Atlanta">
                  Venue: Hindu Temple of Atlanta
                </a>
                <p>
				    Written by <a target="_blank" href="https://www.google.com/search?q=Seetha Ravi">
					<strong>Seetha Ravi</strong>
					</a><br/>
				    Translated by <a target="_blank" href="https://www.google.com/search?q=Prabha Sridevan">
					<strong>Prabha Sridevan</strong>
					</a><br/>
				    Directed by <a target="_blank" href="https://www.google.com/search?q=P.C.Ramakrishna">
					<strong>P.C.Ramakrishna</strong>
					</a><br/>
				</p>
				<p>
                    ‘Trinity’ is a seamless weave of 3 short stories on the “Tiruvarur Three”, Muthuswami Dikshitar, Shyama Sastri and Thyagaraja, 
                    the fountainheads of Carnatic music, who lived around Thanjavur at the same time in the 18th century.
                </p>
                <p>
                    And starring in the three stories are well-known Carnatic musicians – <a target="_blank" href="https://www.google.com/search?q=Vijay Siva">
					<strong>Vijay Siva</strong>
					</a>, <a target="_blank" href="https://www.google.com/search?q=Gayathri Venkataraghavan">
					<strong>Gayathri Venkataraghavan</strong>
					</a> and 
					<a target="_blank" href="https://www.google.com/search?q=dr sunder carnatic musician"><strong>Dr. Sunder</strong></a>.
                </p>
                <a href="events#2020-trinity-drama">More .....</a>
            </div>
            <!-- Trinity Drama  END-->

            <!-- 2020 Carnatic Mela START -->
            <div class="list-concert-box">
                <h3><a href="events#2020-carnatic-mela">2020 Carnatic Mela</a></h3>
                <h4>Sat Apr 18, 2020 10 AM</i></h4>
                <a target="_blank" href="http://maps.google.com/?q=The Hindu Temple Of Atlanta">
                  Venue: Hindu Temple of Atlanta
                </a>
                <p>
                    Camaga will be conducting Carnatic Mela to showcase local talent. Details and rules for this are to be announced soon ....<br/>
                    This will be followed by a concert in the evening by Sri K. N. Shashikiran and party
                </p>
                <a href="events#2020-carnatic-mela">More .....</a>

            </div>
            <!-- 2020 Carnatic Mela  END-->
			 
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

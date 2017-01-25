<!DOCTYPE html>
<html lang="en">
	<?php 
		define( "CAMAGA_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/camaga/" );
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
		    <h3><a href="events#composersDay">Great Composers' Day Celebrations 2017</a></h3>
		    <p><i>February 18th & 19th 2017</i></p>
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
		        Camaga will be celebrating the <a href="events#composersDay">Great Composers’ day</a> on February 18th and 19th, 2017. For more details refer <a href="events#composersDay">here</a>             
		</p>
                <hr/>
                <h4> Registration Closed</h4>
                <p>
                      Thanks to all who have sent in their registration. Unfortunately, owing to overwhelming registration and constraints of time, we had to close the registration for the two-day event as of January 23, 2017 
                </p>
                <p>
                      If you have already registered, please make sure to send in the registration fee before 5 PM on January 31, 2017. 
                      Please also note that, if the payment is not received by that date, CAMAGA will assign the slot to the individuals in the wait list, with the assumption that you do not intend to participate in the event. 
                      As always CAMAGA thanks you for your support and cooperation.
                </p>
                <hr/>
 
		</div>
<!-- composers day -->
<!-- upcoming concerts -->
		<?php
			include( CAMAGA_ROOT . "concerts/upcoming.php");
		?>
<!-- upcoming concerts -->
	        <h2>CAMAGA in Pictures</h2>
			<div id="gallery" >
			<img src="data/concerts/201604301600/thumbs/01.jpg"
				data-image="data/concerts/201604301600/01.jpg"
				data-description="Apr 30, 2016, Vinod Seetharaman, Padma Sugavanam & Kamalakiran Vinjamuri" />
			<img src="data/concerts/201604301600/thumbs/02.jpg"
				data-image="data/concerts/201604301600/02.jpg"
				data-description="Apr 30, 2016, Padma Sugavanam" />
			<img src="data/concerts/201604301600/thumbs/03.jpg"
				data-image="data/concerts/201604301600/03.jpg"
				data-description="Apr 30, 2016, Kamalakiran Vinjamuri" />
			<img src="data/concerts/201604301600/thumbs/04.jpg"
				data-image="data/concerts/201604301600/04.jpg"
				data-description="Apr 30, 2016, Vinod Seetharaman" />
			<img src="data/concerts/201604301600/thumbs/05.jpg"
				data-image="data/concerts/201604301600/05.jpg"
				data-description="Apr 30, 2016, Vinod Seetharaman & Padma Sugavanam" />
			<img src="data/events/201604090900/thumbs/debate1.JPG"
				data-image="data/events/201604090900/thumbs/debate1.JPG"
				data-description="Apr 9, 2016, Shruthi Santhanam, Nitheyaa Shree & Shashank Ganeshan during the Carnatic Mela debate" />
			<img src="data/events/201604090900/thumbs/debate2JPG"
				data-image="data/events/201604090900/thumbs/debate2.JPG"
				data-description="Apr 9, 2016, Smriti Suresh, Shree Varshney & Aditya Krishnaswamy during the Carnatic Mela debate" />
			<img src="data/events/201604090900/thumbs/debate3.JPG"
				data-image="data/events/201604090900/thumbs/debate3.JPG"
				data-description="Apr 9, 2016, Shruthi Santhanam, Nitheyaa Shree & Shashank Ganeshan during the Carnatic Mela debate" />
			<img src="data/concerts/201604091405/thumbs/Shivaani_Aditya_Tejas.png"  		data-image="data/concerts/201604091405/Shivaani_Aditya_Tejas.png"
				data-description="Apr 9, 2016, Tejas Nagendra, Shivaani Komanduri & Aditya Krishnaswamy " />
			<img src="data/concerts/201604091430/thumbs/Aishwarya_Raghavendra_Sriram_Sundar_2.JPG"  		data-image="data/concerts/201604091430/Aishwarya_Raghavendra_Sriram_Sundar_2.JPG"
				data-description="Apr 9, 2016, Ram Sriram, N.Sundar, S. Aishwarya & B.V.Raghavendra" />
			<img src="data/concerts/201604091430/thumbs/Aishwarya_Raghavendra_Sriram_Sundar_Smitha.JPG"  		data-image="data/concerts/201604091430/Aishwarya_Raghavendra_Sriram_Sundar_Smitha.JPG"
				data-description="Apr 9, 2016, Ram Sriram, N.Sundar, S. Aishwarya, B.V.Raghavendra & Smitha Madhav" />
			<img src="data/concerts/201604091630/thumbs/CarnaticaBros_Raghavendra_Vaidyanathan_GuruPrasad_SmithaMadhav.JPG"  		data-image="data/concerts/201604091630/CarnaticaBros_Raghavendra_Vaidyanathan_GuruPrasad_SmithaMadhav.JPG"
				data-description="Apr 9, 2016, Ram Sriram, N.Sundar, Carnatic Brothers, B.V.Raghavendra & Smitha Madhav" />
			<img src="data/concerts/201604021600/thumbs/IMG_0160.JPG"
				data-image="data/concerts/201604021600/IMG_0160.JPG"
				data-description="Apr 2, 2016, Thanjavur Murugabhoopathy, Guru Prasad, Aruna Sairam and B.Raghavendra Rao" />
			<img src="data/concerts/201603271600/thumbs/01.jpg"
				data-image="data/concerts/201603271600/01.jpg"
				data-description="Mar 27, 2016, Ram Sriram, Uma, Radhika and Prasad Mantraratnam" />
			<img src="data/concerts/201603271600/thumbs/02.jpg"
				data-image="data/concerts/201603271600/02.jpg"
				data-description="Mar 27, 2016, Chinmaya Sisters - Uma & Radhika" />
			<img src="data/concerts/201603271600/thumbs/03.jpg"
				data-image="data/concerts/201603271600/03.jpg"
				data-description="Mar 27, 2016, Uma of Cinmaya Sisters" />
			<img src="data/concerts/201603271600/thumbs/04.jpg"
				data-image="data/concerts/201603271600/04.jpg"
				data-description="Mar 27, 2016,  Radhika of Chinmaya Sisters" />
			<img src="data/concerts/201603271600/thumbs/05.jpg"
				data-image="data/concerts/201603271600/05.jpg"
				data-description="Mar 27, 2016 - Prasad Mantraratnam" />
			<img src="data/concerts/201603271600/thumbs/06.jpg"
				data-image="data/concerts/201603271600/06.jpg"
				data-description="Mar 27, 2016 - Ram Sriram" />
			<img src="data/concerts/201603271600/thumbs/07.jpg"
				data-image="data/concerts/201603271600/07.jpg"
				data-description="Mar 27, 2016 - Ram Sriram, Uma, Radhika and Prasad Mantraratnam" />
			<img src="data/concerts/201603271600/thumbs/08.jpg"
				data-image="data/concerts/201603271600/08.jpg"
				data-description="Mar 27, 2016 - Uma of Chinmaya Sisters" />
			<img src="data/concerts/201603271600/thumbs/09.jpg"
				data-image="data/concerts/201603271600/09.jpg"
				data-description="Mar 27, 2016 - Ram Sriram" />
			<img src="data/concerts/201603271600/thumbs/10.jpg"
				data-image="data/concerts/201603271600/10.jpg"
				data-description="Mar 27, 2016 - Prasad Mantraratnam" />
			<img src="data/concerts/201603271600/thumbs/11.jpg"
				data-image="data/concerts/201603271600/11.jpg"
				data-description="Mar 27, 2016 - Ram Sriram, Uma, Radhika and Prasad Mantraratnam" />
			<img src="data/concerts/201603271600/thumbs/12.jpg"
				data-image="data/concerts/201603271600/12.jpg"
				data-description="Mar 27, 2016 - Prasad Mantraratnam" />
			<img src="data/concerts/201603271600/thumbs/13.jpg"
				data-image="data/concerts/201603271600/13.jpg"
				data-description="Mar 27, 2016 - Ram Sriram" />
			<img src="data/concerts/201603271600/thumbs/14.jpg"
				data-image="data/concerts/201603271600/14.jpg"
				data-description="Mar 27, 2016 - Prasad Mantraratnam" />
			<img src="data/concerts/201603271600/thumbs/15.jpg"
				data-image="data/concerts/201603271600/15.jpg"
				data-description="Mar 27, 2016 - Chinmaya Sisters - Uma & Radhika" />

			<img src="data/concerts/201603131600/thumbs/IMG_0002.jpg"
				data-image="data/concerts/201603131600/IMG_0002.jpg"
				data-description="Mar 13, 2016, Sikkil Gurucharan" />
			<img src="data/concerts/201603131600/thumbs/IMG_0008.jpg"
				data-image="data/concerts/201603131600/IMG_0008.jpg"
				data-description="Mar 13, 2016, V.Sanjeev" />
			<img src="data/concerts/201603131600/thumbs/IMG_0011.jpg"
				data-image="data/concerts/201603131600/IMG_0011.jpg"
				data-description="Mar 13, 2016, Sikkil Gurucharan" />
			<img src="data/concerts/201603131600/thumbs/IMG_0016.jpg"
				data-image="data/concerts/201603131600/IMG_0016.jpg"
				data-description="Mar 13, 2016, Patri Satish Kumar, Sikkil Gurucharan & V.Sanjeev" />
			<img src="data/concerts/201603131600/thumbs/IMG_0023.jpg"
				data-image="data/concerts/201603131600/IMG_0023.jpg"
				data-description="Mar 13, 2016, Patri Satish Kumar" />
			<img src="data/concerts/201603131600/thumbs/IMG_0027.jpg"
				data-image="data/concerts/201603131600/IMG_0027.jpg"
				data-description="Mar 13, 2016, Patri Satish Kumar, Sikkil Gurucharan & V.Sanjeev" />
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




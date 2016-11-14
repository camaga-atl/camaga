	<?php
		include("Concerts.php");
		include("Concert.php");
		$datetime = NULL;
		$concerts = Concerts::getUpcoming();
	?>
	<section>
		<header>
			<h2>Upcoming Concerts</h2>
		</header>
	<?php 
		foreach ( $concerts as &$concert) {
			if ($concert -> exists()) {
				$ymdhm = $concert -> getDateTime();	
				$concert_date = strtotime($concert -> getDate());
				$concert_time = strtotime($concert -> getTime());
	?>			
				<div class="list-concert-box">
	<?php 
					if (isset($_SERVER['PHP_AUTH_USER']))	{ 
	?>					
						<a href="concerts/<?php echo $ymdhm ?>">							
	<?php 
					} 
	?>
					<div class="event-box">
	<?php
						include("date/views/dateBox.php");
						include("venue/views/venueBox.php");
						include("artists/views/vertical.php"); 
						if (isset($_SERVER['PHP_AUTH_USER']))	{
	?>
							</a>
	<?php 
						} 
					include("concerts/photos/views/horizontal.php"); 
	?>
				
					</div>
				</div>	
	<?php
			} // if concert exists
		} // foreach concert					
	?>
	</section>   

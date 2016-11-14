<!DOCTYPE html>
<html lang="en">
	<?php 
		define( "CAMAGA_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/camaga/beta/" );
		include( CAMAGA_ROOT . "common/html_head.php"); 
	?>
	<body>
		<?php 
			include(CAMAGA_ROOT . "common/site_header.php"); 
			include("Concerts.php");
			include("Concert.php");
			$datetime = NULL;
			if(array_key_exists('datetime', $_GET)) {					 
				$datetime = $_GET["datetime"]; 
				$concert = new Concert($datetime);
				if ($concert -> exists()) {
					$concert_date = strtotime($concert -> getDate());
					$concert_time = strtotime($concert -> getTime());
		?>
		<div id="page-wrap">
		<?php
			include( CAMAGA_ROOT . "concerts/message.php"); 
		?>	
				<section>
					<header>
						<h2>Concert Details</h2>
					</header>		
					<div class="concert-box container">
						<div class="event-box">
	<?php
							include("../date/views/dateBox.php");
							include("../venue/views/venueBox.php");
							include("../artists/views/vertical.php"); 
							include("photos/views/horizontal.php"); 
	?>															
						</div> <!-- event-box -->
	<?php 
						if ($concert -> songExists()) { 
	?>
							<div class="songlist">
								<table>
									<thead>
										<tr>
											<th class="number-column">#</th>
											<th>Song</th>
											<th>Ragam</th>
											<th>Talam</th>				
											<th>Composer</th>				
										</tr>
									</thead>
									<tbody>
	<?php 
										$i = 0;
										$songs = $concert -> getSongs();
										foreach ($songs as $song) {
											$i++;
	?> 
											<tr>
												<td class="number-column">
													<?php echo $i; ?> 
												</td>
												<td>
													<?php echo $song["name"]; ?> 
												</td>
												<td>
													<?php echo $song["ragam"]; ?> 
												</td>
												<td>
													<?php echo $song["talam"]; ?> 
												</td>				
												<td>
													<?php echo $song["composer"]; ?> 
												</td>				
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div> <!-- songlist -->
						<?php 
							}  // if songExists() 
						?>
						<?php if (isset($_SERVER['PHP_AUTH_USER']))	{ ?>
							<div>
								<a class="button" href="./concerts/<?php echo ($datetime) ?>/editform" >
									Edit Concert
								</a>
								<a class="button" href="./concerts/photos/<?php echo ($datetime) ?>/editform" >
									Manage Photos
								</a>
								<button onclick="deleteConcert(<?php echo ($datetime) ?>)">
									Delete Concert
								</button>
							</div>	
						<?php }  ?>
					</div>	<!-- concert-box-container -->
				</section>
		</div> <!-- page-wrap -->
		<?php 		
				} 
			}
		?>
		<script src="./js/concert.js"></script>		
		<script src="./js/lightbox-2.6.min.js"></script>
	</body>
</html>




<?php
	$file=$_GET["file"];
	$str_data = file_get_contents($file);
    $concert = json_decode($str_data, true);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>
			CAMAGA - 
			<?php
				echo $concert["title"];
			?>
		</title>
		<meta name="author" content="Srinivasan Ramaswamy" >
		<meta name="date" content="2012-11-24T17:59:49-0500" >
		<meta name="copyright" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
		<meta http-equiv="content-style-type" content="text/css">
		<meta http-equiv="expires" content="0">
		<link href="css/screen.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<h1>CAMAGA</h1>
		<h2>
			<?php
				echo $concert["title"];
			?>
		</h2>
	    <div class="artiste-box">
			<?php 
				foreach ($concert["artists"] as $artist) {
            ?> 
				<div>
					<?php 
						echo $artist["name"];
						echo " (";
						echo $artist["instrument"];
						echo ")"; 
					?>
				</div>
			<?php 
				}
			?>
		</div>
		<div class="venue">
			<?php
				echo "<i> at </i>";
				echo $concert["venue"];
			?>
		</div>
		<div class="date">
			<?php
				echo "<i> on </i>";
				$formattedDate = date("D M j, Y g A", strtotime($concert["date"]));
				echo $formattedDate;			
			?>
		</div>
		
		<div class="table">
			<div class="table-head">
				<div class="column">#</div>
				<div class="column">Song</div>
				<div class="column">Ragam</div>
				<div class="column">Talam</div>				
				<div class="column">Composer</div>				
			</div>
			<?php 
				$i = 0;
				foreach ($concert["songs"] as $song) {
						$i++;
            ?> 
					<div class="row">
						<div class="column">
							<?php 
								echo $i;
				            ?> 
						</div>
						<div class="column">
							<?php 
								echo $song["name"];
				            ?> 
						</div>
						<div class="column">
							<?php 
								echo $song["ragam"];
				            ?> 
						</div>
						<div class="column">
							<?php 
								echo $song["talam"];
				            ?> 
						</div>				
						<div class="column">
							<?php 
								echo $song["composer"];
				            ?> 
						</div>				
					</div>
			<?php 
				}
			?>
		</div>
	</body>
</html>


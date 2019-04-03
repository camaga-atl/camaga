<?php
   $title="CAMAGA - Contact and About";
   $description="Contact and About - CAMAGA - Carnatic Music Association of Georgia";   
?>

<!DOCTYPE html>
<html lang="us">
	<?php 
		define( "CAMAGA_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/" );
		include( CAMAGA_ROOT . "common/html_head.php"); 
	?>
	<body id="contact">
		<div class="wrapper">
			<?php 
				include(CAMAGA_ROOT . "common/site_header.php"); 
			?>
			<div id="page-wrap">
				<h2>Contact</h2>
				<h3>About</h3>
				<p> 
					CAMAGA is a non-profit organization with an objective to encourage and promote the growth of Carnatic Music in Georgia.
				</p>
				<p>
					<a href="doc/2016/Bylaws_2016.doc">Bylaws&nbsp;&nbsp;<i class="fa fa-download"></i></a>
				</p>
				<br/>
				<h3>Contact</h3>
				<dl>
					<dt>address</dt>
						<dd>Dr. Ram Sriram</dd>
						<dd>1415 Carter Road</dd>
						<dd>Decatur GA 30030</dd>
						<dd>U.S.A</dd> 
						<dd>&nbsp;</dd>
					<dt>mobile</dt>
						<dd>(678) 463-8729</dd> 
						<dd><em>When possible, please send a text message so that we can respond to you</em></dd>
						<dd>&nbsp;</dd>
					<dt>email</dt>
						<dd>camaga.atlanta@gmail.com</dd>
						<dd>&nbsp;</dd>
						<dd>&nbsp;</dd>
				</dl>
				<h3>Committee</h3>
				<dl>
					<dt>President</dt>
						<dd>Ram Sriram</dd>
						<dd>&nbsp;</dd>
					<dt>Treasurer</dt>
						<dd>Raj Rengarajan</dd>
						<dd>&nbsp;</dd>
					<dt>Trustees</dt>
						<dd>Kalpana Rengarajan</dd>
						<dd>Moorthy Srinivasan</dd>
						<dd>Ramesh Vepure</dd>
						<dd>Siva Nathan</dd>
						<dd>Suresh Kothandaraman</dd>
						<dd>&nbsp;</dd>					
					<dt>Secretary</dt>
						<dd>S.Ramaswamy</dd>
						<dd>&nbsp;</dd>
						<dd>&nbsp;</dd>
				</dl>
			</div>
			<div class="push"></div>
		</div>
		<?php 
			include(CAMAGA_ROOT . "common/site_footer.php");
		?>
	</body>
</html>


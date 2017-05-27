<?php
   $title="CAMAGA - Contact and About";
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
				<h3>Committee</h3>
				<dl>
					<dt>President</dt>
						<dd>Ram Sriram</dd>
						<dd>&nbsp;</dd>
					<dt>Secretary</dt>
						<dd>S.Ramaswamy</dd>
						<dd>&nbsp;</dd>
					<dt>Treasurer</dt>
						<dd>Raj Rengarajan</dd>
						<dd>&nbsp;</dd>
					<dt>Advisory Committee</dt>
						<dd>Kalpana Rengarajan</dd>
						<dd>Rama Krishnakumar</dd>
						<dd>Ramesh Vepure</dd>
						<dd>Siva Nathan</dd>
						<dd>Suresh Kothandaraman</dd>
						<dd>&nbsp;</dd>
					<dt>Administrative Committee</dt>
						<dd>Bala Balakrishnan</dd>
						<dd>Moorthy Srinivasan</dd>
						<dd>R.Vasudevan</dd>
				</dl>
				<h3>Membership</h3>
				<dl>
					<dt>Family</dt>
					<dd>$200</dd>
					<dt>Individual</dt>
					<dd>$100</dd>
					<dt>Student with Id</dt>
					<dd>$50</dd>
				</dl>
				<p>
					<a href="doc/2015/Membershipform_2015.doc">Membership form &nbsp;&nbsp<i class="fa fa-download"></i></a>
				</p>
				<h3>Non-members</h3>
				<dl>
					<dt>Individual</dt>
					<dd>$25 per concert</dd>
					<dt>Students with Id</dt>
					<dd>$10 per concert</dd>
				</dl>  
				<h3>Contact</h3>
				<dl>
					<dt>address</dt>
						<dd>Dr. Ram Sriram</dd>
						<dd>6011, Rocky Shoals Court</dd>
						<dd>Tucker, GA 30084</dd>
						<dd>U.S.A</dd> 
						<dt>phone</dt>
						<dd>770-493-6534</dd>
					<dt>email</dt>
						<dd>camaga.atlanta@gmail.com</dd>
				</dl>
			</div>
			<div class="push"></div>
		</div>
		<?php 
			include(CAMAGA_ROOT . "common/site_footer.php");
		?>
	</body>
</html>


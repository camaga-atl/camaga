<?php
   $title="CAMAGA - Membership";
?>

<!DOCTYPE html>
<html lang="us">
	<?php 
		define( "CAMAGA_ROOT", $_SERVER['DOCUMENT_ROOT'] . "/" );
		include( CAMAGA_ROOT . "common/html_head.php"); 
	?>
	<body id="member">
		<div class="wrapper">
			<?php 
				include(CAMAGA_ROOT . "common/site_header.php"); 
			?>
			<div id="page-wrap">
				<h2>Membership</h2>
                <dl>
					<dt>Family</dt>
					<dd>$300</dd>
					<dt>Individual</dt>
					<dd>$150</dd>
					<dt>Student with Id</dt>
					<dd>$50</dd>
				</dl>
				<p>
					<a href="doc/2022/Membershipform_2022.doc">Membership form &nbsp;&nbsp<i class="fas fa-download"></i></a>
				</p>
				<h3>Non-members</h3>
				<dl>
					<dt>Individual</dt>
					<dd>$35 per concert</dd>
					<dt>Students with Id</dt>
					<dd>$15 per concert</dd>
				</dl>
			</div>

			<div class="push"></div>
		</div>
		<?php 
			include(CAMAGA_ROOT . "common/site_footer.php");
		?>
	</body>
</html>


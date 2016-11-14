<header class="site-header clearfix">
	<nav>
		<ul>	
			<li><a class="home" href=".">HOME</a></li>
			<li><a class="concerts" href="concerts">CONCERTS</a></li>
		    <li><a class="articles" href="articles">ARTICLES</a></li>
			<li><a class="about" href="about">ABOUT</a></li>
		</ul>
	</nav>
	<div class="camaga">
		<a href="./">
			<img src="img/camaga_logo.jpg" height="24px" width="24px">
			CAMAGA
		</a>
	</div>
</header>
<?php 
	if (isset($_SERVER['PHP_AUTH_USER']))	{ 
?>					
	<div class="login-info">
		<?php echo "Welcome " . $_SERVER['PHP_AUTH_USER']; ?>
	</div>
<?php
	}
?>	


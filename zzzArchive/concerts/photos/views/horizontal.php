	<?php
		if ($concert -> photoExists()) { 
	?>
			<div class="photo-box">								
	<?php 
				$photos = $concert -> getPhotos();
				foreach ($photos as $photo) {
					$imgSrc = $concert -> getDataDirUrl() . "/" . $photo["src"]; 
					$thumbSrc = $concert -> getThumbsDirUrl() . "/" . $photo["src"]; 
	?> 
					<a href="<?php echo $imgSrc ?>" data-lightbox="<?php echo $concert -> getDataDirUrl(); ?>" title="<?php echo ($photo['title'])?>">
						<img class="thumb" src="<?php	echo $thumbSrc ?>">
					</a>
	<?php 
				} // foreach $photos
	?>
			</div> <!-- photo-box -->
	<?php 
		}  // if photoExists() 
	?>								

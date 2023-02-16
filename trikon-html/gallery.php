
<?php include("inc/header.php"); ?>  
<?php include("inc/top-info.php"); ?>
<?php include("inc/main-header.php"); ?>
<?php include("inc/nav.php"); ?>  

<section class="container-page">
	<div class="container">
		<div class="content-page">
		  <h1>Gallery</h1>
			
<div class="gallery-page">
	
<div class="row">
<?php
 
$directory = "images/gallery/";
$files = scandir($directory);

$num_files = count($files)-2;

for($i=1; $i<=$num_files; $i++): ?>	
<div class="col-lg-3 col-md-4">
	<div class="thumbsize">
		<div class="gallery-thumbnail">
			<a href="<?= $directory.$i; ?>.jpg"><img src="<?= $directory.$i; ?>.jpg" /></a>
		</div>
	</div>
</div>
	
<?php endfor; ?>
</div>

</div>			
			
			
		</div>
	</div>
</section>
  
<?php include("inc/bottom-link.php"); ?>
<?php include("inc/footer.php"); ?>



<link rel="stylesheet" type="text/css" href="css/jquery.lightbox.css">  
<script src="js/jquery.lightbox.js"></script>
<script>
  // Initiate Lightbox
  $(function() {
    $('.thumbsize a').lightbox(); 
  });
</script>


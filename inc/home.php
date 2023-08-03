<?php
include 'settings.php';
include 'cms/functions.php';
include 'inc/header.php';

?>
<div id="content-wrapper">

	<div id="contents">
				
		<div id="main">
					
			<?php show_content(); ?>
			<?php  include 'inc/pager.php';?>

		</div>
		<!-- ------------------------------ fim da main --------------------------- -->
				
			<?php include 'inc/sidebar.php'; ?>


		<div class="cleaner"></div>
		<!-- ------------------------------------ fim cleaner ------------------------- -->

	</div>
			<!-- ---------------------------fim  #content ---------------------- -->
			
</div>
<!-- ---------------- fim #content-wrapper ---------------- -->
<?php include 'inc/footer.php';?>











































	</div>
	
</body>
</html>
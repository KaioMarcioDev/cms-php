<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="themes/<?=$site_theme?>/style.css">
	<title><?php echo $site_title. '|' .$site_tagline;?></title>
</head>
<body>
	<div id="container">

		<header>

			<div id="header">
				<h1><a href="<?=$site_url?>"><?=$site_title?></a></h1>
				<p>Version <span>0.1</span></p>
			</div> 
			<!-- ------------ fim #header ---------- -->

		</header> 
		<!-- ------------- fim tag header --------------- -->
	<?php  include 'inc/main-menu.php';?>
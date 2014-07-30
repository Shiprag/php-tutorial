<?php 
	include('config/setup.php'); 
?>
<!DOCTYPE HTML>
	<html>
	<head>
		<title><?php echo $page_title. '|'.  $site_title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('config/css.php'); ?>
	<?php include('config/js.php'); ?>
			          </head>
				<body>
					<div id="wrap">		
					      <?php include(D_TEMPLATE.'/navigation.php'); //Main navigation ?>   
			        <div class="container">
				    	<h1><?php echo $page['header'];?></h1>
				    	<?php echo $page['body_formatted']; ?>
					 </div>
					 </div><!--end wrap-->
					 <?php include(D_TEMPLATE.'/footer.php'); //Main Footer ?> 
					 <?php if($debug==1) { ?>
					 
					 <?php } ?>
					 <?php include('widgets/debug.php'); ?>
					 </body>	
						
					 </html>
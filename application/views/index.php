
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'header.php';?>
	<link rel="stylesheet" href="<?php echo base_url();?>Assets/CustomCss/index.css">
	<title>UGH</title>
</head>
<body>
	<div class="container-fluid" style="padding:0px;">
		
		<?php include'heading.php';?>
		
		<section class="body" style="min-height: 600px; margin-top: 20px;">
			<div class="container" style="padding: 0px; margin-top: 20px; background-color:; margin-bottom: 10px;">
			<?php include'sidenavbar.php' ?>
			<?php include'slideImages.php';?>

			</div>
		</section>

		<section class="footer">
				<?php include'footer.php';?>			
		</section>

		<?php include'Poupinformation.php';?>
		
		
	</div>
</body>
</html>
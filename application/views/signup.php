<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include'header.php';?>
	<link rel="stylesheet" href="<?php echo base_url();?>Assets/CustomCss/index.css">
	<title>Login</title>
</head>
<body>
	<div class="container-fluid" style="padding:0px;">

		<section class="header">
			<?php include'heading.php';?>
		</section>
		
		<section class="body" style="min-height: 600px; margin: 20px;">
			<?php include'Signupform.php'; ?>
		</section>
	
		<section class="footer">
				<?php include'footer.php'; ?>		
		</section>
	</div>
	<?php include'Poupinformation.php';?>
</body>
</html>
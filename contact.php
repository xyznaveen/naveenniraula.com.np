<?php
	// pull all the defined config from the text.php file 
	$config = require 'config\global.php';

	$website = $config['website'];
	$css = $config['css'];
	$js = $config['js'];
	$links = $config['links'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title> <?php echo $website['name']; ?></title>
	<?php foreach ($css as $key => $value) { ?>
	<link rel="stylesheet" href="<?php echo $value; ?>" />
	<?php } ?>
</head>
<body>
	
	<?php include 'partials\menubar.php'; ?>

	<?php include 'partials\navigation.php'; ?>
	
	<div class="body">
		<div class="contact">
			<div class="container">
				<div class="row">
					<div class="twelve columns">
						<h1 class="fancy-text">admin@naveenniraula.com.np</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'partials\prefooter.php'; ?>
	
	<?php include 'partials\footer.php'; ?>

	<?php foreach ($js as $key => $value) { ?>
	<script src="<?php echo $value; ?>"></script>
	<?php } ?>

</body>
</html>
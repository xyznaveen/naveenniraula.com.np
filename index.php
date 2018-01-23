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
		<div class="container">
			<div class="row">
				<div class="four columns">
					<div class="frame hint--bottom hint--bounce" aria-label="Image Source : https://misskatecuttables.com"><img src="https://www.misskatecuttables.com/uploads/shopping_cart/9968/large_puppy5.png" alt="image-of-developer"></div>
				</div>
				<div class="eight columns">
					<h2><i class="fa fa-code" aria-hidden="true"></i></h2>
					<br/>
					<p>As you might have already guessed, i'm a developer. I've been in this field of work for quite a while and created some amazing ( at least that's what I call it ) presonal  projects. Not professionally recognized but I put my 100% into things I do. And the best part ? I don't even hold a graduate degree <strong>YET</strong>.</p>
					<p>Computers are fascinating piece of hardwared packed into a tiny space. I always wondered how they work, and now here I am. Commanding them to do my work for me. But the fun doesn't end there, the fun in learning new <code>programming lanuage</code> is always exciting.</p>
					<p><strong>YES!</strong> I love dogs.</p>
				</div>
			</div>
			<div class="row">
				<div class="twelve columns">
					<div class="second">
						<a href="/blog" class="button button-primary hint--left hint--bounce u-pull-right" aria-label="Read my ">blog</a>
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

<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php


		echo $this->Html->css('cake.generic');

		/*echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');*/
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>This is header</h1>
		</div>
		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>
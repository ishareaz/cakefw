<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
	$pathcss = '/admin/css/';
	$pathjs = '/admin/js/';
	echo $this->Html->css(array(
		$pathcss.'style',
		$pathcss.'bootstrap.min.css',
		$pathcss.'bootstrap-theme.min.css'
		));
	echo $this->Html->script(array(
		$pathjs.'jquery-1.11.2.min',
		$pathjs.'bootstrap.min.js',
		
		));
		?>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo fullBaseUrl ?>/admins/home">BookStore</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class=""><a href="<?php echo fullBaseUrl ?>/admins/books">Books</a></li>
						<li><a href="<?php echo fullBaseUrl ?>/admins/authors">Authors</a></li>
						<li><a href="<?php echo fullBaseUrl ?>/admins/categories">Categories</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Profile</a></li>
								<li><a href="#">Setting</a></li>
								<li class="divider"></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div id="container" class="container">
			<div id="content" class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php echo $this->fetch('content'); ?>
				</div>				
			</div>
		</div>
	</body>
	</html>

	<?php  include('config.php'); ?>
	<?php  include('includes/registration_login.php'); ?>
	<?php  include('includes/head_section.php'); ?>
	<link  rel="stylesheet" href="static/css/public_styling.css">

	<title>Indi Blog | Sign in </title>
</head>
<body>
	<!-- Navbar -->
	<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->
	
	<main class="container">
		<div class="login-page">
			<form method="post" action="login.php" >
				<h2>Login</h2>
				<?php include(ROOT_PATH . '/includes/errors.php') ?>
				<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
				<input type="password" name="password" placeholder="Password">
				<button type="submit" class="btn btn-login" name="login_btn">Login</button>
				<p>
					Not yet a member? <a href="register.php">Sign up</a>
				</p>
			</form>
		</div>
	</main>
<!-- // container -->

<!-- Footer -->
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // Footer -->
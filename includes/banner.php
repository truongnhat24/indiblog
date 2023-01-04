<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>welcome <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">logout</a></span>
	</div>
<?php }else{ ?>	
	<section class="banner row">		
		<div class="welcome_msg col-6">
			<h1>Today's Inspiration</h1>
			<p> 
				One day your life <br> 
				will flash before your eyes. <br> 
				Make sure it's worth watching. <br>
				<span>~ Gerard Way</span>
			</p>
			<div class="d-flex align-items-center">
				<span class="me-1">Register to join us!</span>
				<a href="register.php" class="btn btn-register">Register</a>
			</div>
		</div>
		<div class="login_div col-6">
			<form action="index.php" method="post" >
				<h2>Login</h2>
				<input type="text" name="username" placeholder="Username">
				<input type="password" name="password"  placeholder="Password"> 
				<button class="btn btn-login" type="submit" name="login_btn">Sign in</button>
			</form>
		</div>
	</section>
<?php } ?>
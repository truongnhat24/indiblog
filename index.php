	<link rel="stylesheet" href="static/css/public_styling.css">
	
	<?php require_once('config.php') ?>

	<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
	<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
	<!-- Retrieve all posts from database  -->
	<?php $posts = getPublishedPosts();?>

	<?php require_once(ROOT_PATH.'/includes/head_section.php') ?>
	<title>Indi Blog | Home </title>
</head>
<body>
	<!-- navbar -->
	<?php include(ROOT_PATH. '/includes/navbar.php');?>
	
	<!-- container - wraps whole page -->
	<main class="container">

        <!-- banner -->
        <?php include(ROOT_PATH. '/includes/banner.php') ?>
        
        <!-- Page content -->
        <div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<!-- more content still to come here ... -->

			<?php foreach ($posts as $post): ?>
				<section class="row">
					<div class="col-8 post d-flex">
						<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
						
						<section>
							<?php if (isset($post['topic']['name'])): ?>
								<a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id']; ?>" class="btn category">
									<?php echo $post['topic']['name'] ?>
								</a>
							<?php endif ?>
							
							<a href="<?php echo BASE_URL . 'single_posts.php?post-slug=' . $post['slug']; ?>">
								<div class="post_info">
									<h3><?php echo $post['title'] ?></h3>
									<div class="info">
										<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
										<span class="read-more">Read more...</span>
									</div>
								</div>
							</a>
						</section>
					</div>
				</section>
			<?php endforeach ?>
		</div>
		<!-- // Page content -->
	</main>
		<!-- footer -->
	<?php include(ROOT_PATH. '/includes/footer.php') ?>
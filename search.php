<?php get_header(); ?>
<div class="container-fluid">
		<div class="row top-header">
			<div class="container top-container">
				<!--LOGO, PHONE, ADDRESS-->
				<div class="row top-row">
					<img class="img-responsive blink" src="<?php echo get_template_directory_uri(); ?>/images/blink.png">
					<div class="navbar-header pull-left">
						
						<a class="navbar-brand" href="#">
							<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
						</a>

					</div>
					<div class="navbar-text pull-right">
						<div class="header-phone pull-right">
							<?php dynamic_sidebar( 'top-phones' ); ?>
							<div class="adress visible-xs visible-sm pull-right">
								<?php dynamic_sidebar( 'top-adress' ); ?>
							</div>
						</div>
						
						<div class="adress-big pull-left hidden-xs hidden-sm">
							<?php dynamic_sidebar( 'top-adress' ); ?>
						</div>
						<div class="row">
							<div class="email-map hidden-xs hidden-sm pull-right">
								<?php dynamic_sidebar( 'top-email-map' ); ?>
							</div>
						</div>
					</div>
				</div>
				<!--MENU, FINEDER-->
				<div class="row menu-row">
					<nav class="navbar navbar-default pull-left main-navigation">
  						<div class="container-fluid">
							<div class="navbar-header">
		      					<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
		      					</button>
		    				</div>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								
									<? wp_nav_menu(array('menu' => 'top-menu', 'container' => 'ul', 'menu_class' => 'nav navbar-nav')); ?>
								
							</div>
						</div>
					</nav>
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
		
	</div>
	<!--CAROUSEL-->
	<div class="container">
		<?php dynamic_sidebar( 'carousel-slider' ); ?>
	</div>
	<!--MAIN CONTENT AND LEFT MENU-->
	<div class="container">
		<div class="row my-content">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 content-menu">
				<?php get_sidebar(); ?>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 content-main">
				<div class="row">
					<h3 class="content-heading"><?php printf( __('Ви шукали: %s', 'default'), get_search_query() ); ?></h3>
					<p>За вашим запитом було знайдено:</p>
					<div class="find-result">
						<?php if (have_posts()): while (have_posts()): the_post(); ?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php the_excerpt(); ?></p>
					
						<?php endwhile;	else:?>
					
						<p><?php echo __('За вашим запитом, нажаль, нічого не знайдено. Будь ласка повторіть пошук змінивши запит.', 'whitesquare'); ?></p>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
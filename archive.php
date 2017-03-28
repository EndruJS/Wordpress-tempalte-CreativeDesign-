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
					<form class="navbar-form pull-right">
						<div class="form-group">
							 <input type="text" class="form-control" placeholder="Введіть слово">
							 <div class="my-stub pull-right hidden-xs"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
		
	</div>
	<!--CAROUSEL-->
	<div class="container">
		<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="active item">
				    <img src="<?php echo get_template_directory_uri(); ?>/images/poly_post_1.jpg">
					    <!--<div class="carousel-caption">
					        <h3>Заголовок 1 слайда</h3>
					        <p>Текст (описание) 1 слайда...</p>
	      				</div>-->
	   			</div>
	   			<div class="item">
				    <img src="<?php echo get_template_directory_uri(); ?>/images/poly_post_2.jpg">
	    		</div>
	    		<div class="item">
				    <img src="<?php echo get_template_directory_uri(); ?>/images/poly_post_3.jpg">
	    		</div>
	  		</div>
	  		<a class="carousel-control left" href="#myCarousel" data-slide="prev">
	    		<span class="glyphicon glyphicon-chevron-left"></span>
	  		</a>
	  		<a class="carousel-control right" href="#myCarousel" data-slide="next">
	    		<span class="glyphicon glyphicon-chevron-right"></span>
	  		</a>
		</div>
	</div>
	<!--MAIN CONTENT AND LEFT MENU-->
	<div class="container">
		<div class="row my-content">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 content-menu">
				<?php get_sidebar(); ?>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 content-main">
				<div class="row">
					<div class="icon-block">
						<div class="block-icon-content">
							<a href="#"><img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/vizitki.png">
							<p class="text-center">Візитки</p></a>
						</div>
						<div class="block-icon-content">
							<a href="#"><img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/karman_calend.png">
							<p class="text-center">Кишенькові календарі</p></a>
						</div>
						<div class="block-icon-content">
							<a href="#"><img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/flaer.png">
							<p class="text-center">Флаєра</p></a>
						</div>
						<div class="block-icon-content">
							<a href="#"><img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/images/listivka.png">
							<p class="text-center">Листівки</p></a>
						</div>
					</div>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet dolorem error odit perspiciatis, esse vitae, voluptate excepturi labore qui officia rem quod quaerat quasi sequi sit recusandae at, commodi consequatur.</p>
				</div>
				
				
			</div>
		</div>
	</div>
<?php get_footer(); ?>
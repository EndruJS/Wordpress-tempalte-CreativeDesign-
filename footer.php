
<!--FOOTER-->
	<div class="container-fluid">
		<div class="row my-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
						<h4 class="footer-header">Навігація</h4>
						<hr>
						<? wp_nav_menu(array('menu' => 'bottom-menu', 'container' => 'ul', 'menu_class' => 'my-footer')); ?>
						<!--<ul class="my-footer">
							<li><a href="#">Головна</a></li>
							<li><a href="#">Продукція</a></li>
							<li><a href="#">Прайс</a></li>
							<li><a href="#">Вимоги</a></li>
							<li><a href="#">Контакти</a></li>
						</ul>-->
					</div>
					<!--<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
						<h4>Соціальні групи</h4>
						<div class="row social-group-icon">
							<div class="social-icon">
								<img class="img-responsive" src="./images/">
							</div>
						</div>
					</div>-->
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-8 pull-right text-right">
						<h4 class="footer-header">Контакти</h4>
						<hr>
						<?php dynamic_sidebar( 'bottom-adress' ); ?>
						
						
						<!--<p>
							<span>Україна<br>Хмельницька обл.,<br>м.Старокостянтинів, вул.Миру, 7</span>
						</p>
						
						<p>Карта проїзду</p>-->
					</div>
				</div>
			</div>
			<div class="row text-center footer-copy">
				<p>&copy 2011-2017 ПП Тернюк</p>
			</div>
		</div>

	</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.1.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
    <?php wp_footer(); ?>

</body>
</html>
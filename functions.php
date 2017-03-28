<?php function enqueue_styles() {
	wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
	wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
	wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_enqueue_script('html5-shim');

}

add_action('wp_enqueue_scripts', 'enqueue_scripts');


?>
<?
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}
?>
<?
register_sidebar( array(
        'name' => __( 'Телефони (шапка)', '' ),
        'id' => 'top-phones',
        'description' => __( 'Телефони зверху', '' ),
        'class' => '',
        'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''
    ) );
register_sidebar( array(
        'name' => __( 'Адреса (шапка)', '' ),
        'id' => 'top-adress',
        'description' => __( 'Адреса зверху', '' ),
        'class' => '',
        'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''
    ) );
register_sidebar( array(
        'name' => __( 'Контакти (футер)', '' ),
        'id' => 'bottom-adress',
        'description' => __( 'Контакти знизу', '' ),
        'class' => '',
        'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''
    ) );
register_sidebar( array(
        'name' => __( 'Пошта+карта проїзду', '' ),
        'id' => 'top-email-map',
        'description' => __( 'в шапці', '' ),
        'class' => '',
        'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''
    ) );
register_sidebar( array(
        'name' => __( 'Карусель слайдер', '' ),
        'id' => 'carousel-slider',
        'description' => __( 'слайдер', '' ),
        'class' => '',
        'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''
    ) );
?>

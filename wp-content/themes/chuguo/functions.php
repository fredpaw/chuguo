<?php
//import parent theme style sheet
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/custom.css' );

}

//Footer Column Widgets Register
class footerColumn1Widget extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'Footer Column 1 Widget');
	}
	
	function widget() {
		?>
		<div class="font-center">
			<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cg16_home_con08_pic01.png" /></p>
			<p class="font-bold" style="font-size:14px;"><a href="<?php echo get_permalink(35); ?>">澳洲大学</a></p>
			<p style="font-size:12px; margin:0px;"><a href="<?php echo get_permalink(39); ?>">大学排名</a></p>
			<p style="font-size:12px; margin:0px;"><a href="#">专业排名</a></p>
		</div>
		<?php
	}
}

class footerColumn2Widget extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'Footer Column 2 Widget');
	}
	
	function widget() {
		?>
		<div class="font-center">
			<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cg16_home_con08_pic02.png" /></p>
			<p class="font-bold" style="font-size:14px;"><a href="<?php echo get_permalink(53); ?>">澳洲中学</a></p>
			<p style="font-size:12px; margin:0px;"><a href="<?php echo get_permalink(67); ?>">查找中学</a></p>
			<p style="font-size:12px; margin:0px;"><a href="<?php echo get_permalink(60); ?>">中学排名</a></p>
		</div>
		<?php
	}
}

class footerColumn3Widget extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'Footer Column 3 Widget');
	}
	
	function widget() {
		?>
		<div class="font-center">
			<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cg16_home_con08_pic03.png" /></p>
			<p class="font-bold" style="font-size:14px;"><a href="<?php echo get_permalink(19); ?>">澳洲移民</a></p>
			<p style="font-size:12px; margin:0px;"><a href="<?php echo get_permalink(31); ?>">移民职业清单</a></p>
			<p style="font-size:12px; margin:0px;"><a href="<?php echo get_permalink(33); ?>">移民职业评估</a></p>
			<p style="font-size:12px; margin:0px;"><a href="#">移民技术打分</a></p>
		</div>
		<?php
	}
}

class footerColumn4Widget extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'Footer Column 4 Widget');
	}
	
	function widget() {
		?>
		<div class="font-center">
			<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cg16_home_con08_pic04.png" /></p>
			<p class="font-bold" style="font-size:14px;"><a href="<?php echo get_permalink(89); ?>">澳洲签证</a></p>
			<p style="font-size:12px; margin:0px;"><a href="#">571 签证</a></p>
			<p style="font-size:12px; margin:0px;"><a href="#">573 签证</a></p>
			<p style="font-size:12px; margin:0px;"><a href="#">574 签证</a></p>
			<p style="font-size:12px; margin:0px;"><a href="#">580 签证</a></p>
			<p style="font-size:12px; margin:0px;"><a href="#">600 签证</a></p>
		</div>
		<?php
	}
}

class footerColumn5Widget extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'Footer Column 5 Widget');
	}
	
	function widget() {
		?>
		<div class="font-center">
			<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cg16_home_con08_pic05.png" /></p>
			<p class="font-bold" style="font-size:14px;"><a href="<?php echo get_permalink(89); ?>">我们的服务</a></p>
			<p style="font-size:12px; margin:0px;"><a href="<?php echo get_permalink(91); ?>">公司简介</a></p>
			<p style="font-size:12px; margin:0px;"><a href="<?php echo get_permalink(93); ?>">顾问介绍</a></p>
			<p style="font-size:12px; margin:0px;"><a href="<?php echo get_permalink(95); ?>">服务流程</a></p>
			<p style="font-size:12px; margin:0px;"><a href="<?php echo get_permalink(97); ?>">优惠活动</a></p>
			<p style="font-size:12px; margin:0px;"><a href="<?php echo get_permalink(100); ?>">注册会员</a></p>
			<p style="font-size:12px; margin:0px;"><a href="<?php echo get_permalink(103); ?>">联系我们</a></p>
		</div>
		<?php
	}
}

function footercolumnwidgets_register_widgets() {
	register_widget('FooterColumn1Widget');
	register_widget('FooterColumn2Widget');
	register_widget('FooterColumn3Widget');
	register_widget('FooterColumn4Widget');
	register_widget('FooterColumn5Widget');
}

add_action('widgets_init','footercolumnwidgets_register_widgets');

/**
*	Handling Shortcode
*/

// Search Form Shortcode
//[mainsearch]
function mainsearch_func () {
    $form ='<form action="' . home_url( '/' ) . '" id="mainsearch" method="get" class="">
			<div>
				<input type="submit" value=" 搜索" id="searchsubmit" class="button avia-font-entypo-fontello">
				<input type="text" id="s" name="s" value="" placeholder="Search">
			</div>
			</form>';
	return $form;
}
add_shortcode('mainsearch', 'mainsearch_func');

// Breadcrumbs Shortcode
function pagebreadcrumb_func () {
	return ;
}
add_shortcode('pagebreadcrumb', 'pagebreadcrumb_func');
?>


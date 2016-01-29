<?php
//import parent theme style sheet
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/custom.css' );

}

/**
*	Footer Column Widgets Register
*/
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

/**
*	Sidebar Widgets
*/

// Sidebar links
class sidebarLinksWidget extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'Sidebar Links');
	}
	
	function widget() {
		?>
		<div id="sidebar-links">
		<p>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cg16_home_con01_pic01.png"/> <span>留学移民服务</span></a>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cg16_home_con01_pic02.png"/> <span>微信讲座</span></a>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cg16_home_con01_pic03.png"/> <span>在线咨询</span></a>
		</p>
		</div>
		<?php
	}
}

// Sidebar News
class sidebarNewsWidget extends WP_Widget {
	function __construct() {
		parent::__construct(false, 'Sidebar News');
	}
	
	function widget() {
		echo '<div id="sidebar-news">';
		echo '<h2>经验与资讯</h3>';
		$args = array(
			'cat' => 3
		);
		
		$the_query = new WP_Query( $args );

		if ( $the_query->have_posts() ) :
		$post_count = 0;
		while ( $the_query->have_posts() && $post_count < 2 ) : $the_query->the_post();
			echo '<div class="news-block">';
			echo '<div class="news-preview">';
			echo '<h3><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3>';
			echo '<p>'.get_the_excerpt().'</p>';
			echo '</div>';
			echo '<div class="news-preview-image">'.get_the_post_thumbnail().'</div>';
			echo '</div>';
			$post_count++;
		endwhile;
		endif;

		wp_reset_postdata();
		echo '</div>';
	}
}

function footer_sidebar_register_widgets() {
	register_widget('FooterColumn1Widget');
	register_widget('FooterColumn2Widget');
	register_widget('FooterColumn3Widget');
	register_widget('FooterColumn4Widget');
	register_widget('FooterColumn5Widget');
	register_widget('sidebarLinksWidget');
	register_widget('sidebarNewsWidget');
}

add_action('widgets_init','footer_sidebar_register_widgets');



// Sidebar news loop

/**
*	Handling Shortcode
*/

// Search Form Shortcode
//[mainsearch]
function mainsearch_func () {
    $form ='<form action="' . home_url( '/' ) . '" id="mainsearch" method="get" class="">
			<div>
				<input type="submit" value=" 搜索" id="searchsubmit" class="button avia-font-entypo-fontello">
				<input type="text" id="s" name="s" value="" placeholder="搜索">
			</div>
			</form>';
	return $form;
}
add_shortcode('mainsearch', 'mainsearch_func');

// Breadcrumbs Shortcode
//[pagebreadcrumb]
function pagebreadcrumb_func () {
	global $avia_config;

	$id = avia_get_the_id();
	
	$defaults 	 = array(

		'title' 		=> get_the_title($id),
		'subtitle' 		=> "", //avia_post_meta($id, 'subtitle'),
		'link'			=> get_permalink($id),
		'html'			=> "<div class='{class} title_container page_breadcrumb'><div class='container'><{heading} class='main-title entry-title'>{title}</{heading}>{additions}</div></div>",
		'class'			=> 'stretch_full container_wrap alternate_color '.avia_is_dark_bg('alternate_color', true),
		'breadcrumb'	=> true,
		'additions'		=> "",
		'heading'		=> 'h1' //headings are set based on this article: http://yoast.com/blog-headings-structure/
	);

	if ( is_tax() || is_category() || is_tag() )
	{
		global $wp_query;

		$term = $wp_query->get_queried_object();
		$defaults['link'] = get_term_link( $term );
	}
	else if(is_archive())
	{
		$defaults['link'] = "";
	}
	
	
	// Parse incomming $args into an array and merge it with $defaults
	$args = wp_parse_args( $args, $defaults );
	$args = apply_filters('avf_title_args', $args, $id);

	//disable breadcrumb if requested
	//$args['breadcrumb'] = false;
	
	//disable title if requested
	$args['title'] = '';


	// OPTIONAL: Declare each item in $args as its own variable i.e. $type, $before.
	extract( $args, EXTR_SKIP );

	if(empty($title)) $class .= " empty_title ";
	$markup = avia_markup_helper(array('context' => 'avia_title','echo'=>false));
	if(!empty($link) && !empty($title)) $title = "<a href='".$link."' rel='bookmark' title='".__('Permanent Link:','avia_framework')." ".esc_attr( $title )."' $markup>".$title."</a>";
	if(!empty($subtitle)) $additions .= "<div class='title_meta meta-color'>".wpautop($subtitle)."</div>";
	if($breadcrumb) $additions .= avia_breadcrumbs(array('separator' => '/', 'richsnippet' => true));


	$html = str_replace('{class}', $class, $html);
	$html = str_replace('{title}', $title, $html);
	$html = str_replace('{additions}', $additions, $html);
	$html = str_replace('{heading}', $heading, $html);



	if(!empty($avia_config['slide_output']) && !avia_is_dynamic_template($id) && !avia_is_overview())
	{
		$avia_config['small_title'] = $title;
	}
	else
	{
		return $html;
	}
}
add_shortcode('pagebreadcrumb', 'pagebreadcrumb_func');

// Post Content Shortcode
// [postbrief id='']
function postbrief_func($attr) {
	$atts = shortcode_atts(array('id'=>'post id'),$attr);
	$post_title = get_post($atts['id'])->post_title;
	$post_content = get_post($atts['id'])->post_excerpt;
	$post_link = get_permalink($atts['id']);
	return '<div class="postbrief">
				<h3>'.$post_title.'</h3>
				<p>'.$post_content.'</p>
				<p><a href="'.$post_link.'">阅读更多<span class="more-link-arrow">  →</span></a></p>
			</div>';
}
add_shortcode ('postbrief','postbrief_func');

//	Page Sider Title Shortcode
//	[pageslidertitle]
function pageslidertitle_func() {
	$html = '<div style="padding-bottom:40px;"></div>';
	$title = '';
	if( is_page() ) {
		$link_array = explode('/', str_replace(get_bloginfo('url').'/', '' ,get_the_permalink()));
		$title = $link_array[0];
	} else if( is_single() ) {
		$cate = get_the_cat();
		$cslug = $cate->slug;
		if( $cslug = 'experience_info')
			$title = 'experience-and-consulting';
	}
	switch ($title) {
		case 'study-immigration':
			$chinese_title = '留学+移民';
			$english_title = 'STUDY & IMMIGRATION';
			break;
		case 'australian-university':
			$chinese_title = '读大学';
			$english_title = 'UNIVERSITY';
			break;
		case 'australian-high-school':
			$chinese_title = '读中学';
			$english_title = 'SCHOOLS';
			break;
		case 'art-students':
			$chinese_title = '艺术生';
			$english_title = 'ART & DESIGN';
			break;
		case 'visit-australian':
			$chinese_title = '探访澳洲';
			$english_title = 'VISITING AUSTRALIA';
			break;
		case 'experience-and-consulting':
			$chinese_title = '经验与资讯';
			$english_title = 'EXPERIENCE STORY NEWS';
			break;
		case 'our-service':
			$chinese_title = '我们的服务';
			$english_title = 'OUR SERVICE';
			break;
		default:
			$chinese_title = '成立于1999年';
			$english_title = '不成功不收费';
	}
	$html .= '<div id="chinese_title"><p>'.$chinese_title.'</p></div>';
	$html .= '<div id="english_title"><p>'.$english_title.'</p></div>';
	$html .= '<img style="margin-top:30px;" src="'.get_stylesheet_directory_uri().'/images/cg16_secondary_bannerleftfont.png"/>';
	return $html;
}
add_shortcode ('pageslidertitle','pageslidertitle_func');

/**
*	Post Excerpt Changes
*/
// Change excerpt symbol
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Change excerpt length
function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>


<?php
	global $avia_config, $more;

	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */
	 get_header();
	
		
		$showheader = true;
		if(avia_get_option('frontpage') && $blogpage_id = avia_get_option('blogpage'))
		{
			if(get_post_meta($blogpage_id, 'header', true) == 'no') $showheader = false;
		}
		
	 	if($showheader)
	 	{
			echo avia_title(array('title' => avia_which_archive()));
		}
		
		do_action( 'ava_after_main_title' );
	?>
	
		<div id="page_slider_title_content" class="av-layout-grid-container entry-content-wrapper main_color av-flex-cells  avia-builder-el-0  el_before_av_codeblock  avia-builder-el-first  container_wrap sidebar_left">
			<div class="flex_cell no_margin av_one_fourth  avia-builder-el-1  el_before_av_cell_three_fourth  avia-builder-el-first   av-zero-padding " style="vertical-align:top; padding:0px; ">
				<div class="flex_cell_inner">
					<div id="page-slider-title">
						<?php echo do_shortcode('[pageslidertitle]'); ?>
					</div> 
				</div>
			</div>
			<div class="flex_cell no_margin av_three_fourth  avia-builder-el-3  el_after_av_cell_one_fourth  avia-builder-el-last   av-zero-padding " style="vertical-align:top; padding:0px; ">
				<div class="flex_cell_inner">
					<section class="avia_codeblock_section avia_code_block_1" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
						<div class="avia_codeblock " itemprop="text">
							<?php echo do_shortcode('[rev_slider alias="page_slider"]'); ?>
						</div>
					</section>
				</div>
			</div>
		</div>

		<div class='container_wrap container_wrap_first main_color <?php avia_layout_class( 'main' ); ?>'>

			<div class='container template-blog '>

				<main class='content <?php avia_layout_class( 'content' ); ?> units' <?php avia_markup_helper(array('context' => 'content','post_type'=>'post'));?>>
					
					<section class="avia_codeblock_section avia_code_block_2" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
						<div class="avia_codeblock " itemprop="text">
							<?php echo do_shortcode("[mainsearch]");?>
						</div>
					</section>
					
					<?php echo do_shortcode("[pagebreadcrumb]"); ?>
					
					<?php 
						
						$tds =  term_description(); 
						if($tds)
						{
							echo "<div class='category-term-description'>{$tds}</div>";
						}
					?>
                    

                    <?php
                    $avia_config['blog_style'] = apply_filters('avf_blog_style', avia_get_option('blog_style','multi-big'), 'archive');
                    if($avia_config['blog_style'] == 'blog-grid')
                    {
                        global $posts;
                        $post_ids = array();
                        foreach($posts as $post) $post_ids[] = $post->ID;

                        if(!empty($post_ids))
                        {
                            $atts   = array(
                                'type' => 'grid',
                                'items' => get_option('posts_per_page'),
                                'columns' => 3,
                                'class' => 'avia-builder-el-no-sibling',
                                'paginate' => 'yes',
                                'use_main_query_pagination' => 'yes',
                                'custom_query' => array( 'post__in'=>$post_ids, 'post_type'=>get_post_types() )
                            );

                            $blog = new avia_post_slider($atts);
                            $blog->query_entries();
                            echo "<div class='entry-content-wrapper'>".$blog->html()."</div>";
                        }
                        else
                        {
                            get_template_part( 'includes/loop', 'index' );
                        }
                    }
                    else
                    {
                        /* Run the loop to output the posts.
                        * If you want to overload this in a child theme then include a file
                        * called loop-index.php and that will be used instead.
                        */

                        $more = 0;
                        get_template_part( 'includes/loop', 'index' );
                    }
                    ?>

				<!--end content-->
				</main>

				<?php

				//get the sidebar
				$avia_config['currently_viewing'] = 'blog';
				get_sidebar();

				?>

			</div><!--end container-->

		</div><!-- close default .container_wrap element -->




<?php get_footer(); ?>

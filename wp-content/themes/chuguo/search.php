<?php
global $avia_config;


	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */
	 get_header();
	 
	 //	allows to customize the layout
	 do_action( 'ava_search_after_get_header' );


	 $results = avia_which_archive();
	 echo avia_title(array('title' => $results ));
	 
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

			<div class='container' id="search-content">

				<div class='content template-search <?php avia_layout_class( 'content' ); ?> units' <?php avia_markup_helper(array('context' => 'content'));?>>
					
					<section class="avia_codeblock_section avia_code_block_2" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
						<div class="avia_codeblock " itemprop="text">
							<?php echo do_shortcode("[mainsearch]");?>
						</div>
					</section>
					
					<?php echo do_shortcode("[pagebreadcrumb]"); ?>
					
                    <?php
                    if(!empty($_GET['s']) || have_posts())
                    {
                        echo "<h4 class='extra-mini-title widgettitle'>{$results}</h4>";

                        /* Run the loop to output the posts.
                        * If you want to overload this in a child theme then include a file
                        * called loop-search.php and that will be used instead.
                        */
                        $more = 0;
                        get_template_part( 'includes/loop', 'search' );

                    }

                    ?>

				<!--end content-->
				</div>

				<?php

				//get the sidebar
				$avia_config['currently_viewing'] = 'page';

				get_sidebar();

				?>

			</div><!--end container-->

		</div><!-- close default .container_wrap element -->




<?php get_footer(); ?>

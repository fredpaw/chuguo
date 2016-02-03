<?php
	global $avia_config, $more;

	/*
	* get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	*/
	get_header();


	$description = is_tag() ? tag_description() : category_description();
	echo avia_title(array('title' => avia_which_archive(), 'subtitle' => $description, 'link'=>false));

	$author_id    = get_query_var( 'author' );
	$name         = apply_filters('avf_author_name', get_the_author_meta('display_name', $author_id), $author_id);
	$heading_s    = __("Entries by",'avia_framework') ." ".$name;

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

			<div class='container template-blog template-author '>

				<main class='content <?php avia_layout_class( 'content' ); ?> units' <?php avia_markup_helper(array('context' => 'content'));?>>

					<section class="avia_codeblock_section avia_code_block_2" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
						<div class="avia_codeblock " itemprop="text">
							<?php echo do_shortcode("[mainsearch]");?>
						</div>
					</section>
					
					<?php echo do_shortcode("[pagebreadcrumb]"); ?>
				
                    <div class='page-heading-container clearfix'>
                    <?php

                        get_template_part( 'includes/loop', 'about-author' );

                    ?>
                    </div>


                    <?php
                    echo "<h4 class='extra-mini-title widgettitle'>{$heading_s}</h4>";



                    /* Run the loop to output the posts.
                    * If you want to overload this in a child theme then include a file
                    * called loop-index.php and that will be used instead.
                    */


                    $more = 0;
                    get_template_part( 'includes/loop', 'author' );
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

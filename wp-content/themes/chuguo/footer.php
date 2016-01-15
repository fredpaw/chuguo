		<?php
			
		do_action( 'ava_before_footer' );	
			
		global $avia_config;
		$blank = isset($avia_config['template']) ? $avia_config['template'] : "";

		//reset wordpress query in case we modified it
		wp_reset_query();


		//get footer display settings
		$the_id 				= avia_get_the_id(); //use avia get the id instead of default get id. prevents notice on 404 pages
		$footer 				= get_post_meta($the_id, 'footer', true);
		$footer_widget_setting 	= !empty($footer) ? $footer : avia_get_option('display_widgets_socket');


		//check if we should display a footer
		if(!$blank && $footer_widget_setting != 'nofooterarea' )
		{
			if( $footer_widget_setting != 'nofooterwidgets' )
			{
				//get columns
				$columns = avia_get_option('footer_columns');
		?>
				<div class='container_wrap footer_color' id='footer'>
					<div class='container footer-title'>
						<p class="font-center" style="font-size:24px;">快速查看</p>
					</div>
					<div class='container'>

						<?php
						do_action('avia_before_footer_columns');

						//create the footer columns by iterating

						
				        switch($columns)
				        {
				        	case 1: $class = ''; break;
				        	case 2: $class = 'av_one_half'; break;
				        	case 3: $class = 'av_one_third'; break;
				        	case 4: $class = 'av_one_fourth'; break;
				        	case 5: $class = 'av_one_fifth'; break;
				        	case 6: $class = 'av_one_sixth'; break;
				        }
				        
				        $firstCol = "first el_before_{$class}";

						//display the footer widget that was defined at appearenace->widgets in the wordpress backend
						//if no widget is defined display a dummy widget, located at the bottom of includes/register-widget-area.php
						for ($i = 1; $i <= $columns; $i++)
						{
							$class2 = ""; // initialized to avoid php notices
							if($i != 1) $class2 = " el_after_{$class}  el_before_{$class}";
							echo "<div class='flex_column {$class} {$class2} {$firstCol}'>";
							if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer - column'.$i) ) : else : avia_dummy_widget($i); endif;
							echo "</div>";
							$firstCol = "";
						}

						do_action('avia_after_footer_columns');

						?>


					</div>


				<!-- ####### END FOOTER CONTAINER ####### -->
				</div>

	<?php   } //endif nofooterwidgets ?>



			

			<?php

			//copyright
			$copyright = do_shortcode( avia_get_option('copyright', "&copy; ".__('Copyright','avia_framework')."  - <a href='".home_url('/')."'>".get_bloginfo('name')."</a>") );

			// you can filter and remove the backlink with an add_filter function
			// from your themes (or child themes) functions.php file if you dont want to edit this file
			// you can also just keep that link. I really do appreciate it ;)
			$kriesi_at_backlink = kriesi_backlink(get_option(THEMENAMECLEAN."_initial_version"));


			//you can also remove the kriesi.at backlink by adding [nolink] to your custom copyright field in the admin area
			if($copyright && strpos($copyright, '[nolink]') !== false)
			{
				$kriesi_at_backlink = "";
				$copyright = str_replace("[nolink]","",$copyright);
			}

			if( $footer_widget_setting != 'nosocket' )
			{

			?>

				<footer class='container_wrap socket_color' id='socket' <?php avia_markup_helper(array('context' => 'footer')); ?>>
					<div id='socket-company-detail-wrapper'>
						<div class="av-layout-grid-container entry-content-wrapper av-flex-cells container" id='socket-company-detail'>
							<div class="flex_cell no_margin av_two_third  avia-builder-el-2  el_before_av_cell_one_third  avia-builder-el-first no-padding">
								<div class="flex_cell_inner company-detail">
									<p class="font-bold" style="line-height:23px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cg16_home_footer_icon01.png" /> 成功出国留学网&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cg16_home_footer_icon02.png" /> 法兰克澳洲留学移民事务所 中国代表处</p>
									<p style="font-size:32px;line-height:32px;">提供一站式澳大利亚留学移民专业服务</p>
									<p style="margin-left:30px;margin-top:40px; margin-bottom:30px;"><span style="font-size:26px; color:#fff; display:inline-box; -webkit-border-radius: 5; -moz-border-radius: 5; border-radius: 5px;
  background: #3498db; padding: 15px 30px 15px 30px;";>成立于1999年</span></p>
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cg16_home_footer_site.png" /> 北京市朝阳区东大桥路8号soho尚都南塔2805室</p>
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cg16_home_footer_phone.png" /> 010-59003028</p>
									<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cg16_home_footer_email.png" /> services@cg6xue.com</p>
								</div>
							</div>
							<div class="flex_cell no_margin av_one_third  avia-builder-el-3  el_after_av_cell_two_third  avia-builder-el-last no-padding">
								<div class="flex_cell_inner qr-code">
									<p class="font-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cg16_weixin.png" /></p>
								</div>
							</div>
						</div>
					</div>
					<div class='container' id='socket-links'>
						<h3>友情链接</h3>
						<div id="friendly-links">
						<a href="http://www.examw.com/toefl/">托福考试</a>&nbsp;&nbsp;|&nbsp;
						<a href="http://tieling.offcn.com/">铁岭人事人才网</a>&nbsp;&nbsp;|&nbsp;
						<a href="http://www.mlnconsultant.com/">新加坡移民</a>&nbsp;&nbsp;|&nbsp;
						<a href="http://www.cufeyk.com/">中央财经大学留学</a>&nbsp;&nbsp;|&nbsp;
						<a href="http://bj.fenlei168.com/waiyupeixun/">英语培训学校</a>&nbsp;&nbsp;|&nbsp;
						<a href="http://www.yuloo.com/mba/">MBA</a>&nbsp;&nbsp;|&nbsp;
						<a href="http://www.idp.cn/yingguo/">英国留学</a>&nbsp;&nbsp;|&nbsp;
						<a href="http://zhaotong.offcn.com/">昭通人事人才网</a>&nbsp;&nbsp;|&nbsp;
						<a href="http://www.egoedu.com/">美国留学</a>&nbsp;&nbsp;|&nbsp;
						<a href="http://www.gjgwy.org/guangxi/">广西公务员考试网</a>&nbsp;&nbsp;|&nbsp;
						<a href="http://www.truego.com/">留学第一站</a>&nbsp;&nbsp;|&nbsp;
						<a href="http://www.ykmba.com/">MBA培训班</a>&nbsp;&nbsp;|&nbsp;
						<a href="http://cc.eduease.com/">长春家教</a>
						</div>
					</div>

	            <!-- ####### END SOCKET CONTAINER ####### -->
				</footer>


			<?php
			} //end nosocket check


		
		
		} //end blank & nofooterarea check
		?>
		<!-- end main -->
		</div>
		
		<?php
		//display link to previeous and next portfolio entry
		echo avia_post_nav();

		echo "<!-- end wrap_all --></div>";


		if(isset($avia_config['fullscreen_image']))
		{ ?>
			<!--[if lte IE 8]>
			<style type="text/css">
			.bg_container {
			-ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $avia_config['fullscreen_image']; ?>', sizingMethod='scale')";
			filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $avia_config['fullscreen_image']; ?>', sizingMethod='scale');
			}
			</style>
			<![endif]-->
		<?php
			echo "<div class='bg_container' style='background-image:url(".$avia_config['fullscreen_image'].");'></div>";
		}
	?>


<?php




	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */


	wp_footer();


?>
<a href='#top' title='<?php _e('Scroll to top','avia_framework'); ?>' id='scroll-top-link' <?php echo av_icon_string( 'scrolltop' ); ?>><span class="avia_hidden_link_text"><?php _e('Scroll to top','avia_framework'); ?></span></a>

<div id="fb-root"></div>
</body>
</html>

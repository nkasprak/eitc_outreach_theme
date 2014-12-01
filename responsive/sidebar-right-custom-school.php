<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Main Widget Template
 *
 *
 * @file           sidebar-right-custom-school.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-right-custom-school.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>



		<?php responsive_widgets_before(); // above widgets container hook ?>
        <div id="widgets" class="grid col-300 fit articlenav">

	<ul>
		<?php
		  if($post->post_parent) {
		  $children = wp_list_pages("title_li=&depth=1&child_of=".$post->ancestors[1]."&echo=0");
		  $titlenamer = get_the_title($post->ancestors[1]);
		  }

		  else {
		  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
		  $titlenamer = get_the_title($post->ID);
		  }
		  if ($children) { ?>

		  <li><a href="<?php echo get_permalink($post->post_parent) ?>"><?php echo $titlenamer;?></a></li>
		  <ul>
		  <?php echo $children; ?>
		  </ul>

		<?php } ?>
	</ul>

<!--attempting to list child pages of grandparent-->
		<ul class="sidebarnav">
		<?php
		  if($post->post_parent) {
		  $children = wp_list_pages("title_li=&child_of=".$post->ancestor[2]."&hierarchical=0&parent=".$post->ancestors[2]."&echo=0");
		  }

		  else {
		  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
		  }
		  if ($children) { ?>
		  <ul>
		  <?php echo $children; ?>
		  </ul>

		<?php } ?>
  		</ul>
<!--end attempting to list child pages of grandparent-->



        <?php responsive_widgets(); // above widgets hook ?>
            
<!--hide default archive box

            <?php if (!dynamic_sidebar('right-sidebar-custom')) : ?>
            <div class="widget-wrapper">
            
                <div class="widget-title"><?php _e('In Archive', 'responsive'); ?></div>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>

            </div><!-- end of .widget-wrapper -->
			<?php endif; //end of right-sidebar ?>

<!--end hide default archvive box-eb-->

 
        <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of #widgets -->
		<?php responsive_widgets_after(); // after widgets container hook ?>
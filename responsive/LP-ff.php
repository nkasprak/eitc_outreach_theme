<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Landing Page Template
 
   Template Name:  LP - FAQ
 *
 * @file           LP-ff.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/LP-ff.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<style>
#faqwrap #faq {background: #00467F; background:url("/wp-content/uploads/ff.png") no-repeat;}
#faqwrap .maincattitle.dim {color:#00467F;}
#faqwrap .maincatsubtitle.dim {color:rgb(85,85,85);}
#faqwrap .categoryicons.dim {width:81px; height:81px;}
</style><!--eb-->

<div class="maincattitle topictitle"><?php echo get_the_title(); ?></div>

<!--eb-->
<?php echo get_post_field('post_content', 504);?>
<!--end eb-->  


<div id="content-full" class="grid col-940">
        
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
        
			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>       
				<?php responsive_entry_top(); ?>

                <!--eb<h1 class="post-title maincattitle topictitle"><?php the_title(); ?></h1>--> 
                
                <div class="post-entry">
                    <?php the_content(__('Read more &#8250;', 'responsive')); ?>
                    <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
                </div><!-- end of .post-entry -->
            
				<?php get_template_part( 'post-data' ); ?>
				               
				<?php responsive_entry_bottom(); ?>      
			</div><!-- end of #post-<?php the_ID(); ?> -->       
			<?php responsive_entry_after(); ?>
                        
        <?php 
		endwhile; 

		get_template_part( 'loop-nav' ); 

	else : 

		get_template_part( 'loop-no-posts' ); 

	endif; 
	?>

<!--eb-->
<?php echo get_post_field('post_content', 276);?>
<!--end eb-->  
      
</div><!-- end of #content-full -->

<?php get_footer(); ?>

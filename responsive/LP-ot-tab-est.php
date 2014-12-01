<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Landing Page Template
 
   Template Name:  LP - Outreach Tools - TAB - est
 *
 * @file           LP-ot-tab-est.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/LP-ot-tab-est.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<style>
#outreachtoolswrap #outreachtools {background: #00467F; background:url("/wp-content/uploads/ot.png") no-repeat;}
#outreachtoolswrap .maincattitle.dim {color:#00467F;}
#outreachtoolswrap .maincatsubtitle.dim {color:rgb(85,85,85);}
#outreachtoolswrap .categoryicons.dim {width:81px; height:81px;}
</style><!--eb-->

<div class="maincattitle topictitle">Outreach Tools</div>

<div id="content-full" class="grid col-940">

<div class="grid col-940 fit">
<div class="rollodex">
<div class="grid rtabwrap selected"><div><a href="/outreach-tools-3/the-eic-estimator/">The EIC Estimator</a></div></div>
<div class="grid rtabwrap dim"><div><a href="/outreach-tools-3/materials/">Materials</a></div></div>
<div class="grid rtabwrap dim"><div><a href="/outreach-tools-3/resources/">Resources</a></div></div>
<div class="grid rtabwrap dim"><div><a href="/outreach-tools-3/irs-tax-forms/">IRS Tax Forms & Links</a></div></div>
<div class="grid rtabwrap dim"><div><a href="/outreach-tools-3/useful-links/">Useful Links</a></div></div>
<div class="rcardwrap grid fit">
<div class="rcard">
<div class="maincattitle currenttab down28">
      Welcome to The Earned Income Tax Credit Estimator for Tax Year 2013
    </div><p>
      Begin by clicking on the button that best describes your household by marital status and number of children.
    </p>
<div id="estimator">
<div class="estcell estheader est14">
<p>Marital Status</p>
</div>
<div class="estcell estheader fauxborder"></div>
<div class="estcell estheader est34">
<p>Number of Children Under the Age of 19</p>
</div>
<div class="estrow">
<div class="estcell">
<p>Single</p>
</div>
<div class="estcell estheader fauxborder"></div>
<div class="estcell"><a href="/home/outreach-tools/the-eic-estimator/estsingle0">
<div class="estbutton">0</div></a></div>
<div class="estcell"><a href="/home/outreach-tools/the-eic-estimator/estsingle1">
<div class="estbutton">1</div></a></div>
<div class="estcell"><a href="/home/outreach-tools/the-eic-estimator/estsingle2">
<div class="estbutton">2</div>
</a></div>
<div class="estcell estlast"><a href="/home/outreach-tools/the-eic-estimator/estsingle3">
<div class="estbutton">3 or More</div>
</a></div>
<div class="estcell estline">
<p>Married</p>
</div>
<div class="estcell estheader fauxborder"></div>
<div class="estcell estline"><a href="/home/outreach-tools/the-eic-estimator/estmarried0">
<div class="estbutton">0</div>
</a></div>
<div class="estcell estline"><a href="/home/outreach-tools/the-eic-estimator/estmarried1">
<div class="estbutton">1</div>
</a></div>
<div class="estcell estline"><a href="/home/outreach-tools/the-eic-estimator/estmarried2">
<div class="estbutton">2</div>
</a></div>
<div class="estcell estline estlast"><a href="/home/outreach-tools/the-eic-estimator/estmarried3">
<div class="estbutton">3 or More</div>
</a></div>
</div>
</div>
<div>
<h5><strong>Reminder</strong></h5>
This is just an estimator tool intended to illustrate what the EITC might be worth to you. Visit the IRS Website at www.irs.gov for publications and contacts that can help you determine if you are eligible and how large your credit will be.
</div>
        
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
</div>
</div>

</div>
</div>

<!--eb-->
<?php echo get_post_field('post_content', 276);?>
<!--end eb-->  
      
</div><!-- end of #content-full -->

<?php get_footer(); ?>

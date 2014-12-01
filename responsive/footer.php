<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/* 
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
		<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
    </div><!-- end of #wrapper -->
    <?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer" class="clearfix">
	<?php responsive_footer_top(); ?>

    <div id="footer-wrapper">
    
        <div class="grid col-940">
        
        <div class="grid col-540">
		<?php if (has_nav_menu('footer-menu', 'responsive')) { ?>
	        <?php wp_nav_menu(array(
				    'container'       => '',
					'fallback_cb'	  =>  false,
					'menu_class'      => 'footer-menu',
					'theme_location'  => 'footer-menu')
					); 
				?>
         <?php } ?>
         </div><!-- end of col-540 -->
         
         <div class="grid col-380 fit">
         <?php
					
            // First let's check if any of this was set
		
                echo '<ul class="social-icons">';
					
                if (!empty($responsive_options['twitter_uid'])) echo '<li class="twitter-icon"><a href="' . $responsive_options['twitter_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/twitter-icon.png" width="24" height="24" alt="Twitter">'
                    .'</a></li>';

                if (!empty($responsive_options['facebook_uid'])) echo '<li class="facebook-icon"><a href="' . $responsive_options['facebook_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/facebook-icon.png" width="24" height="24" alt="Facebook">'
                    .'</a></li>';
  
                if (!empty($responsive_options['linkedin_uid'])) echo '<li class="linkedin-icon"><a href="' . $responsive_options['linkedin_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/linkedin-icon.png" width="24" height="24" alt="LinkedIn">'
                    .'</a></li>';
					
                if (!empty($responsive_options['youtube_uid'])) echo '<li class="youtube-icon"><a href="' . $responsive_options['youtube_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/youtube-icon.png" width="24" height="24" alt="YouTube">'
                    .'</a></li>';
					
                if (!empty($responsive_options['stumble_uid'])) echo '<li class="stumble-upon-icon"><a href="' . $responsive_options['stumble_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/stumble-upon-icon.png" width="24" height="24" alt="StumbleUpon">'
                    .'</a></li>';
					
                if (!empty($responsive_options['rss_uid'])) echo '<li class="rss-feed-icon"><a href="' . $responsive_options['rss_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/rss-feed-icon.png" width="24" height="24" alt="RSS Feed">'
                    .'</a></li>';
       
                if (!empty($responsive_options['google_plus_uid'])) echo '<li class="google-plus-icon"><a href="' . $responsive_options['google_plus_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/googleplus-icon.png" width="24" height="24" alt="Google Plus">'
                    .'</a></li>';
					
                if (!empty($responsive_options['instagram_uid'])) echo '<li class="instagram-icon"><a href="' . $responsive_options['instagram_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/instagram-icon.png" width="24" height="24" alt="Instagram">'
                    .'</a></li>';
					
                if (!empty($responsive_options['pinterest_uid'])) echo '<li class="pinterest-icon"><a href="' . $responsive_options['pinterest_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/pinterest-icon.png" width="24" height="24" alt="Pinterest">'
                    .'</a></li>';
					
                if (!empty($responsive_options['yelp_uid'])) echo '<li class="yelp-icon"><a href="' . $responsive_options['yelp_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/yelp-icon.png" width="24" height="24" alt="Yelp!">'
                    .'</a></li>';
					
                if (!empty($responsive_options['vimeo_uid'])) echo '<li class="vimeo-icon"><a href="' . $responsive_options['vimeo_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/vimeo-icon.png" width="24" height="24" alt="Vimeo">'
                    .'</a></li>';
					
                if (!empty($responsive_options['foursquare_uid'])) echo '<li class="foursquare-icon"><a href="' . $responsive_options['foursquare_uid'] . '">'
                    .'<img src="' . get_stylesheet_directory_uri() . '/icons/foursquare-icon.png" width="24" height="24" alt="foursquare">'
                    .'</a></li>';
             
                echo '</ul><!-- end of .social-icons -->';
         ?>
         </div><!-- end of col-380 fit -->
         
         </div><!-- end of col-940 -->
         <?php get_sidebar('colophon'); ?>
                
<!----eb---->
<div class="footerlinkwrap">
<div class="footer grid col-220 first"><div><a href="/home/eitc-outreach-kit-full-pdfs/">EITC Outreach Kit<br>(Full pdfs)</a></div></div>
<div class="footer grid col-220"><div><a href="/home/2322-2/">Tax Help for Individuals:<br>Looking for Tax Help?</a></div></div>
<div class="footer grid col-220"><div><a href="/eitc-outreach-mailing-list/">Join Our<br>Mailing List</a></div></div>
<div class="footer grid col-220 fit"><div><a href="/home/outreach-tools/useful-links/in-the-news/">In the<br>News</a></div></div>
</div>
<div id="footerbar" class="grid col-940">
<div class="footerleft">
<p><strong>It's Your Money. Now Claim It!</strong> National Tax Credit Outreach Campaign<br>
<a href="http://www.cbpp.org">Center on Budget and Policy Priorities</a><br>
820 First Street, NE, Suite 510<br>
Washington, DC 20002 </p>
</div>
<div class="footerright">
<p>Copyright © 2013 · All Rights Reserved</p>
</div>
</div>

<!--end eb-->

        <div class="grid col-300 copyright">
            <?php esc_attr_e('&copy;', 'responsive'); ?> <?php _e(date('Y')); ?><a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </div><!-- end of .copyright -->
        
        <div class="grid col-300 scroll-top"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'responsive' ); ?>"><?php _e( '&uarr;', 'responsive' ); ?></a></div>
        
        <div class="grid col-300 fit powered">
            <a href="<?php echo esc_url(__('http://themeid.com/responsive-theme/','responsive')); ?>" title="<?php esc_attr_e('Responsive Theme', 'responsive'); ?>">
                    <?php printf('Responsive Theme'); ?></a>
            <?php esc_attr_e('powered by', 'responsive'); ?> <a href="<?php echo esc_url(__('http://wordpress.org/','responsive')); ?>" title="<?php esc_attr_e('WordPress', 'responsive'); ?>">
                    <?php printf('WordPress'); ?></a>
        </div><!-- end .powered -->
        
    </div><!-- end #footer-wrapper -->
    
	<?php responsive_footer_bottom(); ?>
</div><!-- end #footer -->
<?php responsive_footer_after(); ?>

<?php wp_footer(); ?>
</body>
</html>
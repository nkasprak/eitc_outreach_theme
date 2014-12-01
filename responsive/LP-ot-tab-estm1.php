<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Landing Page Template
 
   Template Name:  LP - Outreach Tools - TAB - estm1
 *
 * @file           LP-ot-tab-estm1.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/LP-ot-tab-estm1.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<SCRIPT LANGUAGE=JavaScript>



function checkNumber(obj)
{
        var str = obj.value;

        if (str.length == 0 || str == "" || str == null) {
                return false;
        }

        for (var i = 0; i < str.length; i++) {
                var ch = str.substring(i, i + 1)
                if ((ch < "0" || "9" < ch) && ch != '.' && ch != '$' && ch != ',') {
                        return false;
                }
        }

        return true;
}

function tonum(str) 
{
        var     nstr = "";

        for (var i = 0; i < str.length; i++) {
                var ch = str.substring(i, i + 1);
                if ((ch >= "0" && ch <= "9") || ch == '.') {
                        nstr += ch;
                }
        }

        return parseFloat(nstr);
}

function valueOrDefault(obj, defval) 
{
        if (!checkNumber(obj)) {
                return defval;
        }

        var val = tonum(obj.value);

        if (val == 0) {
                return defval;
        }
        return val;
}


function format(val, len, decimal)
{
        var     scale = 1;

        if (decimal == null)
                decimal = 1;

        for (i = 0; i <= decimal; i++)
                scale *= 10;

        var     str = "" + Math.round(parseFloat(val) * scale);

        if (str.length == 0 || str == "0") {
                str = "000";
        }

        str = "$" + str;
        i = len - str.length;
        if (scale != 1)
                i--;
        while (0 < i--) 
                str = " " + str;
        if (scale != 1) {
                var p = len - decimal - 2;
                var a = str.substring(0, p);
                var b = str.substring(p, len);
                return a + "." + b;
        }
        return str;
}

function compute(input)
{
        var form = input.form;

   	EARNINGS = valueOrDefault(form.FORMEARNINGS, 0);
//	STATUS = valueOrDefault(form.FORMSTATUS, 0);

        // get the center of earnings brackets 
        if (EARNINGS >= 1) {    // don't do this if earnings are zero 
                EARNINGS = Math.floor (EARNINGS / 50); 
                EARNINGS = (EARNINGS * 50) + 25; 

} 

<!-- Formula for Married with 1 Kid -->

	if (EARNINGS < 9560){EITC = Math.round(100*(EARNINGS * .34)/100)}

	if (EARNINGS > 9559)
	if (EARNINGS < 22870){EITC = 3250}

	if (EARNINGS > 22869)
	if (EARNINGS < 43210){EITC = Math.round(100*(3250 - (.1598 * (EARNINGS - 22870)))/100)};

	if (EARNINGS > 43210){EITC = "Not Eligible"}

	form.total.value = "";
  	form.total.value = EITC;
//	var comm1="";

}





</SCRIPT>

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

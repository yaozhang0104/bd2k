<?php
/**
 * Template Name: Working
 *
 * @package EvoLve
 * @subpackage Template
 */
get_header();
$xyz = "";
$evolve_layout = evolve_get_option('evl_layout', '2cl');
$evolve_post_layout = evolve_get_option('evl_post_layout', 'two');
$evolve_nav_links = evolve_get_option('evl_nav_links', 'after');
$evolve_header_meta = evolve_get_option('evl_header_meta', 'single_archive');
$evolve_category_page_title = evolve_get_option('evl_category_page_title', '1');
$evolve_excerpt_thumbnail = evolve_get_option('evl_excerpt_thumbnail', '0');
$evolve_share_this = evolve_get_option('evl_share_this', 'single');
$evolve_post_links = evolve_get_option('evl_post_links', 'after');
$evolve_similar_posts = evolve_get_option('evl_similar_posts', 'disable');
$evolve_featured_images = evolve_get_option('evl_featured_images', '1');
$evolve_edit_post = evolve_get_option('evl_edit_post', '0');
$evolve_thumbnail_default_images = evolve_get_option('evl_thumbnail_default_images', '0');
$evolve_posts_excerpt_title_length = intval(evolve_get_option('evl_posts_excerpt_title_length', '40'));
$evolve_blog_featured_image = evolve_get_option('evl_blog_featured_image', '0');
if (evolve_lets_get_sidebar_2() == true):
    get_sidebar('2');
endif;
?>

<!--BEGIN #primary .hfeed-->

<div id="primary" class="<?php evolve_layout_class($type = 1); ?>">

    
<div style="width:15%;display:inline-block;vertical-align:top;"> 
<ul id="wk2">
<li><a id="v0" class="highlight" onclick="highlightv(this);" href="javascript:setWG();">Working Group</a></li>
<li><a onclick="highlightv(this);" href="javascript:setWG();">API</a></li>
<li><a onclick="highlightv(this);" href="javascript:setMetadata();">Metadata</a></li>
</ul>
</div>
<div style="display:inline-block;width:1px;height:600px;"><div class="vline" style="vertical-align:top;height:600px;"></div></div>
<div id="wkmain" style="width:83%;">

<div id="main-page" class="show" style="height:700px;">
<div style="font-size:25px;text-align:center;">Welcome to the NIH BD2K Working Group site</div>
<?php if ( !is_user_logged_in() ) {?>
<div style="width:55%;display:inline-block;vertical-align:top;">
<div id="myform" style="float:right;margin-top:50px;margin-right:30px;">
<div style="font-size:24px;color:#4a4a4a;">Please Sign in</div>
<div style="margin-top:30px;"><?php wp_login_form(); ?></div>
<a href="<?php echo wp_lostpassword_url(); ?>" title="Lost Password">Lost Password</a>
</div>
</div>
<div style="width:43%;display:inline-block;vertical-align:top;margin-top:50px;">
<div style="color:#535353;">A part of the National Institutes of Health <a href="https://datascience.nih.gov/">Big Data to Knowledge (BD2K)</a> Initiative.
The BD2K Working Group site provides an online collaborative space for researchers to work together on cross-cutting topics and projects. The site also provides access to the broader scientific community involved in biomedical big data science, and the products of the BD2K working groups.
The working groups are supported by the <a href=<?php echo get_home_url();?>>BD2K Centers Coordination Center</a>.</div>
</div>
<?php } else { ?>
<div style="width:100%;display:block;vertical-align:top;margin-top:50px;margin-left:5px;">
<div style="color:#535353;">A part of the National Institutes of Health <a href="https://datascience.nih.gov/">Big Data to Knowledge (BD2K)</a> Initiative.
The BD2K Working Group site provides an online collaborative space for researchers to work together on cross-cutting topics and projects. The site also provides access to the broader scientific community involved in biomedical big data science, and the products of the BD2K working groups.
The working groups are supported by the <a href=<?php echo get_home_url();?>>BD2K Centers Coordination Center</a>.</div>
</div>
<div style="margin-top:40px;width:100%;"><div style="width:100px;margin:auto;"><a style="width:150px;" class="read-more btn t4p-button-default" href=<?php echo wp_logout_url(); ?> >Logout</a></div></div>
<?php } ?>
</div>

<div id="metadata-front" class="hide" style="height:800px;">
</div>

<div id="metadata-event" class="hide" style="height:800px;">
</div>

<div id="metadata-forum" class="hide" style="margin-bottom:100px;">
</div>

<div id="metadata-roster" class="hide" style="margin-bottom:100px;width:90%;margin:auto;">
</div>

<div id="metadata-meeting" class="hide" style="margin-bottom:100px;">
</div>

<div id="metadata-resource" class="hide" style="margin-bottom:100px;">
</div>

</div>


    <!--END #primary .hfeed-->
</div>


<?php if (evolve_lets_get_sidebar() == true): ?>
    <?php get_sidebar(); ?>
<?php endif; ?>
<?php get_footer(); ?>
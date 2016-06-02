<?php
/**
 * Template Name: signin
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


<div style="height:700px;">
<div style="font-size:25px;text-align:center;">Welcome to BD2KCCC</div>
<div style="width:100%;display:inline-block;vertical-align:top;margin-top:50px;">
<?php if(!is_user_logged_in()) {?>
<div id="myform" style="margin:auto;">
<div style="font-size:24px;color:#4a4a4a;">Please Sign in</div>
<div style="margin-top:30px;"><?php wp_login_form(); ?></div>
<a href="<?php echo wp_lostpassword_url(); ?>" title="Lost Password">Lost Password</a>
</div>
<?php } else {?>

<div style="font-size:20px;text-align:center;">You already logged in! </div>
<div style="margin-top:40px;width:100%;"><div style="width:100px;margin:auto;"><a style="width:100px;" class="read-more btn t4p-button-default" href=<?php echo wp_logout_url(); ?> >Logout</a></div></div>
<?php } ?>
</div>
    <!--END #primary .hfeed-->
</div>


<?php if (evolve_lets_get_sidebar() == true): ?>
    <?php get_sidebar(); ?>
<?php endif; ?>
<script type="text/javascript" src=<?php echo get_template_directory_uri() . "/wk.js" ?>></script>
<?php get_footer(); ?>
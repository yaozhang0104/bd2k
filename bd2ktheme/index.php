<?php

/**
 * Template: Index.php
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

<div style="
font-family: Roboto;
color:#4a4a4a;
">
    <?php
    $evolve_breadcrumbs = evolve_get_option('evl_breadcrumbs', '1');
    if ($evolve_breadcrumbs == "1"):
        if (is_home() || is_front_page()):
        else:evolve_breadcrumb();
        endif;
    endif;
    ?>

    <div id="feature"><div style="font-size:22px;">Feature</div><div class="hline"></div>
    <div class="f_container">
    <div class="f_slider_wrapper">
    <ul id="f_image_slider">
    <?php
    $args = array( 'posts_per_page' => 3, 'tag' => 'feature');
    $postslist = get_posts( $args );
    foreach ( $postslist as $post ) :
        setup_postdata( $post ); ?> 
        <li id="f_li">
        <?php
            echo "<img id='";
            echo the_ID();
            echo "' style='width:330px;height:180px;' src='";
            echo the_post_thumbnail_url();
            echo "''>";
        ?>
        </li>
    <?php
    endforeach; 
    wp_reset_postdata();
    ?>
    </ul>
    <span class="nvgt" id="prev"></span>
    <span class="nvgt" id="next"></span>
    </div>
    </div>
    <div id="feature_cont">
    <?php
    $args = array( 'posts_per_page' => 3, 'tag' => 'feature');
    $postslist = get_posts( $args );
    $i = 0;
    foreach ( $postslist as $post ) :
        setup_postdata( $post ); ?>
        <?php
        echo "<a style='color:#4a4a4a' href='";
        echo the_permalink();
        echo "'>";
        echo "<div class='hide' id=f_";
        echo $i;
        echo ">";
        the_excerpt();
        echo "</div></a>";
        $i++;
        ?>
    <?php
    endforeach; 
    wp_reset_postdata();
    
    ?>
    </div>
    </div>
    
    <?php
    echo '<div id="highlight"><div style="font-size:22px;"><a href="' . get_home_url() . '/index.php/tag/highlight/" style="color:#4a4a4a;">Highlights</a></div><div class="hline" style=""></div><br>';
    $total = 8;
    $have_post = 0;
    ?>
    <div>
    <ul>
    <?php
    $args = array( 'posts_per_page' => 2, 'tag_slug__and' => array('highlight', 'publications'));
    $postslist = get_posts( $args );
    foreach ( $postslist as $post ) :
        setup_postdata( $post ); 
        if ($have_post == 0) { ?>
            <a href=<?php echo get_home_url() . '/index.php/?tag="publications"'; ?>>Publications</a>
        <?php
            $have_post = 1;
        }
        $total = $total-1;
        ?> 
        <li style="margin-bottom: 5px;">
            <a style="color:#4a4a4a;" href="<?php the_permalink() ?>" rel="bookmark" title="Read more <?php the_title(); ?>">
                <?php
                    if (get_the_title()) {
                        $title = the_title('', '', false);
                        echo evolve_truncate($title, $evolve_posts_excerpt_title_length*3, '...');
                        }
                ?>
            </a>
        </li>
    <?php
    endforeach; 
    wp_reset_postdata();
    $have_post = 0;
    ?>
    </ul>
    </div>

    <div>
    <ul>
    <?php
    $args = array( 'posts_per_page' => 2, 'tag_slug__and' => array('highlight', 'events'));
    $postslist = get_posts( $args );
    foreach ( $postslist as $post ) :
        setup_postdata( $post ); 
        if ($have_post == 0) { ?>
            <a href=<?php echo get_home_url() . '/index.php/?tag="events"'; ?>>Events</a>
        <?php
            $have_post = 1;
        }
        $total = $total-1;
        ?> 
        <li style="margin-bottom: 5px;">
            <a style="color:#4a4a4a;" href="<?php the_permalink() ?>" rel="bookmark" title="Read more <?php the_title(); ?>">
                <?php
                    if (get_the_title()) {
                        $title = the_title('', '', false);
                        echo evolve_truncate($title, $evolve_posts_excerpt_title_length*3, '...');
                        }
                ?>
            </a>
        </li>
    <?php
    endforeach; 
    wp_reset_postdata();
    $have_post = 0;
    ?>
    </ul>
    </div>

    <div>
    <ul>
    <?php
    $args = array( 'posts_per_page' => 2, 'tag_slug__and' => array('highlight', 'news'));
    $postslist = get_posts( $args );
    foreach ( $postslist as $post ) :
        setup_postdata( $post );
        if ($have_post == 0) { ?>
            <a href=<?php echo get_home_url() . '/index.php/?tag="news"'; ?>>News</a>
        <?php
            $have_post = 1;
        }
        $total = $total-1;
        ?> 
        <li style="margin-bottom: 5px;">
            <a style="color:#4a4a4a;" href="<?php the_permalink() ?>" rel="bookmark" title="Read more <?php the_title(); ?>">
                <?php
                    if (get_the_title()) {
                        $title = the_title('', '', false);
                        echo evolve_truncate($title, $evolve_posts_excerpt_title_length*3, '...');
                        }
                ?>
            </a>
        </li>
    <?php
    endforeach; 
    wp_reset_postdata();
    $have_post = 0;
    ?>
    </ul>
    </div>

    <div>
    <ul>
    <?php
    $args = array( 'posts_per_page' => 2, 'tag_slug__and' => array('highlight', 'tools'));
    $postslist = get_posts( $args );
    foreach ( $postslist as $post ) :
        setup_postdata( $post );
        if ($have_post == 0) { ?>
            <a href=<?php echo get_home_url() . '/index.php/?tag="tools"'; ?>>Tools</a>
        <?php
            $have_post = 1;
        }
        $total = $total-1;
        ?> 
        <li style="margin-bottom: 5px;">
            <a style="color:#4a4a4a;" href="<?php the_permalink() ?>" rel="bookmark" title="Read more <?php the_title(); ?>">
                <?php
                    if (get_the_title()) {
                        $title = the_title('', '', false);
                        echo evolve_truncate($title, $evolve_posts_excerpt_title_length*3, '...');
                        }
                ?>
            </a>
        </li>
    <?php
    endforeach; 
    wp_reset_postdata();
    $have_post = 0;
    ?>
    </ul>
    </div>

    <div>
    <ul>
    <?php
    $args = array( 'posts_per_page' => $total, 'tag_slug__and' => array('highlight'),'tag__not_in' => array(56,57,58,44));
    $postslist = get_posts( $args );
    foreach ( $postslist as $post ) :
        setup_postdata( $post );
        if ($have_post == 0) { ?>
            <a href=<?php echo get_home_url() . '/index.php/?tag="highlight"'; ?>>General</a>
        <?php
            $have_post = 1;
        }
        $total = $total-1;
        ?> 
        <li style="margin-bottom: 5px;">
            <a style="color:#4a4a4a;" href="<?php the_permalink() ?>" rel="bookmark" title="Read more <?php the_title(); ?>">
                <?php
                    if (get_the_title()) {
                        $title = the_title('', '', false);
                        echo evolve_truncate($title, $evolve_posts_excerpt_title_length*3, '...');
                        }
                ?>
            </a>
        </li>
    <?php
    endforeach; 
    wp_reset_postdata();
    $have_post = 0;
    ?>
    </ul>
    </div>

    </div>



    <!--END #primary .hfeed-->
    <div id="upcoming">
    <div style="font-size:22px;"><a href=<?php echo get_home_url() . '/index.php/event-2/' ?> style="color:#4a4a4a;">Upcoming</a></div><div class="hline"></div><br>
    <?php
    display_event_list(); 
    ?>
    </div>
    <?php dynamic_sidebar( 'tw_bar' ); ?>
</div>

<?php if (evolve_lets_get_sidebar() == true): ?>
    <?php get_sidebar(); ?>

<?php endif; ?>

<?php get_footer(); ?>
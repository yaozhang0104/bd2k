<?php
/**
 * Template: Header.php
 *
 * @package EvoLve
 * @subpackage Template
 */
?>
<!DOCTYPE html>
<!--BEGIN html-->


<html <?php language_attributes(); ?>>
    <!--BEGIN head-->
    <head>

        <?php
        $evolve_favicon = evolve_get_option('evl_favicon');
        if ($evolve_favicon) {
            ?>
            <!-- Favicon -->
            <!-- Firefox, Chrome, Safari, IE 11+ and Opera. -->
            <link href="<?php echo $evolve_favicon; ?>" rel="icon" type="image/x-icon" />
        <?php } ?>

        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <?php wp_head(); ?>

        <!-- changed-->
        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    </head><!--END head-->

    <!--BEGIN body-->
    <body <?php body_class(); ?> >
        <?php
        $evolve_custom_background = evolve_get_option('evl_custom_background', '1');
        if ($evolve_custom_background == "1") {
            ?>
            <div id="wrapper" style="background-color:white;">
            <?php } ?>
            <div id="top"></div>
            <!--BEGIN .header-pattern-->
            <div class="header-pattern">
                <!--BEGIN .header-border-->
                <div class="header-border<?php
                $evolve_width_layout = evolve_get_option('evl_width_layout', 'fixed');
                if (get_header_image()) {
                    echo ' custom-header';
                }
                ?>">
                    <!--BEGIN .header-->
                    <div class="header">
                        <!--BEGIN .container-header-->
                        <div class="container container-header">
                            <!--BEGIN #righttopcolumn-->
                            <div id="righttopcolumn">
                            <?php
                            $evolve_social_links = evolve_get_option('evl_social_links', '1');
                            if ($evolve_social_links == "1") {
                                ?>
                                    <!--BEGIN #subscribe-follow-->
                                    <div id="social">
                                        <?php
                                        //get_template_part('social-buttons', 'header'); 
                                        ?>
                                        <a href="http://www.bd2kbiostandards.org" id="scc_a"><img  id="scc_logo" src=<?php echo "'" . get_template_directory_uri() . "/asset/scc.png'"?>></a> 
                                        <a href="http://www.bigdatau.org" id="tcc_a"><img  id="tcc_logo" src=<?php echo "'" . get_template_directory_uri() . "/asset/tcc.png'"?>></a> 
                                        													
                                    </div>
                                    <!--END #subscribe-follow-->
                                <?php } ?>
                                </div>
                                <!--END #righttopcolumn-->
                                <?php                      

                            $evolve_pos_logo = evolve_get_option('evl_pos_logo', 'left');
                            if ($evolve_pos_logo == "disable") {
                                
                            } else {
                                $evolve_header_logo = evolve_get_option('evl_header_logo', '');
                                if ($evolve_header_logo) {
                                    if ($evolve_pos_logo == "center") {

                                        echo "<div class='header-logo-container clearfix'><a href=" . home_url() . "><img id='logo-image' class='img-responsive' src=" . $evolve_header_logo . " /></a></div>";
                                    } 
                                    elseif ($evolve_pos_logo == "left"){
                                        echo "<div class='header-logo-container'><a href=" . home_url() . "><img  style='width:280px;margin-left:10px;' src=" . $evolve_header_logo . " /></a></div>";
                                    }
                                    else {
                                        echo "<div class='header-logo-container'><a href=" . home_url() . "><img id='logo-image' class='img-responsive' src=" . $evolve_header_logo . " /></a></div>";
                                    }
                                }
                            }
                            ?>
                            <!--BEGIN .title-container-->
                            <div class="title-container <?php
                            if (($evolve_pos_logo == "center" ) && ($evolve_header_logo != "")) {
                                echo "clearfix";
                            } elseif ($evolve_pos_logo == "center") {
                                echo "clearfix";
                            }
                            ?>">
                                     <?php
                                     $tagline = '<div id="tagline">' . get_bloginfo('description') . '</div>';
                                     $evolve_tagline_pos = evolve_get_option('evl_tagline_pos', 'next');
                                     if (($evolve_tagline_pos !== "disable") && ($evolve_tagline_pos == "above")) {
                                         echo $tagline;
                                     }
                                     $evolve_blog_title = evolve_get_option('evl_blog_title', '0');
                                     if ($evolve_blog_title == "0" || !$evolve_blog_title) {
                                         ?>
                                    <!--was id = logo -->
                                    <div id="logo"><a href="<?php echo home_url(); ?>"></a></div>
                                    
                                    <?php
                                } else {
                                    
                                }
                                if (($evolve_tagline_pos !== "disable") && (($evolve_tagline_pos == "") || ($evolve_tagline_pos == "next") || ($evolve_tagline_pos == "under"))) {
                                    //echo $tagline; ?>
                                    <div style="margin-top:10px;margin-left:10px;height:25px;">
                                    <div style="display:inline-block;vertical-align:top;margin-top:3px;"><a href="https://datascience.nih.gov"><img  id="my_tagline_logo" src=<?php echo "'" . get_template_directory_uri() . "/asset/NIH-1.png'"?>></a></div>
                                    <div id="my_tagline">Centers-Coordination Center</div>
                                    </div>

                                    <?php
                                }
                                ?>                                
                            </div>
                            <!--END .title-container-->
                            <div id="sse1">
                                    <?php
                                    if (has_nav_menu('primary-menu')) {
                                        echo '<nav id="sses1">';
                                        wp_nav_menu(array('menu' => 'Main', 'depth' => 1));
                                    } else {
                                        ?>
                                        <nav id="sses1">
                                            <?php
                                            wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class' => 'nav-menu', 'fallback_cb' => 'wp_page_menu'));
                                        }
                                        ?>
                                    </nav>
                            </div>
                            
                                    <?php
                                        if (get_the_title() != "Working Groups") {
                                            ?>
                                            <div id="mobile_menu">=</div>
                                            <?php
                                            echo '<div id="sse2">';
                                            echo '<nav id="sses2">';
                                            wp_nav_menu(array('menu' => 'Second', 'depth' => 1));
                                            ?>
                                            <form action="<?php echo home_url(); ?>" method="get" class="searchform">
                                            <div id="search-text-box">
                                            <label class="searchfield" id="search_label_top" for="search-text-top"><input id="search-text-top" type="text" tabindex="1" name="s" class="search" placeholder="<?php _e('Type your search', 'evolve'); ?>" /></label>
                                            </div>
                                            </form>
                                            <?php
                                            echo '</nav></div>';
                                        }
                                        elseif (get_the_title() == "Working Groups") {
                                            //echo "<div>";
                                            //wp_nav_menu(array('menu' => 'Third', 'depth' => 1));
                                            //echo "</div>";
                                            ?>
                                            

                                            <div>
                                            <ul id="wk1" class="hide">
                                            <li><a id="h0" class="highlight" onclick="highlight(this);" href="javascript:setAbout();">About</a></li>
                                            <li><a onclick="highlight(this);" href="javascript:setRoster();">Roster</a></li>
                                            <li><a onclick="highlight(this);" href="javascript:setForum();">Forum</a></li>
                                            <li><a onclick="highlight(this);" href="javascript:setEvent();">Events</a></li>
                                            <li><a onclick="highlight(this);" href="javascript:setMeeting();">Meeting Minutes</a></li>
                                            <li><a onclick="highlight(this);" href="javascript:setResource();">Resources</a></li>
                                            </ul>
                                            </div>
                                            <?php

                                        }
                                        else {

                                        }
                                        ?>
                                        
                                    
                            

                        </div>
                        <!--END .container-header-->
                    </div>
                    <!--END .header-->
                </div>
                <!--END .header-border-->
            </div>
            <!--END .header-pattern-->
            <?php if ( is_home() && is_front_page() )
            {
                //http://52.37.179.170:8000/wp-content/themes/evolve/asset/map/map.jpg for dev
                //http://localhost/wordpress/wp-content/themes/evolve/asset/map/map.jpg for local
                ?>
                <img id="my_map" src=<?php echo get_template_directory_uri() . "/asset/map/map.jpg" ?> style="display:none;">
                <div id="map_container">
                <canvas id="map_canvas" width="550" height="350">
                </canvas>
                </div>
                
                <!--<img id="hidden_map_img1" style ="display: none;" src=<?php echo get_template_directory_uri() . "/asset/map/map_1.jpg" ?> style="width:100%;height:100%">
                <img id="hidden_map_img2" style ="display: none;" src=<?php echo get_template_directory_uri() . "/asset/map/map_2.jpg" ?> style="width:100%;height:100%">
                <img id="hidden_map_img3" style ="display: none;" src=<?php echo get_template_directory_uri() . "/asset/map/map_3.jpg" ?> style="width:100%;height:100%">
                <img id="hidden_map_img4" style ="display: none;" src=<?php echo get_template_directory_uri() . "/asset/map/map_4.jpg" ?> style="width:100%;height:100%">
                <img id="hidden_map_img5" style ="display: none;" src=<?php echo get_template_directory_uri() . "/asset/map/map_5.jpg" ?> style="width:100%;height:100%">
                <img id="hidden_map_img6" style ="display: none;" src=<?php echo get_template_directory_uri() . "/asset/map/map_6.jpg" ?> style="width:100%;height:100%">
                <img id="hidden_map_img7" style ="display: none;" src=<?php echo get_template_directory_uri() . "/asset/map/map_7.jpg" ?> style="width:100%;height:100%">
                <img id="hidden_map_img8" style ="display: none;" src=<?php echo get_template_directory_uri() . "/asset/map/map_8.jpg" ?> style="width:100%;height:100%">
                <img id="hidden_map_img9" style ="display: none;" src=<?php echo get_template_directory_uri() . "/asset/map/map_9.jpg" ?> style="width:100%;height:100%">
                <img id="hidden_map_img10" style ="display: none;" src=<?php echo get_template_directory_uri() . "/asset/map/map_10.jpg" ?> style="width:100%;height:100%">
                <img id="hidden_map_img11" style ="display: none;" src=<?php echo get_template_directory_uri() . "/asset/map/map_11.jpg" ?> style="width:100%;height:100%">
                <img id="hidden_map_img12" style ="display: none;" src=<?php echo get_template_directory_uri() . "/asset/map/map_12.jpg" ?> style="width:100%;height:100%">
                <img id="hidden_map_img13" style ="display: none;" src=<?php echo get_template_directory_uri() . "/asset/map/map_13.jpg" ?> style="width:100%;height:100%">-->   

                <div id="map_info">
                <div id="map_title">Explore BD2K Centers</div>
                <div id="map_img_container" style="width:280px;height:180px;margin:auto;margin-top:10px;">
                <img id="map_img" src=<?php echo get_template_directory_uri() . "/asset/map/map2.jpg" ?> style="width:100%;height:100%">
                <img id="map_load" src=<?php echo get_template_directory_uri() . "/asset/map/loading.gif" ?> style="display:none;width:40px;height:40px;margin-left:120px;margin-top:60px;"></img>
                </div>
                <div id="map_content">Mouse over a center to display info. Click to select.</div>
                </div>

                
                <?php
            }
            ?>
            
            <div class="menu-container">
                <?php
                $evolve_menu_background = evolve_get_option('evl_disable_menu_back', '1');
                $evolve_width_layout = evolve_get_option('evl_width_layout', 'fixed');
                if ($evolve_width_layout == "fluid" && $evolve_menu_background == "1") {
                    ?>
                    <div class="fluid-width">
                    <?php } ?>
                    <!--changed -->
                    <div class="menu-back">
                        <?php
                        $evolve_slider_page_id = '';
                        $evolve_bootstrap = evolve_get_option('evl_bootstrap_slider', 'homepage');
                        if (!empty($post->ID)) {
                            if (!is_home() && !is_front_page() && !is_archive()) {
                                $evolve_slider_page_id = $post->ID;
                            }
                            if (!is_home() && is_front_page()) {
                                $evolve_slider_page_id = $post->ID;
                            }
                        }
                        if (is_home() && !is_front_page()) {
                            $evolve_slider_page_id = get_option('page_for_posts');
                        }
                        if (get_post_meta($evolve_slider_page_id, 'evolve_slider_type', true) == 'bootstrap' || ($evolve_bootstrap == "homepage" && is_front_page()) || $evolve_bootstrap == "all"):
                            evolve_bootstrap();
                        endif;

                        // Parallax Slider
                        $evolve_slider_page_id = '';
                        $evolve_parallax = evolve_get_option('evl_parallax_slider', 'post');
                        if (!empty($post->ID)) {
                            if (!is_home() && !is_front_page() && !is_archive()) {
                                $evolve_slider_page_id = $post->ID;
                            }
                            if (!is_home() && is_front_page()) {
                                $evolve_slider_page_id = $post->ID;
                            }
                        }
                        if (is_home() && !is_front_page()) {
                            $evolve_slider_page_id = get_option('page_for_posts');
                        }
                        if (get_post_meta($evolve_slider_page_id, 'evolve_slider_type', true) == 'parallax' || ($evolve_parallax == "homepage" && is_front_page()) || $evolve_parallax == "all"):
                            $evolve_parallax_slider = evolve_get_option('evl_parallax_slider_support', '1');
                            if ($evolve_parallax_slider == "1"):
                                evolve_parallax();
                            endif;
                        endif;

                        // Posts Slider
                        $evolve_posts_slider = evolve_get_option('evl_posts_slider', 'post');
                        if (get_post_meta($evolve_slider_page_id, 'evolve_slider_type', true) == 'posts' || ($evolve_posts_slider == "homepage" && is_front_page()) || $evolve_posts_slider == "all"):
                            $evolve_carousel_slider = evolve_get_option('evl_carousel_slider', '1');
                            if ($evolve_carousel_slider == "1"):
                                evolve_posts_slider();
                            endif;
                        endif;

                        $evolve_width_layout = evolve_get_option('evl_width_layout', 'fixed');
                        if ($evolve_width_layout == "fluid") {
                            ?>
                            <div class="container">
                                <?php
                            }
                            $evolve_header_widgets_placement = evolve_get_option('evl_header_widgets_placement', 'home');
                            $evolve_widget_this_page = get_post_meta(isset($post->ID), 'evolve_widget_page', true);
                            if (((is_home() || is_front_page()) && $evolve_header_widgets_placement == "home") || (is_single() && $evolve_header_widgets_placement == "single") || (is_page() && $evolve_header_widgets_placement == "page") || ($evolve_header_widgets_placement == "all") || ($evolve_widget_this_page == "yes" && $evolve_header_widgets_placement == "custom")) {
                                $evolve_widgets_header = evolve_get_option('evl_widgets_header', 'disable');
                                // if Header widgets exist
                                if (($evolve_widgets_header == "") || ($evolve_widgets_header == "disable")) {
                                    
                                } else {
                                    $evolve_header_css = '';
                                    if ($evolve_widgets_header == "one") {
                                        $evolve_header_css = 'widget-one-column col-sm-6';
                                    }
                                    if ($evolve_widgets_header == "two") {
                                        $evolve_header_css = 'col-sm-6 col-md-6';
                                    }
                                    if ($evolve_widgets_header == "three") {
                                        $evolve_header_css = 'col-sm-6 col-md-4';
                                    }
                                    if ($evolve_widgets_header == "four") {
                                        $evolve_header_css = 'col-sm-6 col-md-3';
                                    }
                                    ?>
                                    <div class="container">
                                        <div class="header-widgets">
                                            <div class="widgets-back-inside">
                                                <div class="<?php echo $evolve_header_css; ?>">
                                                    <?php if (!dynamic_sidebar('header-1')) : ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="<?php echo $evolve_header_css; ?>">
                                                    <?php if (!dynamic_sidebar('header-2')) : ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="<?php echo $evolve_header_css; ?>">
                                                    <?php if (!dynamic_sidebar('header-3')) : ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="<?php echo $evolve_header_css; ?>">
                                                    <?php if (!dynamic_sidebar('header-4')) : ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.container -->
                                    <?php
                                }
                            } else {
                                
                            }
                            ?>
                        </div><!-- /.container -->
                    </div><!--/.menu-back-->
                    <?php
                    $evolve_width_layout = evolve_get_option('evl_width_layout', 'fixed');
                    if ($evolve_width_layout == "fluid") {
                        ?>
                    </div><!-- /.fluid-width -->
                <?php } ?>
                <!--BEGIN .content-->
                <div class="content <?php semantic_body(); ?>">
                    <?php if (is_page_template('contact.php')): ?>
                        <div class="gmap" id="gmap"></div>
                    <?php endif; ?>
                    <!--BEGIN .container-->
                    <div class="container container-center row">
                        <!--BEGIN #content-->
                        <div id="content">
                            <?php
                            if (is_front_page()) {
                                evolve_content_boxes();
                            }
                            ?>

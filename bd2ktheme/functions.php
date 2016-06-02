<?php

if (get_stylesheet_directory() == get_template_directory()) {
    define('EVOLVE_URL', get_template_directory() . '/library/functions/');
    define('EVOLVE_DIRECTORY', get_template_directory_uri() . '/library/functions/');
} else {
    define('EVOLVE_URL', get_template_directory() . '/library/functions/');
    define('EVOLVE_DIRECTORY', get_template_directory_uri() . '/library/functions/');
}



/**
 * Get Option.
 * Helper function to return the theme option value.
 * If no value has been saved, it returns $default.
 * Needed because options are
 * as serialized strings.
 */
function evolve_get_option($name, $default = false) {
    $config = get_option('evolve');

    if (!isset($config['id'])) {
        //return $default;
    }
    global $evl_options;

    $options = $evl_options;
    if (isset($GLOBALS['redux_compiler_options'])) {
        $options = $GLOBALS['redux_compiler_options'];
    }

    if (isset($options[$name])) {
        $mediaKeys = array(
            'evl_bootstrap_slide1_img',
            'evl_bootstrap_slide2_img',
            'evl_bootstrap_slide3_img',
            'evl_bootstrap_slide4_img',
            'evl_bootstrap_slide5_img',
            'evl_content_background_image',
            'evl_favicon',
            'evl_footer_background_image',
            'evl_header_logo',
            'evl_scheme_background',
            'evl_slide1_img',
            'evl_slide2_img',
            'evl_slide3_img',
            'evl_slide4_img',
            'evl_slide5_img',
        );
        // Media SHIM
        if (in_array($name, $mediaKeys)) {
            if (is_array($options[$name])) {
                return isset($options[$name]['url']) ? $options[$name]['url'] : false;
            } else {
                return $options[$name];
            }
        }

        return $options[$name];
    }

    return $default;
}

function get_related_sites() {
    $links = '<div style="font-size: 12px;">Related sites: <br/> <a href=#>BD2K Training Coordinating Center</a><br/> 
    <a href=#>BD2K Standards Coordinating Center</a><br/> 
    <a href=#>NIH Data Science website</a><br/> </div>';
    return $links;
}

function display_event_list() {
    echo '<ul>';
    global $wpdb;
    $querystr = "SELECT wposts.* FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta
    WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = 'ecwd_event_date_from'
    AND STR_TO_DATE(wpostmeta.meta_value, '%Y/%m/%d') >= CURDATE()
    AND wposts.post_status = 'publish' AND wposts.post_type = 'ecwd_event'
    AND wposts.ID NOT IN (SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta
    WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = 'groups-groups_read_post' 
    AND wpostmeta.meta_value IS NOT NULL)
    ORDER BY STR_TO_DATE(wpostmeta.meta_value, '%Y/%m/%d') ASC 
    LIMIT 6
    ";
    $events = $wpdb->get_results($querystr, OBJECT);
    if ($events): 
        global $post;
        foreach ($events as $post): 
            setup_postdata($post); 
            $id = get_the_ID();
            $query = "SELECT DATE_FORMAT(STR_TO_DATE(wpostmeta.meta_value, '%Y/%m/%d'), '%b %D') FROM $wpdb->postmeta wpostmeta WHERE wpostmeta.post_id = $id AND wpostmeta.meta_key = 'ecwd_event_date_from'";
            $from = $wpdb->get_row($query, ARRAY_N);
            $query = "SELECT DATE_FORMAT(STR_TO_DATE(wpostmeta.meta_value, '%Y/%m/%d'), '%b %D') FROM $wpdb->postmeta wpostmeta WHERE wpostmeta.post_id = $id AND wpostmeta.meta_key = 'ecwd_event_date_to'";
            $to = $wpdb->get_row($query, ARRAY_N);
            ?>
            <li style="margin-bottom:5px;">
            <a href="<?php the_permalink(); ?>"><?php
            echo $from[0];
            if ($to[0] != $from[0]) {
                echo ' - ' . $to[0];
            }
            ?></a>
            <br>
            <?php the_title(); ?>
            </li>
            <?php endforeach;
    else: ?>
        <li>No events coming up. </li>
    <?php endif;
    echo '</ul>';

}

function custom_excerpt_length( $length ) {
    return 70;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'excerpt_more' );


add_filter( 'map_meta_cap', 'my_map_meta_cap', 10, 4 );
add_filter( 'map_meta_cap', 'my_map_meta_cap1', 10, 4 );
add_filter( 'map_meta_cap', 'my_map_meta_cap2', 10, 4 );
add_filter( 'map_meta_cap', 'my_map_meta_cap3', 10, 4 );
function my_map_meta_cap( $caps, $cap, $user_id, $args ) {
    if ( 'edit_event' == $cap || 'delete_event' == $cap || 'read_event' == $cap ) {
        $post = get_post( $args[0] );
        $post_type = get_post_type_object( $post->post_type );

        $caps = array();
    }

    if ( 'edit_event' == $cap ) {
        if ( $user_id == $post->post_author )
            $caps[] = $post_type->cap->edit_posts;
        else
            $caps[] = $post_type->cap->edit_others_posts;
    }

    elseif ( 'delete_event' == $cap ) {
        if ( $user_id == $post->post_author )
            $caps[] = $post_type->cap->delete_posts;
        else
            $caps[] = $post_type->cap->delete_others_posts;
    }

    elseif ( 'read_event' == $cap ) {

        if ( 'private' != $post->post_status )
            $caps[] = 'read';
        elseif ( $user_id == $post->post_author )
            $caps[] = 'read';
        else
            $caps[] = $post_type->cap->read_private_posts;
    }
    return $caps;
}
function my_map_meta_cap1( $caps, $cap, $user_id, $args ) {
    if ( 'edit_organizer' == $cap || 'delete_organizer' == $cap || 'read_organizer' == $cap ) {
        $post = get_post( $args[0] );
        $post_type = get_post_type_object( $post->post_type );

        $caps = array();
    }

    if ( 'edit_organizer' == $cap ) {
        if ( $user_id == $post->post_author )
            $caps[] = $post_type->cap->edit_posts;
        else
            $caps[] = $post_type->cap->edit_others_posts;
    }

    elseif ( 'delete_organizer' == $cap ) {
        if ( $user_id == $post->post_author )
            $caps[] = $post_type->cap->delete_posts;
        else
            $caps[] = $post_type->cap->delete_others_posts;
    }

    elseif ( 'read_organizer' == $cap ) {

        if ( 'private' != $post->post_status )
            $caps[] = 'read';
        elseif ( $user_id == $post->post_author )
            $caps[] = 'read';
        else
            $caps[] = $post_type->cap->read_private_posts;
    }
    return $caps;
}
function my_map_meta_cap2( $caps, $cap, $user_id, $args ) {
    if ( 'edit_venue' == $cap || 'delete_venue' == $cap || 'read_venue' == $cap ) {
        $post = get_post( $args[0] );
        $post_type = get_post_type_object( $post->post_type );

        $caps = array();
    }

    if ( 'edit_venue' == $cap ) {
        if ( $user_id == $post->post_author )
            $caps[] = $post_type->cap->edit_posts;
        else
            $caps[] = $post_type->cap->edit_others_posts;
    }

    elseif ( 'delete_venue' == $cap ) {
        if ( $user_id == $post->post_author )
            $caps[] = $post_type->cap->delete_posts;
        else
            $caps[] = $post_type->cap->delete_others_posts;
    }

    elseif ( 'read_venue' == $cap ) {

        if ( 'private' != $post->post_status )
            $caps[] = 'read';
        elseif ( $user_id == $post->post_author )
            $caps[] = 'read';
        else
            $caps[] = $post_type->cap->read_private_posts;
    }
    return $caps;
}
function my_map_meta_cap3( $caps, $cap, $user_id, $args ) {
    if ( 'edit_wg' == $cap || 'delete_wg' == $cap || 'read_wg' == $cap ) {
        $post = get_post( $args[0] );
        $post_type = get_post_type_object( $post->post_type );

        $caps = array();
    }

    if ( 'edit_wg' == $cap ) {
        if ( $user_id == $post->post_author )
            $caps[] = $post_type->cap->edit_posts;
        else
            $caps[] = $post_type->cap->edit_others_posts;
    }

    elseif ( 'delete_wg' == $cap ) {
        if ( $user_id == $post->post_author )
            $caps[] = $post_type->cap->delete_posts;
        else
            $caps[] = $post_type->cap->delete_others_posts;
    }

    elseif ( 'read_wg' == $cap ) {

        if ( 'private' != $post->post_status )
            $caps[] = 'read';
        elseif ( $user_id == $post->post_author )
            $caps[] = 'read';
        else
            $caps[] = $post_type->cap->read_private_posts;
    }
    return $caps;
}

function remove_wp_logo() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action( 'wp_before_admin_bar_render', 'remove_wp_logo' );

function howdy_message($translated_text, $text, $domain) {
    $new_message = str_replace('Howdy', 'Hello', $text);
    return $new_message;
}
add_filter('gettext', 'howdy_message', 10, 3);

function my_loginlogo() {
  echo '<style type="text/css">
    h1 a {
      background-image: url(' . get_template_directory_uri() . '/asset/logo.png) !important;
    }
  </style>';
}
add_action('login_head', 'my_loginlogo');

function my_loginURL() {
    return get_home_url();
}
add_filter('login_headerurl', 'my_loginURL');

function my_loginURLtext() {
    return 'BD2KCCC';
}
add_filter('login_headertitle', 'my_loginURLtext');

function my_logincustomCSSfile() {
    wp_enqueue_style('login-styles', get_template_directory_uri() . '/asset/login_styles.css');
}
add_action('login_enqueue_scripts', 'my_logincustomCSSfile');

function modify_contact_methods($profile_fields) {

    // Add new fields
    $profile_fields['Institution'] = 'Institution';

    return $profile_fields;
}
add_filter('user_contactmethods', 'modify_contact_methods');

function create_my_post() {
  register_post_type( 'wg_post',
    array(
      'labels' => array(
        'name' => __( 'WG Posts' ),
        'singular_name' => __( 'WG Post' )
      ),
      'public' => true,
      'has_archive' => false,
      'capability_type' => 'wg',
      'capabilities' => array(
                'publish_posts' => 'publish_wgs',
                'edit_posts' => 'edit_wgs',
                'edit_others_posts' => 'edit_others_wgs',
                'edit_published_posts' => 'edit_published_wgs', 
                'delete_posts' => 'delete_wgs',
                'delete_others_posts' => 'delete_others_wgs',
                'delete_published_posts' => 'delete_published_wgs',
                'read_private_posts' => 'read_private_wgs',
                'edit_private_posts' => 'edit_private_wgs',
                'delete_private_posts' => 'delete_private_wgs',
                'edit_post' => 'edit_wg',
                'delete_post' => 'delete_wg',
                'read_post' => 'read_wg',
            ),
        'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
        'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => '26,13',
            'query_var' => true,
    )
  );
}
add_action( 'init', 'create_my_post' );

function remove_dashboard_widgets() {
    $user = wp_get_current_user();
    if ( ! $user->has_cap( 'manage_options' ) ) {
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
    }
}
add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets' );
function remove_footer_admin () 
{
    echo '<span id="footer-thankyou"></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');
function hide_update_notice_to_all_but_admin_users()
{
    if (!current_user_can('update_core')) {
        remove_action( 'admin_notices', 'update_nag', 3 );
    }
}
add_action( 'admin_head', 'hide_update_notice_to_all_but_admin_users', 1 );

get_template_part('library/functions/basic-functions');
get_template_part('library/admin/admin-init');

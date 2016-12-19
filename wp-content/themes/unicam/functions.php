<?php


load_theme_textdomain('unicam');
/**
 * Register our sidebars and widgetized areas.
 *
 */

function unicam_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Oldalsav', 'unicam' ),
        'id' => 'sidebar-1',
        'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'unicam' ),
        'before_widget' => '<aside id="%1$s" class="actual">',
        'after_widget' => '</aside>',
        'before_title' => '<div class="sidebar_title">',
        'after_title' => '</div>',
    ) );

}
add_action( 'widgets_init', 'unicam_widgets_init' );


function unicam_setup() {
    /*
     * Makes Twenty Twelve available for translation.
     *
     * Translations can be added to the /languages/ directory.
     * If you're building a theme based on Twenty Twelve, use a find and replace
     * to change 'twentytwelve' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'unicam', get_template_directory() . '/languages' );

    // This theme styles the visual editor with editor-style.css to match the theme style.
    add_editor_style();

    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menu( 'topmenu', __( 'Topmenu', 'unicam' ) );
    register_nav_menu( 'mobile-menu', __( 'Mobile Menu', 'unicam' ) );

    /*
     * This theme supports custom background color and image, and here
     * we also set up the default background color.
     */
    add_theme_support( 'custom-background', array(
        'default-color' => 'f4f4f4',
    ) );
    // This theme uses a custom image size for featured images, displayed on "standard" posts.
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 160, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'unicam_setup' );

add_theme_support( 'post-thumbnails' );
add_image_size( 'box-big', 500, 360, true ); //300 pixels wide (and unlimited height)
add_image_size( 'product-list', 9999, 200, false ); //300 pixels wide (and unlimited height)
add_image_size( 'person-list', 280, 280, true ); //300 pixels wide (and unlimited height)

add_theme_support('custom-background');




add_filter( 'get_search_form', 'html5_search_form' );


/*// custom admin login logo
function custom_login_logo() {
    echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/logo-login.png) !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');*/

/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);

/* ------ SCRIPTS ------ */

function wptuts_scripts_load_cdn()
{
    // Deregister the included library
    wp_deregister_script( 'jquery' );

    // Register the library again from Google's CDN
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array(), null, false );

    // Register the script like this for a theme:
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );

    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'jquery', 10 );
    wp_enqueue_script( 'map' );
    wp_enqueue_script( 'main' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_load_cdn', 0 );


function wptuts_styles_with_the_lot()
{
    // Register the style like this for a theme:
    wp_register_style( 'unicam', get_template_directory_uri() . '/css/style.css', array(), '', 'screen' );
    wp_register_style( 'print', get_template_directory_uri() . '/css/print.css', array(), '1', 'print' );
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'unicam' );
    wp_enqueue_style( 'print' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_styles_with_the_lot', 8 );

function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/admin.css" />';
}
add_action('login_head', 'my_custom_login');

function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return 'Unicam Magyarország Kft.';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

add_shortcode('youtube', 'wp_youtube_video');

add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');


add_filter( "the_excerpt", "add_excerpt_class" );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

function get_posts_related_by_taxonomy($post_id,$taxonomy,$args=array()) {
		  $query = new WP_Query();
		  $terms = wp_get_object_terms($post_id,$taxonomy);
		  if (count($terms)) {
		    // Assumes only one term for per post in this taxonomy
		    $post_ids = get_objects_in_term($terms[0]->term_id,$taxonomy);
		    $post = get_post($post_id);
		    $args = wp_parse_args($args,array(
		      'post_type' => $post->post_type, // The assumes the post types match
		      'post__in' => $post_ids,
		      'post__not_in' => $post->ID,
		      'taxonomy' => $taxonomy,
		      'term' => $terms[0]->slug,
		    ));
		    $query = new WP_Query($args);
		  }
		  return $query;
		}



    /**
     * Display a custom taxonomy dropdown in admin
     * @author Mike Hemberger
     * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
     */
    add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy');
    function tsm_filter_post_type_by_taxonomy() {
    	global $typenow;
    	$post_type = 'termekeink'; // change to your post type
    	$taxonomy  = 'termekek'; // change to your taxonomy
    	if ($typenow == $post_type) {
    		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
    		$info_taxonomy = get_taxonomy($taxonomy);
    		wp_dropdown_categories(array(
    			'show_option_all' => __("Minden termékkategória"),
    			'taxonomy'        => $taxonomy,
    			'name'            => $taxonomy,
    			'orderby'         => 'name',
    			'selected'        => $selected,
    			'show_count'      => true,
    			'hide_empty'      => true,
    		));
    	};
    }
    /**
     * Filter posts by taxonomy in admin
     * @author  Mike Hemberger
     * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
     */
    add_filter('parse_query', 'tsm_convert_id_to_term_in_query');
    function tsm_convert_id_to_term_in_query($query) {
    	global $pagenow;
    	$post_type = 'termekeink'; // change to your post type
    	$taxonomy  = 'termekek'; // change to your taxonomy
    	$q_vars    = &$query->query_vars;
    	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
    		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
    		$q_vars[$taxonomy] = $term->slug;
    	}
    }


    function get_excerpt(){
        $excerpt = get_the_content();
        $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
        $excerpt = strip_shortcodes($excerpt);
        $excerpt = strip_tags($excerpt);
        $excerpt = substr($excerpt, 0, 180);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
        $excerpt = $excerpt.'...';
        return $excerpt;
    }

function change_page_menu_classes($menu)
{
    global $post;
    if (get_post_type($post) == 'termekeink')
    {
        $menu = str_replace( 'current-menu-item', '', $menu ); // remove all current_page_parent classes
        $menu = str_replace( 'menu-item-13', 'menu-item-13 current-menu-item', $menu ); // add the current_page_parent class to the page you want
    }
    return $menu;
}
add_filter( 'nav_menu_css_class', 'change_page_menu_classes', 10,2 );

function change_page_menu_classes_gyarto($menu)
{
    global $post;
    if (get_post_type($post) == 'gyartoink')
    {
        $menu = str_replace( 'current-menu-item', '', $menu ); // remove all current_page_parent classes
        $menu = str_replace( 'menu-item-14', 'menu-item-14 current-menu-item', $menu ); // add the current_page_parent class to the page you want
    }
    return $menu;
}
add_filter( 'nav_menu_css_class', 'change_page_menu_classes_gyarto', 10,2 );

@ini_set( 'upload_max_size' , '50M' ); @ini_set( 'post_max_size', '50M'); @ini_set( 'memory_limit', '50M' );
    /**
 * Add extra dropdowns to the List Tables
 *
 * @param required string $post_type    The Post Type that is being displayed
 */
add_action('restrict_manage_posts', 'add_extra_tablenav');
function add_extra_tablenav($post_type){

    global $wpdb;

    /** Ensure this is the correct Post Type*/
    if($post_type !== 'termekeink')
        return;

    /** Grab the results from the DB */
    $query = $wpdb->prepare('
        SELECT DISTINCT pm.meta_value FROM %1$s pm
        LEFT JOIN %2$s p ON p.ID = pm.post_id
        WHERE pm.meta_key = "%3$s"
        AND p.post_status = "%4$s"
        AND p.post_type = "%5$s"
        ORDER BY "%3$s"',
        $wpdb->postmeta,
        $wpdb->posts,
        'relation', // Your meta key - change as required
        'publish',          // Post status - change as required
        $post_type
    );
    $results = $wpdb->get_col($query);

    /** Ensure there are options to show */
    if(empty($results))
        return;

    /** Grab all of the options that should be shown */
    $options[] = sprintf('<option value="-1">%1$s</option>', __('All Competitions', 'your-text-domain'));
    foreach($results as $result) :
        $options[] = sprintf('<option value="%1$s">%2$s</option>', esc_attr($result), $result);
    endforeach;

    /** Output the dropdown menu */
    echo '<select class="" id="competition-name" name="competition-name">';
    echo join("\n", $options);
    echo '</select>';

}

//function to call first uploaded image in functions file
function main_image() {
    $files = get_children('post_parent='.get_the_ID().'&post_type=attachment
&post_mime_type=image&order=desc');
    if($files) :
        $keys = array_reverse(array_keys($files));
        $j=0;
        $num = $keys[$j];
        $image=wp_get_attachment_image($num, 'large', true);
        $imagepieces = explode('"', $image);
        $imagepath = $imagepieces[1];
        $main=wp_get_attachment_url($num);
        $template=get_template_directory();
        $the_title=get_the_title();
        print "<img src='$main' alt='$the_title' class='frame' />";
    endif;
}

function my_func($post) {

    global $post;
    $post_type = get_the_title( $post->ID );

    return $post_type;

}
add_shortcode( 'postthistitle', 'my_func' )



?>

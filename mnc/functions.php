<?php
/**
 * @package WordPress
 * @subpackage m320
 */

/**
 * Constants
 */
define('MNC_DEBUG', true);

/**
 * Custom post type
 */
//require_once( STYLESHEETPATH . '/inc/custom_posts_types/custom_posts_types.php' );

/**
 * Custom metaboxes
 */
//require_once( STYLESHEETPATH . '/inc/metabox/example-functions.php' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ){
    $content_width = 640;
}





/*
-------------------------------------------------------------------------------
HOOKS
-------------------------------------------------------------------------------
*/

/**
 * JavaScript & CSS Load
 **/
add_action('wp_enqueue_scripts', function(){

    // Modernizr
    wp_enqueue_script('modernizr', M320_STYLESHEET_URI . '/js/lib/modernizr-min.js', false, null);

    //CSS
    if (MNC_DEBUG) {
        wp_enqueue_style( 'style', M320_STYLESHEET_URI . '/css/main.css', '', time() );
    } else {
        wp_enqueue_style( 'style', M320_STYLESHEET_URI . '/css/main-min.css', '', null );
    }

    // jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', M320_STYLESHEET_URI . '/js/lib/jquery-min.js', false, '1.9.1', true);

    // Plugins
    if (MNC_DEBUG) {
        wp_register_script('plugins', M320_STYLESHEET_URI . '/js/plugins.js', array('jquery'), time(), true);
    } else {
        wp_register_script('plugins', M320_STYLESHEET_URI . '/js/plugins-min.js', array('jquery'), null, true);
    }

    $theme_constants = array(
        'siteUrl' => site_url(),
        'siteLang' => get_bloginfo('language'),
        'stylesheetUri' => M320_STYLESHEET_URI,
        'siteEmail' => M320_SITE_EMAIL,
        'siteName' => M320_SITE_NAME,
        'imageFolder' => M320_STYLESHEET_URI . '/images/',
        'jsFolder' => M320_STYLESHEET_URI . '/js/',
    );
    wp_localize_script('plugins', 'MNC', $theme_constants);

    // Script.JS
    if (MNC_DEBUG) {
        wp_enqueue_script('scripts', M320_STYLESHEET_URI . '/js/script.js', array('jquery', 'plugins'), time(), true);
    } else {
        wp_enqueue_script('scripts', M320_STYLESHEET_URI . '/js/script-min.js', array('jquery', 'plugins'), null, true);
    }

});

/**
 * For using width jQuery lightBox Plugin
 * ADD rel="lightbox" to all images in "the_content"
 */
add_filter('the_content', function( $content ){

    global $post;
    $pattern ="/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
    $replacement = '<a$1href=$2$3.$4$5 rel="fancybox" title="'.$post->post_title.'"$6>';
    $content = preg_replace($pattern, $replacement, $content);

    return $content;

});





/*
-------------------------------------------------------------------------------
STUFF FOR NON-ADMINS
-------------------------------------------------------------------------------
*/

if(current_user_can('administrator')) return false;

/**
 * Remove Dashboard menus
 */
add_action('admin_menu', function(){
    remove_menu_page('wpcf7');
    global $menu;
    $restricted = array(__('Contact', 'm320'), __('Comments'), __('Tools'), __('Contact'));
    end($menu);
    while (prev($menu)){
        $value = explode(' ',$menu[key($menu)][0]);
        if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
    }
});

?>

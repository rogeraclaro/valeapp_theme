<?php

/**
 * ValeApp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ValeApp
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function valeapp_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ValeApp, use a find and replace
		* to change 'valeapp' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('valeapp', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'valeapp'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'valeapp_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'valeapp_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function valeapp_content_width()
{
	$GLOBALS['content_width'] = apply_filters('valeapp_content_width', 640);
}
add_action('after_setup_theme', 'valeapp_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function valeapp_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'valeapp'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'valeapp'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'valeapp_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function valeapp_scripts()
{
	wp_enqueue_style('valeapp-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('valeapp-style', 'rtl', 'replace');

	wp_enqueue_script('valeapp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'valeapp_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_action('wp_enqueue_scripts', 'valeapp_enqueue_styles');
function valeapp_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'), array('parent-style'));
	wp_enqueue_style('forms-default', get_theme_file_uri('/css/forms-default.css'), array('parent-style'));
	wp_enqueue_style('membership', get_theme_file_uri('/css/membership.css'), array('parent-style'));
	wp_enqueue_style('category-details', get_theme_file_uri('/css/category-details.css'), array('parent-style'));
	wp_enqueue_style('animate', get_theme_file_uri('/css/animate.min.css'), array('parent-style'));
	wp_enqueue_style('popup', get_theme_file_uri('/css/redirectionPopup.css'), array('parent-style'));
	wp_enqueue_style('bootstrap', get_theme_file_uri('/vendor/bootstrap/bootstrap.min.css'), array('parent-style'));
	wp_enqueue_style('bootstrap-icons', get_theme_file_uri('/vendor/bootstrap-icons/bootstrap-icons.css'), array('parent-style'));
	wp_enqueue_style('swiper', get_theme_file_uri('/vendor/swiper/swiper.min.css'), array('parent-style'));
	wp_enqueue_style('aos', get_theme_file_uri('/vendor/aos/aos.css'), array('parent-style'));
	wp_enqueue_style('animate', get_theme_file_uri('/vendor/animate/animate.min.css'), array('parent-style'));
}

add_action('wp_enqueue_scripts', 'load_script_js');
function load_script_js()
{
	// wp_enqueue_script('clipboard', get_theme_file_uri('/vendor/clipboard/clipboard.min.js'), array(), '1.0', true);
	// wp_enqueue_script('jquery-plainmodal', get_theme_file_uri('/vendor/jquery/jquery.plainmodal.min.js'), array(), '1.0', true);
	// wp_enqueue_script('paroller', get_theme_file_uri('/vendor/paroller/jquery.paroller.min.js'), array(), '1.0', true);
	// wp_enqueue_script('mixpanel', get_theme_file_uri('/js/mixpanel.js'), array(), '1.0', true);
	// wp_enqueue_script('dynamics', get_theme_file_uri('/js/dynamics.js'), array(), '1.0', true);
	// wp_enqueue_script('_dynamics', get_theme_file_uri('/js/_dynamics.js'), array(), '1.0', true);
	// wp_enqueue_script('script', get_theme_file_uri('/js/script.js'), array(), '1.0', true);
	// wp_enqueue_script('isInViewport', get_theme_file_uri('/vendor/js/isInViewport.min.js'), array(), '1.0', true);
	// wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/js/burger-menu.js', array( 'jquery' ) );

	//wp_enqueue_script('app-javascript', get_theme_file_uri('/js/app.js'), array(), '1.0', true);
	wp_enqueue_script('jquery', get_theme_file_uri('/vendor/jquery/jquery.min.js'), array(), '1.0', true);
	wp_enqueue_script('bootstrap', get_theme_file_uri('/vendor/bootstrap/bootstrap.bundle.min.js'), array(), '1.0', true);
	wp_enqueue_script('jquery-easing', get_theme_file_uri('/vendor/js/jquery.easing.min.js'), array(), '1.0', true);
	wp_enqueue_script('swiper', get_theme_file_uri('/vendor/swiper/swiper.min.js'), array(), '1.0', true);
	wp_enqueue_script('aos', get_theme_file_uri('/vendor/aos/aos.js'), array(), '1.0', true);
	wp_enqueue_script('form_ajax', get_theme_file_uri('/js/form_ajax.js'), array(), '1.0', true);
	wp_localize_script('form_ajax', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
	wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'));
	wp_enqueue_script('placeholder', get_theme_file_uri('/js/placeholder.js'), array(), '1.0', true);
	wp_enqueue_script('radioAsStars', get_theme_file_uri('/js/forms-default/radioAsStars.js'), array(), '1.0', true);
	wp_enqueue_script('defaultRange', get_theme_file_uri('/js/forms-default/defaultRange.js'), array(), '1.0', true);
	wp_enqueue_script('multiCheck', get_theme_file_uri('/js/forms-default/multiCheck.js'), array(), '1.0', true);
	wp_enqueue_script('onlyCheck', get_theme_file_uri('/js/forms-default/checkcSaldoProveedor.js'), array(), '1.0', true);
	wp_enqueue_script('multiCheckPeluqueria', get_theme_file_uri('/js/forms-default/multiCheckPeluqueria.js'), array(), '1.0', true);
	wp_enqueue_script('modalQuestion', get_theme_file_uri('/js/forms-default/modalQuestion.js'), array(), '1.0', true);
	wp_enqueue_script('deleteAccount', get_theme_file_uri('/js/forms-default/deleteAccount.js'), array(), '1.0', true);

	// wp_enqueue_script('send_emails', get_theme_file_uri('/js/message/send_emails.js'), array(), '1.0', true);
	// $correo = obtener_valor_de_correo();
	// $name = obtener_valor_de_name();
	// $array_email = ['correo' => $correo, 'name' => $name];
	// wp_localize_script('send_emails', 'datos_php', $array_email);
	// $array_email = [];
	// wp_localize_script('send_emails', 'datos_php', $array_email);
}

function load_script_email($publish_data, $request_data)
{
	wp_enqueue_script('send_emails', get_theme_file_uri('/js/message/send_emails.js'), array(), '1.0', true);
	$publish = $publish_data;
	$request = $request_data;
	$array_data = ['publish' => $publish, 'request' => $request];

	wp_localize_script('send_emails', 'datos_php', $array_data);
}

require_once plugin_dir_path(__FILE__) . 'inc/home-redirection.php';
require_once plugin_dir_path(__FILE__) . 'advanced-custom-fields/validation/validations.php';
require_once plugin_dir_path(__FILE__) . 'advanced-custom-fields/validation/validations-time.php';
require_once plugin_dir_path(__FILE__) . 'inc/shortcode.php';
require_once plugin_dir_path(__FILE__) . 'inc/custom-post-title/providers.php';
require_once plugin_dir_path(__FILE__) . 'inc/custom-post-title/customers.php';
require_once plugin_dir_path(__FILE__) . 'inc/custom-post-title/service.php';
require_once plugin_dir_path(__FILE__) . 'inc/login/redirection-page.php';
require_once plugin_dir_path(__FILE__) . 'inc/delete-user.php';
require_once plugin_dir_path(__FILE__) . 'inc/menu-reuse.php';
require_once plugin_dir_path(__FILE__) . 'inc/functions-reuse/subcategory-search.php';
require_once plugin_dir_path(__FILE__) . 'inc/functions-reuse/user-post-id.php';
require_once plugin_dir_path(__FILE__) . 'inc/redirections-breadcrumbs/my-account.php';
require_once plugin_dir_path(__FILE__) . 'inc/match-service/search_author.php';
require_once plugin_dir_path(__FILE__) . 'inc/send-message-match/send_email.php';
require_once plugin_dir_path(__FILE__) . 'inc/search-task/search.php';
require_once plugin_dir_path(__FILE__) . 'inc/membership/membership-plans.php';
require_once plugin_dir_path(__FILE__) . 'inc/membership/membresia-monei-api/subscriptions-handler.php';


// function obtener_valor_de_correo() {
//     if (is_user_logged_in()) {
//         $current_user = wp_get_current_user();
//         return $current_user->user_email;
//     }
//     return '';
// }

// function obtener_valor_de_name() {
//     return 'Que onda prix';
// }

// Roger //

function add_css_class_to_thumbnail($html, $post_id, $post_thumbnail_id, $size, $attr)
{
	// Afegeix la classe CSS que vulguis
	$html = str_replace('<img', '<img class="hidemob"', $html);
	return $html;
}
add_filter('post_thumbnail_html', 'add_css_class_to_thumbnail', 10, 5);


//Creating the CPT config for requests
// function create_cpt_requests() {
//     $labels = array(
//         'name' => 'Solicitudes',
//         'singular_name' => 'Solicitud',
//         'menu_name' => 'Solicitudes',
//         'name_admin_bar' => 'Solicitud',
//         'add_new' => 'Añadir Nueva',
//         'add_new_item' => 'Añadir Nueva Solicitud',
//         'new_item' => 'Nueva Solicitud',
//         'edit_item' => 'Editar Solicitud',
//         'view_item' => 'Ver Solicitud',
//         'all_items' => 'Todas las Solicitudes',
//         'search_items' => 'Buscar Solicitudes',
//         'parent_item_colon' => 'Solicitud Padre:',
//         'not_found' => 'No se encontraron solicitudes.',
//         'not_found_in_trash' => 'No se encontraron solicitudes en la papelera.',
//     );

//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => 'solicitudes'),
//         'capability_type' => 'post',
//         'has_archive' => true,
//         'hierarchical' => false,
//         'menu_position' => null,
//         'supports' => array('title','author'),
//     );

//     register_post_type('solicitudes', $args);
// }
// add_action('init', 'create_cpt_requests');

function custom_payment_methods_page() {
    if ( ! is_user_logged_in() ) {
        return __( 'You need to be logged in to manage your payment methods.', 'woocommerce' );
    }

    ob_start();

    // WooCommerce template for payment methods
    wc_get_template( 'myaccount/payment-methods.php' );

    $output = ob_get_clean();

    // Obtener la URL correcta para "My Account" y el endpoint "add-payment-method"
    $my_account_url = wc_get_page_permalink( 'myaccount' );
    $add_payment_method_url = trailingslashit( $my_account_url ) . 'add-payment-method/';

    // Reemplazar el enlace de "Add Payment Method" en la salida
    $output = str_replace( '/el-meu-romanent-proveidor/add-payment-method/', esc_url( $add_payment_method_url ), $output );

    return $output;
}
add_shortcode( 'custom_payment_methods', 'custom_payment_methods_page' );

function redirect_after_add_payment_method( $return_url ) {
    // Redirige a la página personalizada después de agregar un método de pago
    if ( is_wc_endpoint_url( 'add-payment-method' ) ) {
        $return_url = get_permalink( get_page_by_path( 'el-meu-romanent-proveidor' ) );
    }
    return $return_url;
}
add_filter( 'woocommerce_get_return_url', 'redirect_after_add_payment_method' );


// Eliminar suscripciones duplicadas y agregar solo una nueva suscripción al carrito
add_filter( 'woocommerce_add_cart_item_data', 'replace_subscription_in_cart', 10, 2 );

function replace_subscription_in_cart( $cart_item_data, $product_id ) {
    $product = wc_get_product( $product_id );
    
    // Verificar si el producto es una suscripción
    if ( $product->is_type( 'subscription' ) ) {
        // Recorrer el carrito y eliminar cualquier suscripción existente
        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            if ( $cart_item['data']->is_type( 'subscription' ) ) {
                WC()->cart->remove_cart_item( $cart_item_key );
            }
        }
    }

    return $cart_item_data;
}

// Personalizar el mensaje de "Producto agregado al carrito"
add_filter( 'wc_add_to_cart_message_html', 'quadlayers_custom_add_to_cart_message', 10, 2 );
function quadlayers_custom_add_to_cart_message( $message, $products ) {
    // Mensaje personalizado al agregar productos al carrito
    return 'El teu saldo ha estat afegit a la comanda.';
}

// Cambiar el mensaje de "Carrito actualizado" usando gettext
add_filter( 'gettext', 'custom_cart_updated_notice_gettext', 20, 3 );

function custom_cart_updated_notice_gettext( $translated_text, $text, $domain ) {
    // Comprobar si es el mensaje de carrito actualizado y el dominio es WooCommerce
    if ( $translated_text === 'Carrito actualizado.' && $domain === 'woocommerce' ) {
        // Retornar el mensaje personalizado
        return 'La comanda ha estat actualitzada amb èxit. Revisa els teus canvis!';
    }
    return $translated_text;
}
<?php   
if(! defined('ABSPATH')) exit;

add_shortcode("no_authorization_page", "page_no_authorization");

function page_no_authorization() {
    ?>
    <main id="primary" class="site-main">
        <section class="error-404 not-found">
            <div class="container login mt-5">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12">
                        <h1 class="page-title"><?php esc_html_e( 'Lo sentimos no tienes acceso a esta página' ); ?></h1>
                        <div class="page-content">
                            <p><?php esc_html_e( 'Parece que no se encontró nada en este lugar. ¿Tal vez intente una búsqueda?' ); ?></p>
                                <?php
                                    get_search_form();
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
}

add_shortcode("service_limits", "posts_service_limits");
function posts_service_limits() {
    ?>
    <main id="primary" class="site-main">
        <section class="error-404 not-found">
            <div class="container login mt-5">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12">
                        <h1 class="page-title"><?php esc_html_e( 'Lo sentimos, ya haz excedido la cantidad de publicaciones segun tu membresia' ); ?></h1>
                        <div class="page-content">
                            <p><?php esc_html_e( 'Parece que no se encontró nada en este lugar. ¿Tal vez intente una búsqueda?' ); ?></p>
                                <?php
                                    get_search_form();
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
}

add_shortcode("no_request", "no_posts_in_request");
function no_posts_in_request() {
    ?>
        <section class="SinOferta">
           <div class="SinOferta-container">
            <div class="SinOferta-content">
                <div class="SinOferta-icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-sin-oferta-icon.png" alt="valeApp" class="SinOferta-img"/>
                </div>
                <h4 class="SinOferta-title">
                    No se han encontrado ofertas
                </h4>
                <p class="SinOferta-text">
                    Publica una oferta y encuentra el servicio que necesitas con los profesionales que mejor se adaptan a tu búsqueda.
                </p>
                <button class="SinOferta-btn" onclick="wp_redirect('/mi-pagina', 301);">
                    Publicar oferta
                </button>
            </div>
           </div>
        </section>
    <?php
}

?>
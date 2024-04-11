<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ValeApp
 */

get_header();

$post_id = get_the_ID();
$user_id = get_current_user_id();
$profile_photo = get_field('field_64dcf7f7e9ebb', $post_id);
$name = get_field('field_64dcf6d0e9eb0', $post_id);
$last_name = get_field('field_64dcf6f8e9eb1', $post_id);
$birthday = get_field('field_64dcf709e9eb2', $post_id);
$email = get_field('field_64dcf72be9eb3', $post_id);
$address = get_field('field_64dcf783e9eb6', $post_id);
$cp = get_field('field_64dcf796e9eb7', $post_id);
$city = get_field('field_64dcf7afe9eb8', $post_id);
$country = get_field('field_64dcf7c5e9eb9', $post_id);
$phone = get_field('field_64dcf760e9eb5', $post_id);
$description = get_field('field_64dcf832e9ebd', $post_id);
$rate = '';
$balance = get_field('field_65f1677e65100', $post_id);

?>
<section class="professionalDashboard">
       <div class="user">
            <img class="image-profile" src="<?php echo($profile_photo['url']);?>" alt="<?php echo($profile_photo['alt']); ?>">
            <p class="name"><?php echo($name . " " . $last_name); ?></p>
            <div class="professionalDashboard-rate">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-star-image.png" alt="ValeApp">
                <span class="rating"><?php echo($rate); ?></span>
                <span class="opinions">(30 opiniones)</span>
            </div>
            <p class="price"><?php echo $balance; ?></p>
            <a class="tokens-btn" href="/agregar-tokens">Añadir Tokens</a>
       </div>
       <div class="professionalDashboard-options">
            <h2 class="title">Mi cuenta</h2>
            <nav class="menu">
                <ul class="list">
                    <a class="link" href="">
                        <li class="option">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-account-icon.png" alt="ValeApp" class="img-fluid option-icon">
                            <span class="option-text">Cuenta y datos personales</span>
                        </li>
                    </a>
                     <a class="link" href="/solicitar-servicio">
                         <li class="option">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-catalogue-icon.png" alt="ValeApp" class="img-fluid option-icon">
                             <span class="option-text">Publicar Ofertas</span>
                         </li>
                     </a>
                     <a class="link" href="/mis-ofertas">
                         <li class="option">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-task-icon.png" alt="ValeApp" class="img-fluid option-icon">
                             <span class="option-text">Mis ofertas</span>
                         </li>
                     </a>
                     <a class="link" href="/tareas-contratadas">
                         <li class="option">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-contracted-tasks-icon.png" alt="ValeApp" class="img-fluid option-icon">
                             <span class="option-text">Tareas Contratadas</span>
                         </li>
                     </a>
                     <a class="link" href="/mi-saldo">
                         <li class="option">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-balance-icon.png" alt="ValeApp" class="img-fluid option-icon">
                             <span class="option-text">Mi saldo</span>
                         </li>
                     </a>
                     <a class="link" href="/mensajeria">
                         <li class="option">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-messages-icon.png" alt="ValeApp" class="img-fluid option-icon">
                             <span class="count">1</span>
                             <span class="option-text">Mensajes</span>
                         </li>
                     </a>
                     <a class="link" href="/promociones">
                         <li class="option">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-promotion-icon.png" alt="ValeApp" class="img-fluid option-icon promotions">
                             <span class="option-text promotionsText">Promociones</span>
                         </li>
                     </a>
                    <div class="subtitle">Centro de soporte</div>
                     <a class="link" href="">
                         <li class="option">
                             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-help-icon.png" alt="ValeApp" class="img-fluid option-icon">
                             <span class="option-text">Ayuda</span>
                         </li>
                     </a>
                </ul>
            </nav>
            <a  class="logOut" href="<?php echo wp_logout_url(home_url()); ?>" >Cerrar Sesión</a>
       </div>
    </section>
<?php

get_sidebar();
get_footer();

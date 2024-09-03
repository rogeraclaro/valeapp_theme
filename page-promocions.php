<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ValeApp
 */
 
get_header();

if (is_user_logged_in()) {
    $current_user = wp_get_current_user();
    $user_roles = $current_user->roles;

    $rol = '';
    if (in_array('proveedorvaleapp', $user_roles)) {
        $rol = "Proveedor";
    } elseif (in_array('clientevaleapp', $user_roles)) {
        $rol = "Cliente";
    } elseif (in_array('administrator', $user_roles)) {
        $rol = ["Proveedor", "Cliente"];
    }
}


$query_promotion = [
    'key' => 'tipo_de_promocion_usuario',
    'value'=> $rol,
    'compare' => '=',
];

$args_promotions = [
    'post_type' => 'promocion',
    'posts_per_page' => -1,
    'meta_query' => [
        $query_promotion
    ],
];

?>
<section class="section2 promociones">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><?php breadcrumb_my_account(); ?></li>
            <li class="breadcrumb-item"><a href="#"></a></li>
          </ol>
        </nav>
      </div>
      <div class="col-12">
        <h2 class="title">
          Promocions
        </h2>
      </div>
    </div>
  </div>
</section>
<?php
$promotion_query = new WP_Query($args_promotions);
if($promotion_query->have_posts()) :
    while($promotion_query->have_posts()) : $promotion_query->the_post();
    $id_post = get_the_ID();
    $user_type = get_field('field_65b14796f6ccb')['usuario'];
    $title = get_field("field_65b1694f5abe3")['titulo'];
    $subtitle = get_field("field_65b1694f5abe3")['subtitulo'];
    ?>
<section class="promociones">
  <div class="container">
    <div class="promociones-content">
      <a class="promociones-card" href="#">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeap-arrow-promociones.png" alt="valeapp"
          class="promociones-arrow">
        <div class="promociones-cardContent">
          <h4 class="promociones-title">
            <?php echo($title); ?>
          </h4>
          <p class="promociones-subtitle">
            <?php echo($subtitle); ?>
          </p>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-promociones-icon.png" alt="valeapp"
          class="promociones-icon">
      </a>
    </div>
  </div>
</section>
<?php            
endwhile;
else:
    echo('No se encontraron posts');
endif;
wp_reset_postdata();
?>



<?php
get_footer();
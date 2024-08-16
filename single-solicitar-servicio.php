<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ValeApp
 */
acf_form_head();

get_header();

$post_id = get_the_ID();
if (current_user_can('clientevaleapp') || current_user_can('administrator')) {
?>
<div class="service-request-form forms-default container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <?php
                acf_form([
                    'post_id'       => $post_id,
                    'field_groups'  => ['group_64dcf8a7a89d8'],
                    'fields' => [
                        'field_656f483c90876',
                        'field_656f507890877',
                        'field_656f517290878',
                        'field_656f51d690879',
                        'field_656f52929087a',
                        'field_656f53019087b'
                    ],
                    'submit_value'  => 'Actualizar',
                    'updated_message' => '¡Formulario actualizado!',
                    'return' => '/ofertas-para-tu-solicitud',
                ]);
            ?>
        </div>
    </div>
</div>

<?php
}
 else {
     echo do_shortcode('[no_authorization_page]');
 }
get_footer();
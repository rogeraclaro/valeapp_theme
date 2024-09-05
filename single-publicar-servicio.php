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
if (current_user_can('proveedorvaleapp') || current_user_can('administrator')) {
?>
<div class="PublishService">
  <div class="container mt-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-12">
        <h2 class="title">Editar Servei</h2>
        <?php
                    acf_form([
                        'post_id'       => $post_id,
                        'field_groups'  => ['group_64e3cd0b38f67'],
                        'submit_value'  => 'Confirmar',
                        'updated_message' => 'Formulari actualitzat!',
                        'return' => '/mis-servicios',
                    ]);
                    ?>
      </div>
    </div>
  </div>
</div>

<?php
}
get_sidebar();
get_footer();
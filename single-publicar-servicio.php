<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ValeApp
 */

get_header();

$category = get_field('field_64e3cd0cbe4b2', $post_id);
$subcategory = '';
if($category) {
    switch($category) {
        case 'Casa':
            $subcategory = get_field('field_64e3d2df88a52', $post_id);
            break;
        case 'Aprende':
            $subcategory = get_field('field_64e3d4bb88a53', $post_id);
            break;
        case 'Deporte':
            $subcategory = get_field('field_64e3d4f788a54', $post_id);
            break;
        case 'Mente':
            $subcategory = get_field('field_64e3d52b88a56', $post_id);
            break;
        case 'Cuida de los tuyos':
            $subcategory = get_field('field_64e3d55188a58', $post_id);
            break;
        case 'Belleza':
            $subcategory = get_field('field_64e3d57188a59', $post_id);
            break;
        case 'Contrata':
            $subcategory = get_field('field_64e3d5a188a5a', $post_id);
            break;
        case 'Alquila':
            $subcategory = get_field('field_64e3d5fb88a5b', $post_id);
            break;
    }
}
$monday = $tuesday = $wednesday = $thursday = $friday = $saturday = $sunday = "";
if(get_field('field_64e3d6880f3b7', $post_id) == 1){
    $monday = 'Lunes';
}

if(get_field('field_64e3d6b90f3b8', $post_id) == 1){
    $tuesday = 'Martes';
}

if(get_field('field_64e3d6c70f3b9', $post_id) == 1){
    $wednesday = 'Miercoles';
}

if(get_field('field_64e3d6e80f3ba', $post_id) == 1){
    $thursday = 'Jueves';
}

if(get_field('field_64e3d6f20f3bb', $post_id) == 1){
    $friday = 'Viernes';
}

if(get_field('field_64e3d6ff0f3bc', $post_id) == 1){
    $saturday = 'Sabado';
}

if(get_field('field_64e3d70f0f3bd', $post_id) == 1){
    $sunday = 'Domingo';
}

$price = get_field('field_64e789857cbfa', $post_id);
?>

<div class="container login mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <h1>Servicio Publicado:</h1>
            <h2>Categoria: </h2>
            <h4><?php echo($category); ?></h4>
            <h2>Sub-categoria: </h2>
            <h4><?php echo($subcategory); ?></h4>
            <h2>Horarios: </h2>
            <h5><?php echo($monday); ?></h5>
            <h5><?php echo($tuesday); ?></h5>
            <h5><?php echo($wednesday); ?></h5>
            <h5><?php echo($thursday); ?></h5>
            <h5><?php echo($friday); ?></h5>
            <h5><?php echo($saturday); ?></h5>
            <h5><?php echo($sunday); ?></h5>
            <h2>Precio por hora:</h2>
            <h4>€<?php echo($price) ?></h4>
        </div>
    </div>
</div>

<?php
get_sidebar();
get_footer();

<?php
/**
 * @package ValeApp
 */

function match_service($post) {
include 'variables.php';
include 'choose-day.php';
include 'choose-subcategory.php';
include 'choose-filter.php';
// include 'choose-query.php';



//Querys validations
if($modality) {
    $modality_query = 
    [
        'key' => 'categorias_modalidad',
        'value'=> $modality,
        'compare' => '=',
    ];
}

if($come) {
    $come_query = 
    [
        'key' => 'detalle_servicio_vienes_o_vengo',
        'value'=> $come,
        'compare' => '!=',
    ];
}

$args_provider = [
    'post_type' => 'publicar-servicio',
    'posts_per_page' => -1,
    'meta_query' => [
        //Filtro de Categoria
        [
            'key' => 'categorias_categoria',
            'value'=> $category_provider,
            'compare' => '=',
        ],

        //Filtro de Subcategoria
        [
            'key' => 'categorias_'.$subcategory_search,
            'value'=> $subcategory_provider,
            'compare' => '=',
        ],

        // Filtro de filtros
        //
        $filter_query,
        //
        //Filtro Belleza por sexo
        //
        $gender_query,
        //
        //Filtro por tipo de unhas
        //
        $nails_query,
        //
        // Filtro por tipo de depilacion
        //
        $hair_removal_query,
        //
        // Filtro por nivel
        //
        $level_query,
        //
        // Filtro  por la zona de trabajo
        //
        [
            'key' => 'detalle_servicio_zonas_de_trabajo',
            'value'=> $location,
            'compare' => '=',
        ],
        //
        // Filtro por modalidad
        //
        $modality_query,
        //
        //Filtro Vienes o vengo
        //
        $come_query,
        //
        //Filtro por el dia
        //
        [
            'key' => 'detalle_servicio_'.$day_search,
            'value'=> 1,
            'compare' => '=',
        ],
        //
        // Filtrado por hora inicial
        //
        [
            'key' => 'detalle_servicio_'.$schedule.'_'.$start_time,
            'value'=> $initial_time,
            'compare' => '<=',
        ],
        //
        // Filtrado por la hora final
        //
        [
            'key' => 'detalle_servicio_'.$schedule.'_'.$end_time,
            'value'=> $final_time,
            'compare' => '>=',
        ],
        //
        //Filtrado por el precio
        //
        [
            'key' => 'detalle_servicio_'.$price_search,
            'value'=> $price,
            'compare' => '<=',
        ],
    ],
];

$query = new WP_Query($args_provider);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $id_request = $post_id_provider;
            $id_publish = get_the_ID();
            $user = get_post_field( 'post_author');
            search_user($user, $id_publish, $id_request);
        }
        wp_reset_postdata();
    }
    else {
        echo("No hay datos");
    }
}

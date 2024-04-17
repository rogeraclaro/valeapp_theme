<?php

include "add-filters.php";
include "search-author.php";
include "render-providers.php";
include "change_name_filter.php";
function obtener_ultimo_termino_url() {
    $current_url = esc_url_raw(add_query_arg([]));
    $url_parts = explode('/', rtrim($current_url, '/'));
    $url_parts = array_filter($url_parts);
    $last_part = end($url_parts);

    return $last_part;
}
$users = get_users([
    'role' => 'proveedorvaleapp',
]);

// Uso de la función
$last_part = obtener_ultimo_termino_url();
$last_part = ucfirst($last_part);

// Imprimir el último término
// function last_term($url) {
//     if ($url) {
//         echo 'Último Término: ' . esc_html($url);
//     } else {
//         echo 'No se encontró un término en la URL.';
//     }
// }

$category_search = [
    'key' => 'name',
    'value'=> $last_part,
];

$post_type = 'blog-categorias';
$arg_url = [
    'post_type' => $post_type,
    'post_per_page' => -1,
    'meta_query' => [
        $category_search
    ]
];

$posts = get_posts($arg_url);

function search_category($posts) {
    if($posts) {
        foreach($posts as $post) {
            $id = $post->ID;
            return $id;
        }
    }
}

$id = search_category($posts);
$title = get_field('field_65ef43396b388', $id);
$field = get_field('field_65ef38881ab1a', $id);
$title_cat = "";
$titleP = get_field('titulo', $id);
$textP = get_field('texto', $id);
$imatgeP = get_field('imagen', $id);
$botoP = get_field('texto_boton', $id);

switch($title) {
    case "Eventos":
        $title_cat = "Esdeveniments";
    break;
    case "Comparte":
        $title_cat = "Comparteix";
    break;
    case "Contrata":
        $title_cat = "Contracta";
    break;
    case "Cuidados":
        $title_cat = "Cuida els teus";
    break;
    case "Mente":
        $title_cat = "Ment";
    break;
    case "Deporte":
        $title_cat = "Esport";
    break;
    case "Aprende":
        $title_cat = "Aprèn";
    break;
    case "Hogar":
        $title_cat = "Llar";
    break;
    case "Belleza":
        $title_cat = "Bellesa";
    break;
};

if(!$title_cat){
    $last_part = strtolower($last_part);
    $title_cat = change_filter($last_part);
}

function render_filter($field) {
    
    if($field) { ?>
        <section class="CategoryDetail-content">
            <div class="CategoryDetail-images">
            <?php
                foreach ($field as $fila) {
                    $img = $fila['img_subcategory']['url'];
                    $img_desk = $fila['img_subcategory_desktop']['url'];
                    if(!$img){
                        $img = "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png";
                    };
                    $title = $fila['title_subcategory'];
                    $link = $fila['link_subcategory'];                
                    ?>
                    <div class="CategoryDetail-image">
                        <img class="img-fluid d-sm-none" src=<?php echo $img ?> alt="valeapp">
                        <img class="img-fluid d-none d-sm-block" src=<?php echo $img_desk ?> alt="valeapp">
                        <a class="CategoryDetail-textImg" href="/categoria/<?php echo $link; ?>">
                            <?php echo $title; ?>
                        </a>
                    </div>
                    <?php
                }
            ?>
            </div>
        </section> <?php
    }
}


//En caso de ser el filtro
if(!$posts) {
    $filter_key = filter_rename($last_part);
    $filter_search = [
        'relation' => 'OR',
        [
            'key' => 'categorias_hogar',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_aprende',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_deporte',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_mente',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_cuidados',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_belleza',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_contrata',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_comparte',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_eventos',
            'value' => $filter_key,
            'compare' => "=",
        ],
    ];

    $arg_url = [
        'post_type' => 'publicar-servicio',
        'post_per_page' => -1,
        'meta_query' => $filter_search,
    ];
    
    $items = get_posts($arg_url);

    $title = $filter_key;
    function render_users($items, $users){
        if($items) {
            ?>
            <section class="section3 pages users" id="page3">
                <div class="container">
                    <div class="row">
                        <div id="cards" class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="cards">
                                        <?php
                                        foreach($items as $item){
                                            $post_id = $item->ID;
                                            $user_id = get_post_field('post_author', $post_id);
                                            $group = get_field('field_656e52af35d62', $post_id);
                                            $price = $group['precio_por_hora'] + $group['precio_por_servicio'] - 10;
                                            search_author_url($user_id, $price);
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php
            } else {
        ?>
        <h1>No hay Proveedores por el momento (Data Dummie)</h1>
        <?php
        render_providers($users);
        }
    }
}
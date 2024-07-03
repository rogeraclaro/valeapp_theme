<?php

include "add-filters.php";
include "search-author.php";
include "render-providers.php";
include "change_name_filter.php";

$id_category = '';
function obtener_ultimo_termino_url()
{
    $current_url = esc_url_raw(add_query_arg([]));
    $path = parse_url($current_url, PHP_URL_PATH);
    $parts = explode('/', trim($path, '/'));
    $categories_index = array_search('categories', $parts);
    $last_part = ($categories_index !== false && isset($parts[$categories_index + 1])) ? $parts[$categories_index + 1] : null;

    return $last_part;
}
$users = get_users([
    'role' => 'proveedorvaleapp',
]);


$last_part = obtener_ultimo_termino_url();

$category_array = ['llar', 'apren', 'esport', 'ment', 'cuida_els_teus', 'bellesa', 'contracta', 'comparteix', 'esdeveniments'];

if (in_array($last_part, $category_array)) {
    $post_type = 'blog-categorias';
    $arg_url = [
        'post_type' => $post_type,
        'posts_per_page' => -1,
        's' => $last_part
    ];

    $query = new WP_Query($arg_url);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $id = $post->ID;
            $id_category = $id;

        }
        wp_reset_postdata();
    }
}

// $id = search_category($posts);
$title = get_field('field_65ef43396b388', $id_category);
$field = get_field('field_65ef38881ab1a', $id_category);
$title_cat = "";
$titleP = get_field('titulo', $id_category);
$textP = get_field('texto', $id_category);
$imatgeP = get_field('imagen', $id_category);
$botoP = get_field('texto_boton', $id_category);

switch ($title) {
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
}
;

if (!$title_cat) {
    $last_part = ucfirst($last_part);
    $title_cat = $last_part;
}

//Renderizado para los filtros/Categorias
function render_filter($field)
{

    if ($field) { ?>
        <section class="CategoryDetail-content">
            <div class="CategoryDetail-images">
                <?php
                foreach ($field as $fila) {
                    $img = $fila['img_subcategory']['url'];
                    $img_desk = $fila['img_subcategory_desktop']['url'];
                    if (!$img) {
                        $img = "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png";
                    }
                    ;
                    $title = $fila['title_subcategory'];
                    $link = $fila['link_subcategory'];
                    ?>
                    <div class="CategoryDetail-image">
                        <img class="img-fluid d-sm-none" src=<?php echo $img ?> alt="valeapp">
                        <img class="img-fluid d-none d-sm-block" src=<?php echo $img_desk ?> alt="valeapp">
                        <a class="CategoryDetail-textImg" href="/categories/<?php echo $link; ?>">
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
if (!$posts) {
    $filter_key = $last_part;
    $filter_search = [
        'relation' => 'OR',
        [
            'key' => 'categorias_llar',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_apren',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_esport',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_ment',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_cuida els teus',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_bellesa',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_contracta',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_comparteix',
            'value' => $filter_key,
            'compare' => "=",
        ],
        [
            'key' => 'categorias_esdeveniments',
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
    function render_users($items, $users)
    {
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $sort_order = isset($_GET['sort_order']) ? $_GET['sort_order'] : '';
        $place_order = isset($_GET['place_order']) ? $_GET['place_order'] : '';
        $per_page = 3;

        // Ordenar los datos por el criterio seleccionado antes de la paginación
        if ($sort_order == 'price_asc') {
            usort($items, function ($a, $b) {
                $post_id_a = $a->ID;
                $group_a = get_field('field_656e52af35d62', $post_id_a);
                $price_a = $group_a['precio_por_hora'] + $group_a['precio_por_servicio'] - 10;

                $post_id_b = $b->ID;
                $group_b = get_field('field_656e52af35d62', $post_id_b);
                $price_b = $group_b['precio_por_hora'] + $group_b['precio_por_servicio'] - 10;
                return $price_a - $price_b;
            });
        } elseif ($sort_order == 'ranking_desc') {
            usort($items, function ($a, $b) {
                $post_id_a = $a->ID;
                $rate_a = search_author_rate($post_id_a);
                $post_id_b = $b->ID;
                $rate_b = search_author_rate($post_id_b);

                return $rate_b - $rate_a;
            });
        }

        if (!empty($place_order)) {
            $items = array_filter($items, function ($item) use ($place_order) {
                $post_id = $item->ID;
                $place = get_field('field_64e3e456800b6', $post_id); 

                return $place == $place_order;
            });
        }

        $total_pages = ceil(count($items) / $per_page);
        $offset = ($page - 1) * $per_page;
        $current_page_data = array_slice($items, $offset, $per_page);

        $placeItems = ["Andorra la Vella", "Sant Julià de Lòria", "Encamp", "Canillo", "la Maçana", "Ordino", "les Escaldes i Engordany"];

        if ($items) {
            ?>
            <section class="section3 pages users" id="page3">
                <div class="section3">
                    <form method="GET">
                        <label for="sort_order">Sort by:</label>
                        <select name="sort_order" id="sort_order" onchange="this.form.submit()">
                            <option value="">Default</option>
                            <option value="price_asc" <?php if ($sort_order == 'price_asc')
                                echo 'selected'; ?>>Price: Low to High
                            </option>
                            <option value="ranking_desc" <?php if ($sort_order == 'ranking_desc')
                                echo 'selected'; ?>>Ranking: High to
                                Low</option>
                        </select>
                    </form>
                    <form method="GET">
                        <label for="place_order">Place by:</label>
                        <select name="place_order" id="place_order" onchange="this.form.submit()">
                            <option value="">Default</option>
                            <?php foreach ($placeItems as $place): ?>
                                <option value="<?= $place; ?>" <?php if ($place_order == $place)
                                      echo 'selected'; ?>><?= $place; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </form>
                </div>
                <div class="container">
                    <div class="cards">
                        <?php
                        foreach ($current_page_data as $item) {
                            $post_id = $item->ID;
                            $user_id = get_post_field('post_author', $post_id);
                            $group = get_field('field_656e52af35d62', $post_id);
                            $price = $group['precio_por_hora'] + $group['precio_por_servicio'] - 10;
                            search_author_url($user_id, $price);
                        }
                        ?>
                    </div>
                </div>
                <div id="pagination">
                    <?php if ($page > 1): ?>
                        <a
                            href="?page=<?php echo $page - 1; ?>&sort_order=<?php echo $sort_order; ?>&place_order=<?php echo $place_order; ?>">&laquo;
                            Previous</a>
                    <?php endif; ?>

                    <?php if ($page < $total_pages): ?>
                        <a
                            href="?page=<?php echo $page + 1; ?>&sort_order=<?php echo $sort_order; ?>&place_order=<?php echo $place_order; ?>">Next
                            &raquo;</a>
                    <?php endif; ?>
                </div>
            </section>
            <?php
        } else {
            ?>
            <h1>No hay Proveedores por el momento</h1>
            <?php
            // render_providers($users);
        }
    }

}
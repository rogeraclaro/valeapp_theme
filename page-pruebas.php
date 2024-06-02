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
// ************************************************No taocar***************************************************
// Utilizando el plugin Front End pm
// echo do_shortcode('[front-end-pm]');

//Utilizando el plugin Simple Ajax Chat
// echo do_shortcode('[sac_happens]');

//Utilizando el plugin better message
// echo do_shortcode('[better_messages]');
// echo do_shortcode('[better_messages_unread_counter hide_when_no_messages="1" preserve_space="1"]');


// $thread_id = 1; //Conversation ID to display

// echo Better_Messages()->functions->get_conversation_layout( $thread_id );
//********************************************************************************************************************/

// Datos de ejemplo
$cards = [
    ['provider' => 'Provider A', 'name' => 'Card 1', 'price' => rand(10, 150), 'ranking' => rand(1, 5)],
    ['provider' => 'Provider B', 'name' => 'Card 2', 'price' => rand(10, 150), 'ranking' => rand(1, 5)],
    ['provider' => 'Provider C', 'name' => 'Card 3', 'price' => rand(10, 150), 'ranking' => rand(1, 5)],
    ['provider' => 'Provider D', 'name' => 'Card 4', 'price' => rand(10, 150), 'ranking' => rand(1, 5)],
    ['provider' => 'Provider E', 'name' => 'Card 5', 'price' => rand(10, 150), 'ranking' => rand(1, 5)],
    ['provider' => 'Provider F', 'name' => 'Card 6', 'price' => rand(10, 150), 'ranking' => rand(1, 5)],
    ['provider' => 'Provider G', 'name' => 'Card 7', 'price' => rand(10, 150), 'ranking' => rand(1, 5)],
    ['provider' => 'Provider H', 'name' => 'Card 8', 'price' => rand(10, 150), 'ranking' => rand(1, 5)],
    ['provider' => 'Provider I', 'name' => 'Card 9', 'price' => rand(10, 150), 'ranking' => rand(1, 5)],
    ['provider' => 'Provider J', 'name' => 'Card 10', 'price' => rand(10, 150), 'ranking' => rand(1, 5)],
    ['provider' => 'Provider K', 'name' => 'Card 11', 'price' => rand(10, 150), 'ranking' => rand(1, 5)],
    ['provider' => 'Provider L', 'name' => 'Card 12', 'price' => rand(10, 150), 'ranking' => rand(1, 5)],
    // Añadir más datos según sea necesario
];

// Obtener los parámetros de paginación y filtro de la URL
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$per_page = 3; // Número de elementos por página
$filter_provider = isset($_GET['filter_provider']) ? $_GET['filter_provider'] : '';
$sort_order = isset($_GET['sort_order']) ? $_GET['sort_order'] : '';

// Filtrar los datos si se ha seleccionado un proveedor
if (!empty($filter_provider)) {
    $cards = array_filter($cards, function($card) use ($filter_provider) {
        return $card['provider'] === $filter_provider;
    });
}

// Ordenar los datos por el criterio seleccionado
if ($sort_order == 'price_asc') {
    usort($cards, function($a, $b) {
        return $a['price'] - $b['price'];
    });
} elseif ($sort_order == 'ranking_desc') {
    usort($cards, function($a, $b) {
        return $b['ranking'] - $a['ranking'];
    });
} else {
    // Ordenar por nombre como orden predeterminado
    usort($cards, function($a, $b) {
        return strcmp($a['name'], $b['name']);
    });
}

// Calcular el número total de páginas
$total_pages = ceil(count($cards) / $per_page);

// Obtener los datos para la página actual
$offset = ($page - 1) * $per_page;
$current_page_data = array_slice($cards, $offset, $per_page);

// Mostrar los datos
?>

<div id="cards-container">
    <form method="GET">
        <label for="filter_provider">Filter by Provider:</label>
        <select name="filter_provider" id="filter_provider" onchange="this.form.submit()">
            <option value="">All</option>
            <option value="Provider A" <?php if ($filter_provider == 'Provider A') echo 'selected'; ?>>Provider A</option>
            <option value="Provider B" <?php if ($filter_provider == 'Provider B') echo 'selected'; ?>>Provider B</option>
            <option value="Provider C" <?php if ($filter_provider == 'Provider C') echo 'selected'; ?>>Provider C</option>
            <option value="Provider D" <?php if ($filter_provider == 'Provider D') echo 'selected'; ?>>Provider D</option>
            <option value="Provider E" <?php if ($filter_provider == 'Provider E') echo 'selected'; ?>>Provider E</option>
            <option value="Provider F" <?php if ($filter_provider == 'Provider F') echo 'selected'; ?>>Provider F</option>
            <option value="Provider G" <?php if ($filter_provider == 'Provider G') echo 'selected'; ?>>Provider G</option>
            <option value="Provider H" <?php if ($filter_provider == 'Provider H') echo 'selected'; ?>>Provider H</option>
            <option value="Provider I" <?php if ($filter_provider == 'Provider I') echo 'selected'; ?>>Provider I</option>
            <option value="Provider J" <?php if ($filter_provider == 'Provider J') echo 'selected'; ?>>Provider J</option>
            <option value="Provider K" <?php if ($filter_provider == 'Provider K') echo 'selected'; ?>>Provider K</option>
            <option value="Provider L" <?php if ($filter_provider == 'Provider L') echo 'selected'; ?>>Provider L</option>
        </select>

        <label for="sort_order">Sort by:</label>
        <select name="sort_order" id="sort_order" onchange="this.form.submit()">
            <option value="">Default</option>
            <option value="price_asc" <?php if ($sort_order == 'price_asc') echo 'selected'; ?>>Price: Low to High</option>
            <option value="ranking_desc" <?php if ($sort_order == 'ranking_desc') echo 'selected'; ?>>Ranking: High to Low</option>
        </select>
    </form>
    
    <ul>
        <?php foreach ($current_page_data as $card): ?>
            <li><?php echo $card['provider'] . ': ' . $card['name'] . ' - $' . $card['price'] . ' - Ranking: ' . $card['ranking']; ?></li>
        <?php endforeach; ?>
    </ul>

    <div id="pagination">
        <?php if ($page > 1): ?>
            <a href="?page=<?php echo $page - 1; ?>&filter_provider=<?php echo $filter_provider; ?>&sort_order=<?php echo $sort_order; ?>">&laquo; Previous</a>
        <?php endif; ?>

        <?php if ($page < $total_pages): ?>
            <a href="?page=<?php echo $page + 1; ?>&filter_provider=<?php echo $filter_provider; ?>&sort_order=<?php echo $sort_order; ?>">Next &raquo;</a>
        <?php endif; ?>
    </div>
</div>


<?php
get_footer();
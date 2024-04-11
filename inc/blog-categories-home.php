<?php
/**
 * @package ValeApp
 */

$post_type = 'blog-categorias';

 // Realiza la consulta a la base de datos
$args = [
 'post_type' => $post_type,
 'posts_per_page' => -1, // Para obtener todos los posts
];

$query = new WP_Query($args);
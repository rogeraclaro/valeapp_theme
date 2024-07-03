<?php

add_action('save_post', 'set_custom_title_from_acf_providers');
add_action('template_redirect', 'page_verify_providers');

function page_verify_providers() {
    if(is_page('dades-proveidor')) {
        if(is_user_logged_in()) {
            global $post;

            $user = wp_get_current_user();
            $args = [
                'post_type'      => 'proveedor', 
                'author'         => $user->ID,
                'posts_per_page' => 1,
            ];

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                wp_redirect(home_url('home'));
                exit;
            }
            add_action('acf/save_post', 'custom_acf_form_submission_providers', 1);
        }
    }
}

function custom_acf_form_submission_providers($post_id) {
    if ($post_id && isset($_POST['acf'])) {
        $current_user = wp_get_current_user();
        $first_name = $current_user -> first_name;
        $last_name = $current_user -> last_name;
        $email = $current_user -> user_email;
        $password = $current_user -> user_pass;
        $title = $email;
        
        if (!empty($title)) {
            $post_data = [
                'ID'         => $post_id,
                'post_title' => $title,
            ];

            update_field('field_64dcf1b4615ce', $first_name, $post_id);
            update_field('field_64dcf1f6615cf', $last_name, $post_id);
            update_field('field_64dcf20f615d0', $email, $post_id);
            update_field('field_64dcf227615d1', $password, $post_id);
            wp_update_post($post_data);
        }
    }
}

function set_custom_title_from_acf_providers($post_id) {    
    if ('proveedor' === get_post_type($post_id)) {
        
        $title = $_POST['acf']['field_64dcf20f615d0'];
        $username = sanitize_user($_POST['acf']['field_64dcf1b4615ce'] . " " . $_POST['acf']['field_64dcf1f6615cf']);
        $email = sanitize_email($_POST['acf']['field_64dcf20f615d0']);
        $password = $_POST['acf']['field_64dcf227615d1'];
        
        if ($title) {
            $post_data = [
                'ID'         => $post_id,
                'post_title' => $title,
            ];

            $user_id = wp_insert_user([
                'user_login' => $username,
                'user_pass' => $password,
                'user_email' => $email,
                'role' => 'contributor',
            ]);
            
            remove_action('save_post', 'set_custom_title_from_acf_providers');
            wp_update_post($post_data);
            add_action('save_post', 'set_custom_title_from_acf_providers');
        }
    }
}
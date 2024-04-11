<?php

add_action('save_post', 'set_custom_title_from_acf_post');
add_action('save_post', 'set_custom_title_from_acf_request');
add_action('template_redirect', 'page_verify_post');
add_action('template_redirect', 'page_verify_request');

function page_verify_post() {
    if(is_page('publicar-servicio')) {
        add_action('acf/save_post', 'custom_acf_form_submission_post', 1);
    }
}

function custom_acf_form_submission_post($post_id) {
    if($post_id && isset($_POST['acf'])){

        $current_user = wp_get_current_user();
        $user_email = $current_user->user_email;

        $title = $_POST['acf']['field_64e3cd0cbe4b2'] . " , " . $user_email;

        if(!empty($title)) {
            $post_data = [
                'ID'        => $post_id,
                'post_title'=> $title,
            ];
            wp_update_post($post_data);
        }
    }
}

function set_custom_title_from_acf_post($post_id) {    
    if ('publicar-servicio' === get_post_type($post_id)) {
        
        $current_user = wp_get_current_user();
        $user_email = $current_user->user_email;

        $title = $_POST['acf']['field_64e3cd0cbe4b2'] . " , " . $user_email;

        if ($title) {
            $post_data = [
                'ID'         => $post_id,
                'post_title' => $title,
            ];
            
            remove_action('save_post', 'set_custom_title_from_acf_post');
            wp_update_post($post_data);
            add_action('save_post', 'set_custom_title_from_acf_post');
        }
    }
}

function page_verify_request() {
    if(is_page('solicitar-servicio')) {
        add_action('acf/save_post', 'custom_acf_form_submission_request', 1);
    }
}

function set_custom_title_from_acf_request($post_id) {    
    if ('solicitar-servicio' === get_post_type($post_id)) {
        
        $current_user = wp_get_current_user();
        $user_email = $current_user->user_email;

        $title = $_POST['acf']['field_64dfa4132490a'] . " , " . $user_email;
        
        if ($title) {
            $post_data = [
                'ID'         => $post_id,
                'post_title' => $title,
            ];
            
            remove_action('save_post', 'set_custom_title_from_acf_request');
            wp_update_post($post_data);
            add_action('save_post', 'set_custom_title_from_acf_request');
        }
    }
}

function custom_acf_form_submission_request($post_id) {
    if($post_id && isset($_POST['acf'])){

        $current_user = wp_get_current_user();
        $user_email = $current_user->user_email;

        $title = $_POST['acf']['field_64dfa4132490a'] . " , " . $user_email;

        if(!empty($title)) {
            $post_data = [
                'ID'        => $post_id,
                'post_title'=> $title,
            ];
            wp_update_post($post_data);
        }
    }
}


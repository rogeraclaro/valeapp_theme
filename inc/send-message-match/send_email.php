<?php

function send_email_user() {
    $providerId = $_POST['providerID'];
    $publish = $_POST['publishID'];
    $request = $_POST['requestID'];
    $prueba2 = get_field('field_64dcf1b4615ce', $providerId);
    $prueba3 = get_field('field_64dcf1f6615cf', $providerId);
    $prueba4 = get_field('field_64dcf20f615d0', $providerId);
    $email = $prueba4;
    $subject = "ValeApp";
    $message = "Hola (Nom del Proveïdor) Fes estat seleccionat per (Nom del client) per executar la tasca de (Nom de la tasca), el dia (Dia de la tasca), Si us plau ingressa a la pàgina per confirmar. VALEAPP";
    
    if($providerId){
        echo("Se le ha notificado al Profesional por correo, pronto se contactara contigo! " . $prueba3 . " " . $prueba2 . "Y el correo es: " . $prueba4 . " Y el ID del post del proveedor es el siguiente: " . $publish . "             Y el id del post por parte del cliente es el siguiente: " . $request);

        wp_mail($email, $subject, $message);
    }
    else{
        echo("No sirve " . $providerId);
    }
    wp_die();
}

add_action("wp_ajax_send_email_user", "send_email_user");
add_action("wp_ajax_nopriv_send_email_user", "send_email_user");

?>
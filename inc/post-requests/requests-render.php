<?php
function render_stars($stars_name, $star_value)
{
    for ($i = 0; $i < 5; $i++) {
        $current_star_value = 'star' . $i + 1;
?>
        <li><label><input type="radio" name="<?php echo $stars_name; ?>" value="<?php echo $current_star_value; ?>" <?php checked($star_value, $current_star_value); ?>>
                <?php echo $current_star_value; ?>
            </label></li>
    <?php
    }
}
function render_requests($requests, $perms)
{
    foreach ($requests as $request) {

        $profile_photo = isset($request['profile_photo']) ? $request['profile_photo'] : null;
        $profile_name = isset($request['profile']['name']) ? esc_html($request['profile']['name']) : 'Nombre no disponible';
        $profile_id = isset($request['profile']['user_id']) ? esc_html($request['profile']['user_id']) : '';
        // $solicitud_title = isset($request['solicitud']->post_title) ? esc_html($request['solicitud']->post_title) : 'Título no disponible';
        $solicitud_title = isset($request['title']) ? esc_html($request['title']) : 'Título no disponible';
        $solicitud_id = isset($request['solicitud']->ID) ? ($request['solicitud']->ID) : 0;
        $profile_photo_url = $profile_photo && isset($profile_photo['url']) ? esc_url($profile_photo['url']) : get_stylesheet_directory_uri() . '/img/valeapp-providers-ervice-user.png';
        $btns = "";
        $footer_options = "";

        $rate_form_id = 'showRateForm-' . $solicitud_id;
        $rate_form_star_name = 'showRateForm-' . $solicitud_id . '-star';
        if ($perms) {
            //BUTTONS
            if (isset($perms['confirm'])) {
                $btns = $btns . '<button class="JodRequests-accept" type="submit" name="action" value="request_confirm_submit">
                        <span>
                            Confirmar
                        </span>
                    </button>';
            }
            if (isset($perms['delete'])) {
                $btns = $btns . '<button class="JodRequests-deny" type="submit" name="action" value="request_denied_submit">
                        <span>
                            Denegar
                        </span>
                    </button>';
            }
            if (isset($perms['request'])) {
                $btns = $btns . '<button class="JodRequests-accept" type="submit" name="action" value="request_create_submit">
                <span>
                Aceptar
                </span>
                </button>';
            }
            if (isset($perms['finish'])) {
                $btns = $btns . '<button class="JodRequests-accept" type="submit" name="action" value="request_finish_submit">
                <span>
                Finalizar
                </span>
                </button>';
            }
            if (isset($perms['cancel'])) {
                $btns = $btns . '<button class="JodRequests-deny" type="submit" name="action" value="request_cancel_submit">
                        <span>
                            Cancelar
                        </span>
                    </button>';
            }
            //FOOTER
            if (isset($perms['edit'])) {
                $footer_options = $footer_options . '<a type="button" href="/solicitar-servicio/' . $solicitud_id . '" class="JodRequests-item-footerBtn">
                    Editar reserva <img class="img-fluid"
                        src="' . get_stylesheet_directory_uri() . '/img/valeapp-providers-chevron-faq.png"
                        alt="ValeApp">
                </a>';
            }
            if (isset($perms['watch_detail']) && isset($request['detail_link'])) {
                $footer_options = $footer_options . '<a type="button" href="' . $request['detail_link'] . '" class="JodRequests-item-footerBtn">
                    Ver detalles <img class="img-fluid"
                        src="' . get_stylesheet_directory_uri() . '/img/valeapp-providers-chevron-faq.png"
                        alt="ValeApp">
                </a>';
            }
            if (isset($perms['repeat'])) {
                $footer_options = $footer_options . '<button type="submit" class="contracted-tasks-item-footerBtn contracted-tasks-item-footerBtn-border" name="action" value="request_duplicate_submit">
                Volver a reservar <img class="img-fluid"
                src="' . get_stylesheet_directory_uri() . '/img/valeapp-providers-chevron-faq.png"
                alt="ValeApp">
                </button>';
            }
        }

    ?>
        <div class="JodRequests-item">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="JodRequests-item-header">
                    <img class="img-fluid" src="<?php echo $profile_photo_url; ?>" alt="<?php echo esc_attr($profile_photo['alt'] ?? 'Foto del proveedor'); ?>">
                    <p class="JodRequests-item-header-text">
                        <?php echo $solicitud_title; ?>
                        <span><?php echo $profile_name; ?></span>
                    </p>
                </div>
                <div class="JodRequests-item-body">
                    <div class="JodRequests-item-body-item">
                        <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/ubication-icon.svg" alt="JodRequests-item-body-itemIcon">
                        <span class="JodRequests-item-body-itemName">
                            <?php echo esc_html($request['ubicacion']['direccion'] ?? 'Dirección no disponible'); ?>
                        </span>
                    </div>
                    <div class="JodRequests-item-body-item">
                        <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/calendar-icon.svg" alt="JodRequests-item-body-itemIcon">
                        <span class="JodRequests-item-body-itemName">
                            <?php echo esc_html($request['date']['fecha_de_tarea'] ?? 'Fecha no disponible'); ?>
                        </span>
                    </div>
                    <div class="JodRequests-item-body-item p-0">
                        <img class="JodRequests-item-body-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/clock-icon.svg" alt="JodRequests-item-body-itemIcon">
                        <span class="JodRequests-item-body-itemName">
                            <?php echo esc_html($request['date']['hora_de_inicio'] ?? '--'); ?>
                            -
                            <?php echo esc_html($request['date']['hora_finalizacion'] ?? '--'); ?>
                        </span>
                    </div>
                    <div class="JodRequests-item-body-itemPrice">
                        <?php echo esc_html($request['prices']['precio_maximo_por_hora'] ?? 'Precio no disponible'); ?>
                        <span>€/h</span>
                    </div>
                    <div class="JodRequests-item-body-itemState">
                        <?php echo esc_html(ucfirst($request['status'] ?? 'estado no disponible')); ?>
                    </div>
                    <div class="JodRequests-btnContent">
                        <?php echo $btns; ?>
                    </div>
                </div>
                <div class="JodRequests-item-footer">
                    <?php echo $footer_options; ?>
                    <?php
                    if (isset($perms['appreciate'])) {
                    ?>
                        <button type="button" class="contracted-tasks-item-footerBtn" data-bs-toggle="collapse" data-bs-target="#<?php echo $rate_form_id; ?>" aria-expanded="false" aria-controls="<?php echo $rate_form_id; ?>">
                            Valorar <img class="img-fluid"
                                src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                                alt="ValeApp">
                        </button>
                        <div class="collapse" id="<?php echo $rate_form_id ?>">
                            <div class="card card-body">
                                <div class="acf-field acf-field-radio radioAsStars" data-name="star_filter" data-type="radio" data-key="<?php echo $rate_form_star_name; ?>">
                                    <div class="acf-input">
                                        <ul class="acf-radio-list acf-bl px-0" data-allow_null="0" data-other_choice="0">
                                            <?php render_stars($rate_form_star_name, esc_html($request['rate']['provider_rate'])) ?>
                                            <!-- <li><label><input type="radio" name="<?php echo $rate_form_star_name; ?>" value="star1" checked="checked">star1</label></li>
                                            <li><label><input type="radio" name="<?php echo $rate_form_star_name; ?>" value="star2">star2</label></li>
                                            <li><label><input type="radio" name="<?php echo $rate_form_star_name; ?>" value="star3">star3</label></li>
                                            <li><label><input type="radio" name="<?php echo $rate_form_star_name; ?>" value="star4">star4</label></li>
                                            <li><label><input type="radio" name="<?php echo $rate_form_star_name; ?>" value="star5">star5</label></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <textarea name="provider_rate_text" placeholder="Comentanos un poco sobre tu experiencia..." rows="8" maxlength="120"><?php echo esc_html($request['rate']['provider_rate_text']) ?></textarea>
                                <button class="JodRequests-accept my-2 w-auto" type="submit" name="action" value="request_appreciate_submit">
                                    <span>
                                        Valorar
                                    </span>
                                </button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if (isset($perms['message'])) {
                        echo do_shortcode('[better_messages_pm_button text="Contáctalo" user_id="' . $profile_id . '" message="Hola! Mucho Gusto!" target="_self" class="JodRequests-item-footerBtn" fast_start="0" url_only="0"]');
                    }
                    ?>
                    <a type="button" href="https://valeapp.com/ajuda/" class="JodRequests-item-footerBtn">
                        ¿Necesitas ayuda? <img class="img-fluid"
                            src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                            alt="ValeApp">
                    </a>

                    <!-- <input type="hidden" name="action" value="change_request_status"> -->
                    <input type="hidden" name="stars_name" value="<?php echo $rate_form_star_name; ?>">
                    <input type="hidden" name="title" value="<?php echo $solicitud_title; ?>">
                    <input type="hidden" name="post_id" value="<?php echo $request['id']; ?>">
                    <input type="hidden" name="solicitud_id" value="<?php echo $solicitud_id; ?>">
                    <input type="hidden" name="new_status" value="confirmado">
                    <?php wp_nonce_field('requests_action', 'requests_nonce'); ?>
                </div>

            </form>
        </div>
    <?php
    }
}

function get_requests_form_validation()
{
    ?>
    <script>
        const submitButtons = document.querySelectorAll('button[type="submit"]');

        submitButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                if (!button.disabled) {
                    // button.disabled = true;
                    button.style.pointerEvents = "none";
                }
            });
        });
    </script>
<?php
}

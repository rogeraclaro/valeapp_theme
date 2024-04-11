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
?>
    <div class="ConfirmAndPay">
        <div class="ConfirmAndPay-card">
            <div class="ConfirmAndPay-cardImg">
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="ValeApp">
                <img class="ConfirmAndPay-cardIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-profile-check.png" alt="ValeApp-Check">
            </div>
            <div class="ConfirmAndPay-cardText">
                <span class="ConfirmAndPay-cardName">María</span>
                <span class="ConfirmAndPay-cardProfession">Clases de tenis</span>
            </div>
        </div>
        <hr />
        <div class="ConfirmAndPay-section">
            <div class="ConfirmAndPay-sectionHeader">
                <span class="ConfirmAndPay-sectionHeader-title">¿Cómo funciona?</span>
            </div>
            <div class="ConfirmAndPay-sectionBody ConfirmAndPay-sectionBody-text">
                Estás realizando una solicitud de <br/> reserva. La oferta caducará en dos<br/> semanas en caso de que no confirmes<br/> el servicio.
            </div>
        </div>
        <hr />
        <div class="ConfirmAndPay-section">
            <div class="ConfirmAndPay-sectionHeader">
                <span class="ConfirmAndPay-sectionHeader-title">Ubicación</span>
                <img class="ConfirmAndPay-sectionHeader-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/edit-icon.svg" alt="ConfirmAndPay-sectionHeader-icon">
            </div>
            <div class="ConfirmAndPay-sectionBody">
                <div class="ConfirmAndPay-sectionBody-item">
                    <img class="ConfirmAndPay-sectionBody-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/ubication-icon.svg" alt="ConfirmAndPay-sectionBody-itemIcon">
                    <span class="ConfirmAndPay-sectionBody-itemName">
                        C/ Teodora Lamadrid, Local
                    </span>
                </div>
            </div>
        </div>
        <hr />
        <div class="ConfirmAndPay-section">
            <div class="ConfirmAndPay-sectionHeader">
                <span class="ConfirmAndPay-sectionHeader-title">Fecha y hora</span>
                <img class="ConfirmAndPay-sectionHeader-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/edit-icon.svg" alt="ConfirmAndPay-sectionHeader-icon">
            </div>
            <div class="ConfirmAndPay-sectionBody">
                <div class="ConfirmAndPay-sectionBody-item">
                <img class="ConfirmAndPay-sectionBody-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/ubication-icon.svg" alt="ConfirmAndPay-sectionBody-itemIcon">
                    <span class="ConfirmAndPay-sectionBody-itemName">
                        Miércoles, 29 de marzo
                    </span>
                </div>
                <div class="ConfirmAndPay-sectionBody-item ConfirmAndPay-sectionBody-item-timeline">
                    <span class="ConfirmAndPay-sectionBody-itemStart">
                        Inicio: 11:15
                    </span>
                    <span class="ConfirmAndPay-sectionBody-itemEnd">
                        Fin: 12:15
                    </span>
                </div>
                <div class="ConfirmAndPay-sectionBody-item">
                    <img class="ConfirmAndPay-sectionBody-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/clock-icon.svg" alt="ConfirmAndPay-sectionBody-itemIcon">
                    <span class="ConfirmAndPay-sectionBody-itemName">
                        (Duración: 1h)
                    </span>
                </div>
            </div>
        </div>
        <hr />
        <div class="ConfirmAndPay-section">
            <div class="ConfirmAndPay-sectionHeader">
                <span class="ConfirmAndPay-sectionHeader-title">Detalles de tu tarea</span>
                <img class="ConfirmAndPay-sectionHeader-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/edit-icon.svg" alt="ConfirmAndPay-sectionHeader-icon">
            </div>
            <div class="ConfirmAndPay-sectionBody ConfirmAndPay-sectionBody-text">
                Hola Maria, necesito que traigas todo el<br /> material (pelotas, raquetas...ya que no<br /> dispongo).
            </div>
        </div>
        <hr />
        <div class="ConfirmAndPay-section">
            <div class="ConfirmAndPay-sectionHeader">
                <span class="ConfirmAndPay-sectionHeader-title">Detalles del precio</span>
            </div>
            <div class="ConfirmAndPay-sectionBody">
                <div class="ConfirmAndPay-sectionBody-item ConfirmAndPay-sectionBody-item-list">
                    <span class="ConfirmAndPay-sectionBody-itemName">
                        Clases de tenis
                    </span>
                    <span class="ConfirmAndPay-sectionBody-itemValue">
                        20,00 &euro;/h
                    </span>
                </div>
                <div class="ConfirmAndPay-sectionBody-item ConfirmAndPay-sectionBody-item-list">
                    <span class="ConfirmAndPay-sectionBody-itemName">
                        Servicio puntual
                    </span>
                    <span class="ConfirmAndPay-sectionBody-itemValue"></span>
                </div>
                <div class="ConfirmAndPay-sectionBody-item ConfirmAndPay-sectionBody-item-list">
                    <span class="ConfirmAndPay-sectionBody-itemName">
                        Horas contratadas
                    </span>
                    <span class="ConfirmAndPay-sectionBody-itemValue">
                        1h
                    </span>
                </div>
                <hr />
                <div class="ConfirmAndPay-sectionBody-item ConfirmAndPay-sectionBody-item-list ConfirmAndPay-sectionBody-item-total">
                    <span class="ConfirmAndPay-sectionBody-itemName">
                        Total
                    </span>
                    <span class="ConfirmAndPay-sectionBody-itemValue">
                        20,00 &euro;
                    </span>
                </div>
            </div>
        </div>
        <a class="HomeOffer-btn" href="/profesionales">
            <img class="ConfirmAndPay-btnIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/lock-icon.svg" alt="ConfirmAndPay-sectionHeader-icon">
            Confirmar reserva
        </a>
        <div class="ConfirmAndPay-section">
            <div class="ConfirmAndPay-sectionHeader">
                <span class="ConfirmAndPay-sectionHeader-title">Política de cancelación</span>
            </div>
            <div class="ConfirmAndPay-sectionBody ConfirmAndPay-sectionBody-list">
                <div class="ConfirmAndPay-sectionBody-item ConfirmAndPay-sectionBody-item-list ConfirmAndPay-sectionBody-item-listHeader">
                    <span class="ConfirmAndPay-sectionBody-itemName">
                        Antelación al inicio
                    </span>
                    <span class="ConfirmAndPay-sectionBody-itemValue">
                        % reembolso
                    </span>
                </div>
                <div class="ConfirmAndPay-sectionBody-item ConfirmAndPay-sectionBody-item-list">
                    <span class="ConfirmAndPay-sectionBody-itemName">
                        No show
                    </span>
                    <span class="ConfirmAndPay-sectionBody-itemValue">
                        0% del importe
                    </span>
                </div>
                <div class="ConfirmAndPay-sectionBody-item ConfirmAndPay-sectionBody-item-list">
                    <span class="ConfirmAndPay-sectionBody-itemName">
                        Menos de 24h
                    </span>
                    <span class="ConfirmAndPay-sectionBody-itemValue">
                        50% del importe
                    </span>
                </div>
                <div class="ConfirmAndPay-sectionBody-item ConfirmAndPay-sectionBody-item-list">
                    <span class="ConfirmAndPay-sectionBody-itemName">
                        Más de 24h 
                    </span>
                    <span class="ConfirmAndPay-sectionBody-itemValue">
                        100% del importe 
                    </span>
                </div>
            </div>
        </div>
        <div class="WhyVale">
            <div class="item">
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-why1.png" alt="valeapp">
                <h3 class="title2">Compromiso</h3>
                <p class="text">
                Garantizamos que los profesionales cumplan con nuestras condiciones y proporcionen un servicio de calidad en el plazo acordado.
                </p>
            </div>
            <div class="item">
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-why2.png" alt="valeapp">
                <h3 class="title2">Tranquilidad</h3>
                <p class="text">
                    Tu pago estará seguro y protegido hasta que se complete el trabajo satisfactoriamente con el profesional.
                </p>
            </div>
            <div class="item">
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-why3.png" alt="valeapp">
                <h3 class="title2">Atención personalizada</h3>
                <p class="text">
                    Soporte 365 días para resolver cualquier duda o problema que puedas tener.
                </p>
            </div>
        </div>
    </div>
<?php
get_footer();
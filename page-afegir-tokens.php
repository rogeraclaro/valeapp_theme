<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 * @package ValeApp
 */

get_header();
?>
<section class="section2 servicio-generica">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><?php breadcrumb_my_account(); ?></li>
                        <li class="breadcrumb-item"><a href="#">El meu saldo</a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <h2 class="title">
                    Afegir Saldo
                </h2>
            </div>
        </div>
    </div>
</section>
<div class="AddTokens">
    <div class="AddTokens-paymentMethod">
        <div class="AddTokens-title">
            Mètode de Dipòsit
        </div>
        <div class="AddTokens-paymentMethod-selectedMethod">
            <span class="AddTokens-paymentMethod-optionIcon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-agregar-tokens/visa-icon.png" alt="visa-icon">
            </span>
            Targeta Visa
            <button class="AddTokens-paymentMethod-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <span class="AddTokens-paymentMethod-btnIcon">
                    <img class="ConfirmAndPay-sectionHeader-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-agregar-tokens/paymentMethod-collapseIcon.jpg" alt="ConfirmAndPay-sectionHeader-icon">
                </span>
                Canviar
            </button>
        </div>
        <div class="collapse AddTokens-paymentMethod-options" id="collapseExample">
            <button class="AddTokens-paymentMethod-option" type="button">
                <span class="AddTokens-paymentMethod-optionIcon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-agregar-tokens/visa-icon.png" alt="visa-icon">
                </span>
                Targeta Visa
            </button>
            <button class="AddTokens-paymentMethod-option" type="button">
                <span class="AddTokens-paymentMethod-optionIcon">
                    <img class="ConfirmAndPay-sectionHeader-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-agregar-tokens/paypal-icon.png" alt="ConfirmAndPay-sectionHeader-icon">
                </span>
                Paypal
            </button>
        </div>
    </div>
    <div class="AddTokens-info">
        <div class="AddTokens-title">
            Introdueix l'import i fes clic a "Dipositar"
        </div>
        <div class="AddTokens-description">
        Un cop introduït l'import, se us redirigirà a una pàgina<br/> segura del lloc web per introduir la informació bancària.
        </div>
    </div>
    <div class="AddTokens-details">
        <div class="AddTokens-title">
            Detalls del pagament
            <div class="AddTokens-titleActions">
                <button type="button">
                    <img class="ConfirmAndPay-sectionHeader-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-agregar-tokens/edit-icon-green.jpg" alt="ConfirmAndPay-sectionHeader-icon">
                </button>
                <button type="button">
                    <img class="cards-header-deleteIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/delete-icon.svg" alt="ValeApp-TrashIcon">
                </button>
            </div>
        </div>
        <img class="AddTokens-detailsImg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-agregar-tokens/credit-card.jpg" alt="ValeApp-CreditCard" />
    </div>
    <!-- <div class="AddTokens-input">
        <span>Cantidad del depósito:</span>
        <input type="number" />
    </div> -->
    <div class="AddTokens-mentions">
        <p class="AddTokens-titleMention">
            1€ = 1 Vale.
        </p>
        <p class="AddTokens-text">
        En aquesta plataforma, l'equivalència és directa: 1 euro és igual a 1 Vale. A la secció "El meu Saldo," tindràs una visualització clara de la quantitat de vales disponibles per utilitzar en diversos serveis després de realitzar el teu dipòsit.        
        </p>
        <!-- <button class="AddTokens-btn">
           Confirmar
        </button> -->
        <?php echo do_shortcode('[asp_product id="1322"]') ?>
    </div>
</div>

<?php

get_footer();

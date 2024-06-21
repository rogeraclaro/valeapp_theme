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
?>
<?php
function menu_reuse(){
    ?>
    <section class="section7 servicio-generica">
        <div class="container">
			<div class="row">
                <div class="col-12">
                    <div id="accordionCategories" class="accordion accordion-buttons">
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseHome" data-bs-toggle="collapse"
                                    data-bs-target="#collapseHome" aria-expanded="false"
                                    aria-controls="collapseHome">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category1.png" alt="ValeApp">
                                    Hogar
                                </button>
                            </h2>
                            <div id="collapseHome" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="/categories/fontaneria">Fontanería</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/limpieza">Limpieza</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/pintura">Pintura</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/mudanza">Mudanza</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/obras">Obras</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/electricidad">Electricidad</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/montaje-muebles">Montaje muebles</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/mecanico">Mecánico</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/soluciones-eco">Soluciones ECO</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseLearn" data-bs-toggle="collapse"
                                    data-bs-target="#collapseLearn" aria-expanded="false"
                                    aria-controls="collapseLearn">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category2.png" alt="ValeApp">
                                    Aprende
                                </button>
                            </h2>
                            <div id="collapseLearn" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="/categories/idiomas">Idiomas</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/instrumentos">Instrumentos</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/clases-de-repaso">Clases de repaso</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/baile">Baile</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/inversiones">Inversiones</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/pintura">Pintura</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/fotografia">Fotografía</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/gaming">Gaming</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/poker">Póker</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/cocina">Cocina</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseBody" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBody" aria-expanded="false"
                                    aria-controls="collapseBody">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category3-white.svg" alt="ValeApp">
                                    Deporte
                                </button>
                            </h2>
                            <div id="collapseBody" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="/categories/gim">Gim</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/artes-marciales">Artes marciales</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/de-palo">De palo</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/con-balón">Con balón</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/con-raqueta">Con raqueta</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/al-agua">Al agua</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/al-aire">Al aire</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/sobre-ruedas">Sobre ruedas</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseMind" data-bs-toggle="collapse"
                                    data-bs-target="#collapseMind" aria-expanded="false"
                                    aria-controls="collapseMind">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category4.png" alt="ValeApp">
                                    Mente
                                </button>
                            </h2>
                            <div id="collapseMind" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="/categories/coach">Coach</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/psicologia">Psicología</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/tarot">Tarot</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/terapias-de-pareja">Terapias de pareja</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/meditacion">Meditación</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/yoga">Yoga</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/terapias-alternativas">Terapias alternativas</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseTakeCare" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTakeCare" aria-expanded="false"
                                    aria-controls="collapseTakeCare">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category5.png" alt="ValeApp">
                                    Cuidados
                                </button>
                            </h2>
                            <div id="collapseTakeCare" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="/categories/mascotas">Mascotas</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/ninos">Niños</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/personas-mayores">Personas mayores</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/au-pair">Au pair</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/seguridad">Seguridad</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/masajes">Masajes</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/dietas">Dietas</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseBeauty" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBeauty" aria-expanded="false"
                                    aria-controls="collapseBeauty">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category6.png" alt="ValeApp">
                                    Belleza
                                </button>
                            </h2>
                            <div id="collapseBeauty" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="/categories/peluqueria">Peluquería</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/tratamientos">Tratamientos</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/unas">Uñas</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/maquillaje">Maquillaje</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/depilacion">Depilación</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/dental">Dental</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseContract" data-bs-toggle="collapse"
                                    data-bs-target="#collapseContract" aria-expanded="false"
                                    aria-controls="collapseContract">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category7.png" alt="ValeApp">
                                    Contrata
                                </button>
                            </h2>
                            <div id="collapseContract" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="/categories/publicidad">Publicidad</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/desarrollo-y-app">Desarrollo y app</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/analisis-de-datos">Análisis de datos</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/legal">Legal</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/traducciones">Traducciones</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/redes-sociales">Redes sociales</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/foto-video">Foto/Video</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/hosteleria">Hostelería</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/guia-turistico">Guía Turístico</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/agente-viajes">Agente de Viajes</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/influencers">Influencers</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseRent" data-bs-toggle="collapse"
                                    data-bs-target="#collapseRent" aria-expanded="false"
                                    aria-controls="collapseRent">
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category8.png" alt="ValeApp">
                                    Comparte
                                </button>
                            </h2>
                            <div id="collapseRent" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="/categories/espacio">Espacio</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/estudio">Estudio</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/consulta">Consulta</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/equipos">Equipo</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/material">Material</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/pista">Pista</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 id="headingPoints" class="accordion-header">
                                <button type="button" class="accordion-button event collapsed"
                                    data-label="collapseOther" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOther" aria-expanded="false"
                                    aria-controls="collapseOther">
                                    <img class="icon iconEventos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category9-green.svg" alt="ValeApp">
                                    Eventos
                                </button>
                            </h2>
                            <div id="collapseOther" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                            <a class="event" href="/categories/empresas">Empresas</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/bodas">Bodas</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/despedidas-o-cumpleaños">Despedidas / cumpleaños</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/dj-o-musica-en-vivo">DJ / Musica en vivo</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/promocionales">Promocionales</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categories/sin-animo-de-lucro">Sin ánimo de lucro</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>
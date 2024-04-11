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
                                            <a class="event" href="/categoria/fontaneria">Fontanería</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/limpieza">Limpieza</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/pintura">Pintura</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/mudanza">Mudanza</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/obras">Obras</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/electricidad">Electricidad</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/montaje-muebles">Montaje muebles</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/mecanico">Mecánico</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/soluciones-eco">Soluciones ECO</a>
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
                                            <a class="event" href="/categoria/idiomas">Idiomas</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/instrumentos">Instrumentos</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/clases-de-repaso">Clases de repaso</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/baile">Baile</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/inversiones">Inversiones</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/pintura">Pintura</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/fotografia">Fotografía</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/gaming">Gaming</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/poker">Póker</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/cocina">Cocina</a>
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
                                            <a class="event" href="/categoria/gim">Gim</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/artes-marciales">Artes marciales</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/de-palo">De palo</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/con-balón">Con balón</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/con-raqueta">Con raqueta</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/al-agua">Al agua</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/al-aire">Al aire</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/sobre-ruedas">Sobre ruedas</a>
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
                                            <a class="event" href="/categoria/coach">Coach</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/psicologia">Psicología</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/tarot">Tarot</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/terapias-de-pareja">Terapias de pareja</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/meditacion">Meditación</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/yoga">Yoga</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/terapias-alternativas">Terapias alternativas</a>
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
                                            <a class="event" href="/categoria/mascotas">Mascotas</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/ninos">Niños</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/personas-mayores">Personas mayores</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/au-pair">Au pair</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/seguridad">Seguridad</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/masajes">Masajes</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/dietas">Dietas</a>
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
                                            <a class="event" href="/categoria/peluqueria">Peluquería</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/tratamientos">Tratamientos</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/unas">Uñas</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/maquillaje">Maquillaje</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/depilacion">Depilación</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/dental">Dental</a>
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
                                            <a class="event" href="/categoria/publicidad">Publicidad</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/desarrollo-y-app">Desarrollo y app</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/analisis-de-datos">Análisis de datos</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/legal">Legal</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/traducciones">Traducciones</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/redes-sociales">Redes sociales</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/foto-video">Foto/Video</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/hosteleria">Hostelería</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/guia-turistico">Guía Turístico</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/agente-viajes">Agente de Viajes</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/influencers">Influencers</a>
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
                                            <a class="event" href="/categoria/espacio">Espacio</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/estudio">Estudio</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/consulta">Consulta</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/equipos">Equipo</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/material">Material</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/pista">Pista</a>
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
                                            <a class="event" href="/categoria/empresas">Empresas</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/bodas">Bodas</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/despedidas-o-cumpleaños">Despedidas / cumpleaños</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/dj-o-musica-en-vivo">DJ / Musica en vivo</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/promocionales">Promocionales</a>
                                        </li>
                                        <li class="item">
                                            <a class="event" href="/categoria/sin-animo-de-lucro">Sin ánimo de lucro</a>
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
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
                                    Llar
                                </button>
                            </h2>
                            <div id="collapseHome" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                        <a href="/categories/lampista" class="event">Lampista</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/neteja" class="event">Neteja</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/pintar_cases" class="event">Pintura</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/mudanca" class="event">Mudança</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/obres" class="event">Obres</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/electricitat" class="event">Electricitat</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/muntatge_mobles" class="event">Muntatge mobles</a>
                                        </li>
                                        <li class="item">
                                        <a href="/categories/mecanic" class="event">Mecànic</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/solucions_eco" class="event">Solucions ECO</a>
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
                                    Aprèn
                                </button>
                            </h2>
                            <div id="collapseLearn" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
                                        <a href="/categories/idiomes" class="event">Idiomes</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/instruments" class="event">Instruments</a>
                                       </li>
                                        <li class="item">
										<a href="/categories/classes_de_repas" class="event">Clases de repàs</a>
                                        </li>
                                        <li class="item">
                                        <a href="/categories/ball" class="event">Ball</a>
                                         </li>
                                        <li class="item">
                                        <a href="/categories/inversions" class="event">Inversions</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/pintura" class="event">Pintura</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/fotografia" class="event">Fotografia</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/jocs" class="event">Jocs</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/poquer" class="event">Pòquer</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/cuina" class="event">Cuina</a>
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
                                    <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-category3.png" alt="ValeApp">
                                    Esport
                                </button>
                            </h2>
                            <div id="collapseBody" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
										<a href="/categories/gimnas" class="event">Gimnàs</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/arts_marcials" class="event">Arts marcials</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/amb_pilota" class="event">Amb pilota</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/amb_raqueta" class="event">Amb raqueta</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/al_aigua" class="event">A l'aigua</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/al_aire" class="event">A l'aire</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/sobre_rodes" class="event">Sobre rodes</a>
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
                                    Ment
                                </button>
                            </h2>
                            <div id="collapseMind" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
										<a href="/categories/entrenador" class="event">Coach</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/psicologia" class="event">Psicologia</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/tarot" class="event">Tarot</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/terapies_de_parella" class="event">Teràpies de parella</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/meditacio" class="event">Meditació</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/ioga" class="event">Ioga</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/terapies_alternatives" class="event">Teràpies alternatives</a>
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
                                    Cures
                                </button>
                            </h2>
                            <div id="collapseTakeCare" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
										<a href="/categories/mascotes" class="event">Mascotes</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/nens" class="event">Nens</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/gent_gran" class="event">Gent gran</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/au_pair" class="event">Au pair</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/seguretat" class="event">Seguretat</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/massatges" class="event">Massatges</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/dietes" class="event">Dietes</a>
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
                                    Bellesa
                                </button>
                            </h2>
                            <div id="collapseBeauty" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
										<a href="/categories/perruqueria" class="event">Perruqueria</a>
                                       </li>
                                        <li class="item">
                                        <a href="/categories/tractaments" class="event">Tractaments</a> 
                                        </li>
                                        <li class="item">
										<a href="/categories/ungles" class="event">Ungles</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/maquillatge" class="event">Maquillatge</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/depilacio" class="event">Depilació</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/dental" class="event">Dental</a>   
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
                                    Contracta
                                </button>
                            </h2>
                            <div id="collapseContract" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
										<a href="/categories/publicitat" class="event">Publicitat</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/desenvolupament_i_app" class="event">Desenvolupament i app</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/analisi_de_dades" class="event">Anàlisi de dades</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/legal" class="event">Legal</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/traduccions" class="event">Traduccions</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/xarxes_socials" class="event">Xarxes socials</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/foto_o_video" class="event">Foto / Video</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/hostaleria" class="event">Hostaleria</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/guia_turistic" class="event">Guia turistic</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/agent_viatges" class="event">Agent viatges</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/influencers" class="event">Influencers</a>
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
                                    Comparteix
                                </button>
                            </h2>
                            <div id="collapseRent" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
										<a href="/categories/espai" class="event">Espai</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/estudi" class="event">Estudi</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/consulta" class="event">Consulta</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/equips" class="event">Equips</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/material" class="event">Material</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/pista" class="event">Pista</a>
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
                                    Esdeveniments
                                </button>
                            </h2>
                            <div id="collapseOther" class="accordion-collapse collapse" aria-labelledby="headingPoints"
                                data-bs-parent="#accordionfqa">
                                <div class="accordion-body">
                                    <ul class="list">
                                        <li class="item">
										<a href="/categories/empreses" class="event">Empreses</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/noces" class="event">Noces</a>
                                        </li>
                                        <li class="item">
										<a href="/categories/comiats_o_anniversari" class="event">Comiats / anniversari</a>
                                       </li>
                                        <li class="item">
										<a href="/categories/dj_o_musica_en_viu" class="event">DJ / Musica en viu</a>
                                         </li>
                                        <li class="item">
										<a href="/categories/promocionals" class="event">Promocionals</a>
x                                        </li>
                                        <li class="item">
										<a href="/categories/sense_anim_de_lucre" class="event">Sense ànim de lucre</a>
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
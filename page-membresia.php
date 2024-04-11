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

<section class="Membership">
      <h2 class="Membership-title">
        Guanya diners fent allò<br class="xs-br" />
        que més t'agrada.
      </h2>
      <img
        class="Membership-image"
        src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-HomeOffer.png"
        alt="valeapp"
      />
      <div class="Membership-content">
        <div class="Membership-item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-item1.png" alt="valeapp" />
          <h3 class="Membership-item-title">
            Registra't i ofereix els teus serveis
          </h3>
          <p class="Membership-item-text">
            Lorem ipsum dolor sit amet <br class="xs-br" />
            consectetur adipisicing elit, sed do <br class="xs-br" />
            eiusmod tempor incididunt ut labore.
          </p>
        </div>
        <div class="Membership-item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-item2.png" alt="valeapp" />
          <h3 class="Membership-item-title">Comença a rebre tasques</h3>
          <p class="Membership-item-text">
            Lorem ipsum dolor sit amet <br class="xs-br" />
            consectetur adipisicing elit, sed do <br class="xs-br" />
            eiusmod tempor incididunt ut labore.
          </p>
        </div>
        <div class="Membership-item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-item3.png" alt="valeapp" />
          <h3 class="Membership-item-title">Realitza els serveis</h3>
          <p class="Membership-item-text">
            Lorem ipsum dolor sit amet <br class="xs-br" />
            consectetur adipisicing elit, sed do <br class="xs-br" />
            eiusmod tempor incididunt ut labore.
          </p>
        </div>
        <div class="Membership-item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-item4.png" alt="valeapp" />
          <h3 class="Membership-item-title">Guanya diners</h3>
          <p class="Membership-item-text">
            Lorem ipsum dolor sit amet <br class="xs-br" />
            consectetur adipisicing elit, sed do.
          </p>
        </div>
      </div>
      <div class="Membership-frequency">
        <h2 class="Membership-frequency-title">Comença ara mateix!</h2>
        <!-- <div class="Membership-frequency-options">
          <p class="Membership-frequency-text">
            Elige la frecuencia de facturación:
          </p>
          <div class="Membership-frequency-content">
            <div class="Membership-frequency-option">
              <input
                type="radio"
                id="Mensual"
                name="frequency"
                value="Mensual"
              />
              <label for="Mensual">Mensual</label><br />
            </div>
            <div class="Membership-frequency-option">
              <input
                type="radio"
                id="Trimestral"
                name="frequency"
                value="Trimestral"
              />
              <label for="Trimestral">Trimestral</label><br />
            </div>
            <div class="Membership-frequency-option">
              <input type="radio" id="Anual" name="frequency" value="Anual" />
              <label for="Anual">Anual</label><br />
            </div>
          </div>
        </div> -->
      </div>
      <div class="Membership-plans">
        <!-- Silver -->
        <div class="Membership-plan">
          <div class="Membership-plan-name">Bàsic</div>
          <div class="Membership-plan-price">10<span>€</span></div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Àrees</p>
            <p class="Membership-plan-value">3</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Treballs</p>
            <p class="Membership-plan-value">25</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Comissió</p>
            <p class="Membership-plan-value">15%</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Treballs sense Comissió</p>
            <p class="Membership-plan-value">3</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Notificació</p>
            <p class="Membership-plan-value">10 minuts</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Informes</p>
            <p class="Membership-plan-value">Mensualment</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Butlletí patrocinat</p>
            <p class="Membership-plan-cancel">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-cancel.png" alt="valeapp" />
            </p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Gold Vale user (10%)</p>
            <p class="Membership-plan-success">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-success.png" alt="valeapp" />
            </p>
          </div>
          <?php echo do_shortcode('[asp_product id="1327"]'); ?>
          <!-- <button class="Membership-plan-button">Continuar</button> -->
        </div>
        <!-- Gold -->
        <div class="Membership-plan">
          <div class="Membership-plan-name">Premium</div>
          <div class="Membership-plan-price">25<span>€</span></div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Àrees</p>
            <p class="Membership-plan-value">10</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Treballs</p>
            <p class="Membership-plan-value">50</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Comissió</p>
            <p class="Membership-plan-value">8,5%</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Treballs sense Comissió</p>
            <p class="Membership-plan-value">5</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Notificació</p>
            <p class="Membership-plan-value">5 minutos</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Informes</p>
            <p class="Membership-plan-value">Quinzenal</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Butlletí patrocinat</p>
            <p class="Membership-plan-cancel">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-cancel.png" alt="valeapp" />
            </p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Gold Vale user (10%)</p>
            <p class="Membership-plan-success">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-success.png" alt="valeapp" />
            </p>
          </div>
          <?php echo do_shortcode('[asp_product id="1328"]'); ?>
        </div>
        <!-- Platinum -->
        <div class="Membership-plan">
          <div class="Membership-plan-name">VIP</div>
          <div class="Membership-plan-price">50<span>€</span></div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Àrees</p>
            <p class="Membership-plan-value">Ilimitado</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Treballs</p>
            <p class="Membership-plan-value">Ilimitado</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Comissió</p>
            <p class="Membership-plan-value">7%</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Treballs sense Comissió</p>
            <p class="Membership-plan-value">8</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Notificació</p>
            <p class="Membership-plan-value">1 minuto</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Informes</p>
            <p class="Membership-plan-value">Setmanal</p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Butlletí patrocinat</p>
            <p class="Membership-plan-success">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-success.png" alt="valeapp" />
            </p>
          </div>
          <div class="Membership-plan-row">
            <p class="Membership-plan-text">Gold Vale user (10%)</p>
            <p class="Membership-plan-success">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-success.png" alt="valeapp" />
            </p>
          </div>
          <?php echo do_shortcode('[asp_product id="1329"]'); ?>
        </div>
      </div>
      <div class="Reviews membership">
        <div id="reviews" class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <h3 class="title">Lorem Ipsum</h3>
              <div class="content">
                <p class="text">
                  Lorem ipsum dolor sit amet, <br class="xs-br" />
                  consectetur adipisicing elit, sed <br class="xs-br" />
                  do eiusmod tempor incididunt <br class="xs-br" />
                  ut labore.
                </p>
                <div class="rate">
                  <span>Lorem</span>
                  <img
                    class="img-fluid rate"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-reviews-rate.png"
                    alt="valeapp"
                  />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <h3 class="title">Lorem Ipsum</h3>
              <div class="content">
                <p class="text">
                  Lorem ipsum sit amet, <br class="xs-br" />
                  consectetur adipisicing elit, set <br class="xs-br" />
                  do eiusmod tempor incididunt <br class="xs-br" />
                  ut labore.
                </p>
                <div class="rate">
                  <span>Lorem</span>
                  <img
                    class="img-fluid rate"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-reviews-rate.png"
                    alt="valeapp"
                  />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <h3 class="title">Lorem Ipsum</h3>
              <div class="content">
                <p class="text">
                  Lorem ipsum sit amet, <br class="xs-br" />
                  consectetur adipisicing elit, set <br class="xs-br" />
                  do eiusmod tempor incididunt <br class="xs-br" />
                  ut labore.
                </p>
                <div class="rate">
                  <span>Lorem</span>
                  <img
                    class="img-fluid rate"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-reviews-rate.png"
                    alt="valeapp"
                  />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <h3 class="title">Lorem Ipsum</h3>
              <div class="content">
                <p class="text">
                  Lorem ipsum sit amet, <br class="xs-br" />
                  consectetur adipisicing elit, set <br class="xs-br" />
                  do eiusmod tempor incididunt <br class="xs-br" />
                  ut labore.
                </p>
                <div class="rate">
                  <span>Lorem</span>
                  <img
                    class="img-fluid rate"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-reviews-rate.png"
                    alt="valeapp"
                  />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <h3 class="title">Lorem Ipsum</h3>
              <div class="content">
                <p class="text">
                  Lorem ipsum sit amet, <br class="xs-br" />
                  consectetur adipisicing elit, set <br class="xs-br" />
                  do eiusmod tempor incididunt <br class="xs-br" />
                  ut labore.
                </p>
                <div class="rate">
                  <span>Lorem</span>
                  <img
                    class="img-fluid rate"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-reviews-rate.png"
                    alt="valeapp"
                  />
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <h3 class="title">Lorem Ipsum</h3>
              <div class="content">
                <p class="text">
                  Lorem ipsum sit amet, <br class="xs-br" />
                  consectetur adipisicing elit, set <br class="xs-br" />
                  do eiusmod tempor incididunt <br class="xs-br" />
                  ut labore.
                </p>
                <div class="rate">
                  <span>Lorem</span>
                  <img
                    class="img-fluid rate"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-reviews-rate.png"
                    alt="valeapp"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="swiper-pagination event"
            data-label="swiper_pagination"
          ></div>
        </div>
      </div>
      <section class="section6 pages" id="page6">
        <div class="container">
          <h2 class="title">Preguntas frecuentes</h2>
          <div id="accordionfqa" class="accordion accordion-buttons">
            <div class="accordion-item">
              <h2 id="headingPoints" class="accordion-header">
                <button
                  type="button"
                  class="accordion-button event collapsed"
                  data-label="collapsefaq"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsefaq"
                  aria-expanded="false"
                  aria-controls="collapsefaq"
                >
                  ¿Lorem ipsum dolor sit amet?
                  <img
                    class="img-fluid"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                    alt="ValeApp"
                  />
                </button>
              </h2>
              <div
                id="collapsefaq"
                class="accordion-collapse collapse"
                aria-labelledby="headingPoints"
                data-bs-parent="#accordionfqa"
              >
                <div class="accordion-body">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur <br class="xs-br" />
                    adipisicing elit, sed do eiusmod tempor <br class="xs-br" />
                    incididunt ut labore et dolore magna aliqua.
                    <br class="xs-br" />
                    Ut enim ad minim veniam, quis nostrud <br class="xs-br" />
                    exercitation ullamco laboris.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 id="headingPoints" class="accordion-header">
                <button
                  type="button"
                  class="accordion-button event collapsed"
                  data-label="collapsefaq2"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsefaq2"
                  aria-expanded="false"
                  aria-controls="collapsefaq2"
                >
                  ¿Lorem ipsum dolor sit amet?
                  <img
                    class="img-fluid"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                    alt="ValeApp"
                  />
                </button>
              </h2>
              <div
                id="collapsefaq2"
                class="accordion-collapse collapse"
                aria-labelledby="headingPoints"
                data-bs-parent="#accordionfqa"
              >
                <div class="accordion-body">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur <br class="xs-br" />
                    adipisicing elit, sed do eiusmod tempor <br class="xs-br" />
                    incididunt ut labore et dolore magna aliqua.
                    <br class="xs-br" />
                    Ut enim ad minim veniam, quis nostrud <br class="xs-br" />
                    exercitation ullamco laboris.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 id="headingPoints" class="accordion-header">
                <button
                  type="button"
                  class="accordion-button event collapsed"
                  data-label="collapsefaq3"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsefaq3"
                  aria-expanded="false"
                  aria-controls="collapsefaq3"
                >
                  ¿Lorem ipsum dolor sit amet?
                  <img
                    class="img-fluid"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                    alt="ValeApp"
                  />
                </button>
              </h2>
              <div
                id="collapsefaq3"
                class="accordion-collapse collapse"
                aria-labelledby="headingPoints"
                data-bs-parent="#accordionfqa"
              >
                <div class="accordion-body">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur <br class="xs-br" />
                    adipisicing elit, sed do eiusmod tempor <br class="xs-br" />
                    incididunt ut labore et dolore magna aliqua.
                    <br class="xs-br" />
                    Ut enim ad minim veniam, quis nostrud <br class="xs-br" />
                    exercitation ullamco laboris.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 id="headingPoints" class="accordion-header">
                <button
                  type="button"
                  class="accordion-button event collapsed"
                  data-label="collapsefaq4"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsefaq4"
                  aria-expanded="false"
                  aria-controls="collapsefaq4"
                >
                  ¿Lorem ipsum dolor sit amet?
                  <img
                    class="img-fluid"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                    alt="ValeApp"
                  />
                </button>
              </h2>
              <div
                id="collapsefaq4"
                class="accordion-collapse collapse"
                aria-labelledby="headingPoints"
                data-bs-parent="#accordionfqa"
              >
                <div class="accordion-body">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur <br class="xs-br" />
                    adipisicing elit, sed do eiusmod tempor <br class="xs-br" />
                    incididunt ut labore et dolore magna aliqua.
                    <br class="xs-br" />
                    Ut enim ad minim veniam, quis nostrud <br class="xs-br" />
                    exercitation ullamco laboris.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 id="headingPoints" class="accordion-header">
                <button
                  type="button"
                  class="accordion-button event collapsed"
                  data-label="collapsefaq5"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsefaq5"
                  aria-expanded="false"
                  aria-controls="collapsefaq5"
                >
                  ¿Lorem ipsum dolor sit amet?
                  <img
                    class="img-fluid"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                    alt="ValeApp"
                  />
                </button>
              </h2>
              <div
                id="collapsefaq5"
                class="accordion-collapse collapse"
                aria-labelledby="headingPoints"
                data-bs-parent="#accordionfqa"
              >
                <div class="accordion-body">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur <br class="xs-br" />
                    adipisicing elit, sed do eiusmod tempor <br class="xs-br" />
                    incididunt ut labore et dolore magna aliqua.
                    <br class="xs-br" />
                    Ut enim ad minim veniam, quis nostrud <br class="xs-br" />
                    exercitation ullamco laboris.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 id="headingPoints" class="accordion-header">
                <button
                  type="button"
                  class="accordion-button event collapsed"
                  data-label="collapsefaq6"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsefaq6"
                  aria-expanded="false"
                  aria-controls="collapsefaq6"
                >
                  ¿Lorem ipsum dolor sit amet?
                  <img
                    class="img-fluid"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                    alt="ValeApp"
                  />
                </button>
              </h2>
              <div
                id="collapsefaq6"
                class="accordion-collapse collapse"
                aria-labelledby="headingPoints"
                data-bs-parent="#accordionfqa"
              >
                <div class="accordion-body">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur <br class="xs-br" />
                    adipisicing elit, sed do eiusmod tempor <br class="xs-br" />
                    incididunt ut labore et dolore magna aliqua.
                    <br class="xs-br" />
                    Ut enim ad minim veniam, quis nostrud <br class="xs-br" />
                    exercitation ullamco laboris.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 id="headingPoints" class="accordion-header">
                <button
                  type="button"
                  class="accordion-button event collapsed"
                  data-label="collapsefaq7"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsefaq7"
                  aria-expanded="false"
                  aria-controls="collapsefaq7"
                >
                  ¿Lorem ipsum dolor sit amet?
                  <img
                    class="img-fluid"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                    alt="ValeApp"
                  />
                </button>
              </h2>
              <div
                id="collapsefaq7"
                class="accordion-collapse collapse"
                aria-labelledby="headingPoints"
                data-bs-parent="#accordionfqa"
              >
                <div class="accordion-body">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur <br class="xs-br" />
                    adipisicing elit, sed do eiusmod tempor <br class="xs-br" />
                    incididunt ut labore et dolore magna aliqua.
                    <br class="xs-br" />
                    Ut enim ad minim veniam, quis nostrud <br class="xs-br" />
                    exercitation ullamco laboris.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
<?php
get_footer();
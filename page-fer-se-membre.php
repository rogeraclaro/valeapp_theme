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
    Guanya diners fent allò<br />
    que més t'agrada.
  </h2>
  <div class="HomeOffer">
    <div class="container">
      <div class="row justify-content-center align-items-start">
        <div class="col-12">
          <img class="img-fluid offer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-HomeOffer.png" alt="valeapp" />
        </div>
        <div class="col-12 col-sm-3 ps-sm-4 mt-sm-5">
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
          </div>
        </div>
        <div class="col-12 col-sm-3 ps-sm-4 mt-sm-5">
          <div class="Membership-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-item2.png" alt="valeapp" />
            <h3 class="Membership-item-title">Comença a rebre tasques</h3>
            <p class="Membership-item-text">
              Lorem ipsum dolor sit amet <br class="xs-br" />
              consectetur adipisicing elit, sed do <br class="xs-br" />
              eiusmod tempor incididunt ut labore.
            </p>
          </div>
        </div>
        <div class="col-12 col-sm-3 ps-sm-4 mt-sm-5">
          <div class="Membership-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-item3.png" alt="valeapp" />
            <h3 class="Membership-item-title">Realitza els serveis</h3>
            <p class="Membership-item-text">
              Lorem ipsum dolor sit amet <br class="xs-br" />
              consectetur adipisicing elit, sed do <br class="xs-br" />
              eiusmod tempor incididunt ut labore.
            </p>
          </div>
        </div>
        <div class="col-12 col-sm-3 ps-sm-4 mt-sm-5">
          <div class="Membership-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-membership-item4.png" alt="valeapp" />
            <h3 class="Membership-item-title">Guanya diners</h3>
            <p class="Membership-item-text">
              Lorem ipsum dolor sit amet <br class="xs-br" />
              consectetur adipisicing elit, sed do.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="Membership-frequency">
    <h2 class="Membership-frequency-title">Comença ara mateix!</h2>
  </div>
  <div class="Membership-plans">

    <div class="container">
      <div class="row justify-content-center align-items-start">
        <div class="col-12 col-sm-4">
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
        </div>
        <div class="col-12 col-sm-4">
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
        </div>
        <div class="col-12 col-sm-4">
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
      </div>
    </div>
  </div>

  <div class="Reviews">
    <div class="container">
      <h2 class="title">El que diuen els nostres clients sobre Vale</h2>
      <div id="reviews" class="swiper">

    <?php
      $slides = get_field('reviews');
      if( $slides ): 
    ?>
      
      <!-- Swiper -->
      <div class="swiper-wrapper">
        <?php foreach( $slides as $slide ): ?>
            <div class="swiper-slide">
              <div class="content">
                <p class="text">
                  <?php echo $slide['texto']; ?>
                </p>
                <div class="rate">
                  <span>
                    <?php echo $slide['autor']; ?>
                  </span>
                  <img class="img-fluid rate" src="<?php echo $slide['stars']; ?>" alt="valeapp">
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <div class="swiper-pagination event" data-label="swiper_pagination"></div>
      </div>
      <!-- End Swiper -->
    </div>
  </div>

  <section class="Faq section6 pages" id="page6">
    <div class="container">
      <h2 class="title">Preguntes freqüents</h2>
      <div id="accordionfqa" class="accordion accordion-buttons">
      
      <?php
        $questions = get_field('preguntes_frequents');
        if( $questions ): 
      ?>
      <!-- Faq repeater -->
      <?php $counter = 0; foreach( $questions as $question ):?>
        <div class="accordion-item">
          <h2 id="headingPoints<?php echo $counter;?>" class="accordion-header">
            <button
              type="button"
              class="accordion-button event collapsed"
              data-label="collapsefaq"
              data-bs-toggle="collapse"
              data-bs-target="#collapsefaq<?php echo $counter;?>"
              aria-expanded="false"
              aria-controls="collapsefaq<?php echo $counter;?>"
            >
              <?php echo $question['pregunta'];?>
              <img
                class="img-fluid"
                src="<?php echo get_stylesheet_directory_uri();?>/img/valeapp-providers-chevron-faq.png"
                alt="ValeApp"
              />
            </button>
          </h2>
          <div
            id="collapsefaq<?php echo $counter;?>"
            class="accordion-collapse collapse"
            aria-labelledby="headingPoints<?php echo $counter;?>"
            data-bs-parent="#accordionfqa"
          >
            <div class="accordion-body">
              <?php echo $question['resposta'];?>
            </div>
          </div>
        </div>
      <?php $counter++; endforeach;?>
      <!-- End Faq repeater -->
      <?php endif; ?>

      </div>
    </div>
  </section>
</section>
<?php
get_footer();
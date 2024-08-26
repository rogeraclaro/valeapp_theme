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

$is_user_logged_in = is_user_logged_in();
$selected_membership = get_user_selected_membership(); // Esta es la membresía actual del usuario
$memberships = get_all_memberships(); // Obtener todos los planes de membresía


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
          <img class="img-fluid offer"
            src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-HomeOffer.png" alt="valeapp" />
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
        <?php foreach ($memberships as $fields): ?>
        <div class="col-12 col-sm-4">
          <?php
            // Verificar si el plan es el mismo que la membresía activa del usuario
            $is_current_plan = ($fields['titulo'] === $selected_membership);

            if ($is_user_logged_in) {
              if (!$selected_membership) {
                // Si el usuario está logueado pero no tiene membresía activa, no asignar ninguna clase
                $membership_class = '';
              } else {
                // Si tiene una membresía activa, asignar la clase correspondiente
                $membership_class = $is_current_plan ? 'active-plan' : 'deactivate';
              }
            } else {
              $membership_class = ''; // No agregar ninguna clase si el usuario no está logueado
            }

            // Definir el texto y estilo del botón
            if ($is_current_plan) {
              // Si es el plan actual, cambiar el color y texto del botón
              $button_text = 'Cancelar';
              $button_style = 'button-cancel';
            } else {
              $button_text = 'Contractar';
              $button_style = '';
            }

            // Usar las variables globales
            global $membership_fields, $membership_class, $button_text, $button_style, $is_current_plan;
            $membership_fields = $fields;
            $membership_class = $membership_class;
            $button_text = $button_text;
            $button_style = $button_style;
            $is_current_plan = $is_current_plan;

            // Llamar al partial
            get_template_part('template-parts/membership/membership', 'plan');
            ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="Reviews">
    <div class="container">
      <h2 class="title">El que diuen els nostres clients sobre Vale</h2>
      <div id="reviews" class="swiper">

        <?php
        $slides = get_field('reviews');
        if ($slides):
        ?>

        <!-- Swiper -->
        <div class="swiper-wrapper">
          <?php foreach ($slides as $slide): ?>
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
        if ($questions):
        ?>
        <!-- Faq repeater -->
        <?php $counter = 0;
          foreach ($questions as $question): ?>
        <div class="accordion-item">
          <h2 id="headingPoints<?php echo $counter; ?>" class="accordion-header">
            <button type="button" class="accordion-button event collapsed" data-label="collapsefaq"
              data-bs-toggle="collapse" data-bs-target="#collapsefaq<?php echo $counter; ?>" aria-expanded="false"
              aria-controls="collapsefaq<?php echo $counter; ?>">
              <?php echo $question['pregunta']; ?>
              <img class="img-fluid"
                src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-chevron-faq.png"
                alt="ValeApp" />
            </button>
          </h2>
          <div id="collapsefaq<?php echo $counter; ?>" class="accordion-collapse collapse"
            aria-labelledby="headingPoints<?php echo $counter; ?>" data-bs-parent="#accordionfqa">
            <div class="accordion-body">
              <?php echo $question['resposta']; ?>
            </div>
          </div>
        </div>
        <?php $counter++;
          endforeach; ?>
        <!-- End Faq repeater -->
        <?php endif; ?>

      </div>
    </div>
  </section>
</section>
<?php
get_footer();
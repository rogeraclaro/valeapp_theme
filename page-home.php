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
include 'inc/blog-categories-home.php';
include 'inc/home-content/home-data.php';

get_header();
?>

<div class="Home">
  <div class="Homecategories">
    <h1 class="title">
      <?php echo $title_hero; ?>
    </h1>

    <div class="Homecategories-content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="firstrow">
              <a href="<?php echo $cat1_link; ?>" class="category">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category1-white.png" alt="valeapp" class="img-fluid category-icon" />
                <p class="category-name"><?php echo $cat1; ?></p>
              </a>
              <a href="<?php echo $cat2_link; ?>" class="category">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category2-white.png" alt="valeapp" class="img-fluid category-icon" />
                <p class="category-name"><?php echo $cat2; ?></p>
              </a>
              <a href="<?php echo $cat3_link; ?>" class="category">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category3-white.png" alt="valeapp" class="img-fluid category-icon" />
                <p class="category-name"><?php echo $cat3; ?></p>
              </a>
              <a href="<?php echo $cat4_link; ?>" class="category">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category4-white.png" alt="valeapp" class="img-fluid category-icon" />
                <p class="category-name"><?php echo $cat4; ?></p>
              </a>
          </div>
          <div class="secondrow">
              <a href="<?php echo $cat5_link; ?>" class="category">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category5-white.png" alt="valeapp" class="img-fluid category-icon" />
                <p class="category-name"><?php echo $cat5; ?></p>
              </a>
              <a href="<?php echo $cat6_link; ?>" class="category">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category6-white.png" alt="valeapp" class="img-fluid category-icon" />
                <p class="category-name"><?php echo $cat6; ?></p>
              </a>
              <a href="<?php echo $cat7_link; ?>" class="category">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category7-white.png" alt="valeapp" class="img-fluid category-icon" />
                <p class="category-name"><?php echo $cat7; ?></p>
              </a>
              <a href="<?php echo $cat8_link; ?>" class="category">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category8-white.png" alt="valeapp" class="img-fluid category-icon icon8" />
                <p class="category-name"><?php echo $cat8; ?></p>
              </a>
              <a href="<?php echo $cat9_link; ?>" class="category">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-category9-white.png" alt="valeapp" class="img-fluid category-icon" />
                <p class="category-name"><?php echo $cat9; ?></p>
              </a>
          </div>
        </div>
      </div>
    </div>

    <div class="home-menu-card w-100">
      <?php search_task(); ?>
    </div>
  </div>

  <div class="HomeOffer">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-sm-6">
          <img class="img-fluid offer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-HomeOffer.png" alt="valeapp" />
        </div>
        <div class="col-12 col-sm-6 ps-sm-4">
          <h2 class="title"> <?php echo($titleS1); ?></h2>
          <p class="text">
            <?php echo($descriptionS1); ?>
          </p>
          <a class="HomeOffer-btn" href="/servicios-generica"><?php echo($buttonS1); ?></a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="HomeDoesWork">
    <div class="container">
      <h2 class="title"><?php echo($titleS2); ?></h2>
      <div class="row justify-content align-items-top">
        <div class="col-12 col-sm-4 mb-5">
          <img class="img-fluid offer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-homedoeswork-image1.png" alt="valeapp" />
          <h3 class="subtitle"><?php echo($subtitle1S2); ?></h3>
          <p class="text">
            <?php echo($description1S2); ?>
          </p>
        </div>
        <div class="col-12 col-sm-4 mb-5">
          <img class="img-fluid offer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-homedoeswork-image2.png" alt="valeapp" />
          <h3 class="subtitle"><?php echo($subtitle2S2); ?></h3>
          <p class="text">
            <?php echo($description2S2); ?>
          </p>
        </div>
        <div class="col-12 col-sm-4 mb-5">
          <img class="img-fluid offer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-home-homedoeswork-image3.png" alt="valeapp" />
          <h3 class="subtitle"><?php echo($subtitle3S2); ?></h3>
          <p class="text">
            <?php echo($description3S2); ?>
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="FindService">
    <div class="container">
      <div class="row justify-content align-items-center">
        <div class="col-12">
          <h2 class="title"><?php echo($titleS3); ?></h2>
          <p class="text">
            <?php echo($descriptionS3); ?>
          </p>
          <a class="button" href="/servicios-generica"><?php echo($buttonS3); ?></a>
        </div>
      </div>
    </div>
  </div>

  <div class="Popular">
    <div class="container">
      <h2 class="title">Serveis més populars</h2>
      <div class="content">
        <div class=imgContent>
          <img class="img-fluid popular d-sm-none" src="<?php echo($popularS1mob); ?>" alt="valeapp">
          <img class="img-fluid popular d-none d-sm-block" src="<?php echo($popularS1desk); ?>" alt="valeapp">
          <span class="textImg">
            <a class="button" href="<?php echo($popularS1url); ?>"><?php echo($popularS1name); ?></a>
          </span>
        </div>
        <div class=imgContent>
          <img class="img-fluid popular d-sm-none" src="<?php echo($popularS2mob); ?>" alt="valeapp">
          <img class="img-fluid popular d-none d-sm-block" src="<?php echo($popularS2desk); ?>" alt="valeapp">
          <span class="textImg">
            <a class="button" href="<?php echo($popularS2url); ?>"><?php echo($popularS2name); ?></a>
          </span>
        </div>
        <div class=imgContent>
          <img class="img-fluid popular d-sm-none" src="<?php echo($popularS3mob); ?>" alt="valeapp">
          <img class="img-fluid popular d-none d-sm-block" src="<?php echo($popularS3desk); ?>" alt="valeapp">
          <span class="textImg">
            <a class="button" href="<?php echo($popularS3url); ?>"><?php echo($popularS3name); ?></a>
          </span>
        </div>
        <div class=imgContent>
          <img class="img-fluid popular d-sm-none" src="<?php echo($popularS4mob); ?>" alt="valeapp">
          <img class="img-fluid popular d-none d-sm-block" src="<?php echo($popularS4desk); ?>" alt="valeapp">
          <span class="textImg">
            <a class="button" href="<?php echo($popularS4url); ?>"><?php echo($popularS4name); ?></a>
          </span>
        </div>
        <div class=imgContent>
          <img class="img-fluid popular d-sm-none" src="<?php echo($popularS5mob); ?>" alt="valeapp">
          <img class="img-fluid popular d-none d-sm-block" src="<?php echo($popularS5desk); ?>" alt="valeapp">
          <span class="textImg">
            <a class="button" href="<?php echo($popularS5url); ?>"><?php echo($popularS5name); ?></a>
          </span>
        </div>
        <div class=imgContent>
          <img class="img-fluid popular d-sm-none" src="<?php echo($popularS6mob); ?>" alt="valeapp">
          <img class="img-fluid popular d-none d-sm-block" src="<?php echo($popularS6desk); ?>" alt="valeapp">
          <span class="textImg">
            <a class="button" href="<?php echo($popularS6url); ?>"><?php echo($popularS6name); ?></a>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="WhyVale">
    <h2 class="title"><?php echo($titleS4); ?></h2>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-4">
          <div class="item">
            <img class="img-fluid" src=<?php echo($icon1S4['url']); ?> alt="valeapp">
            <h3 class="title2"><?php echo $subtitle1S4; ?></h3>
            <p class="text">
              <?php echo $description1S4; ?>
            </p>
          </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class="item">
            <img class="img-fluid" src=<?php echo $icon2S4['url']; ?> alt="valeapp">
            <h3 class="title2"><?php echo $subtitle2S4; ?></h3>
            <p class="text">
              <?php echo $description2S4; ?>
            </p>
          </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class="item">
            <img class="img-fluid" src=<?php echo $icon3S4['url']; ?> alt="valeapp">
            <h3 class="title2"><?php echo $subtitle3S4; ?></h3>
            <p class="text">
              <?php echo $description3S4; ?>
            </p>
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
      $slides = get_field('section5');
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

  <div class="Blog">
    <div class="container">
      <h2 class="title">
        Blog
      </h2>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <?php
        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            $title = get_the_title();
        ?>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="<?php echo($title);?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo($title); ?>" type="button" role="tab" aria-controls="<?php echo($title);?>" aria-selected="true"><?php the_post_thumbnail('thumbnail'); ?><?php echo($title); ?></button>
            </li>
        <?php
          }
          wp_reset_postdata();
        }
        ?>
      </ul>
      <div class="tab-content" id="myTabContent">
        <?php
        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            $title = get_the_title();
            $title1 = get_field('title_1');
            $image1 = get_field('image_1');
            $description1 = get_field('description_1');
            $title2 = get_field('title_2');
            $image2 = get_field('image_2');
            $description2 = get_field('description_2');
            $title3 = get_field('title_3');
            $image3 = get_field('image_3');
            $description3 = get_field('description_3');
            ?>
    
            <div class="tab-pane fade <?php if($title === "Comparte") {
              echo("active show");
            } ?>" id="<?php echo($title);?>" role="tabpanel" aria-labelledby="<?php echo($title);?>-tab">

          <div class="row">
            <div class="col-12 col-sm-4">
              <div class="content">
                <img class="img-fluid tab" src="<?php echo($image1['url']);?>" alt="<?php echo($image1['alt']); ?>" alt="valeapp" />
                <h3 class="subtitle"> <?php echo($title1) ?></h3>
                <p class="text">
                  <?php echo($description1); ?>
                </p>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="content">
                <img class="img-fluid tab" src="<?php echo($image2['url']);?>" alt="<?php echo($image2['alt']); ?>" alt="valeapp" />
                <h3 class="subtitle"> <?php echo($title2) ?></h3>
                <p class="text">
                  <?php echo($description2); ?>
                </p>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="content">
                <img class="img-fluid tab" src="<?php echo($image3['url']);?>" alt="<?php echo($image3['alt']); ?>" alt="valeapp" />
                <h3 class="subtitle"> <?php echo($title3) ?></h3>
                <p class="text">
                  <?php echo($description3); ?>
                </p>
              </div>
            </div>
          </div>
      <button class="button">Veure tots els articles</button>
    </div>
        <?php
          }
          wp_reset_postdata();
        }
        ?>
      </div>
    </div>
  </div>

<script>
  jQuery(document).ready(function($) {
    var firstTab = $('.nav-tabs .nav-item:first-child .nav-link');
    firstTab.addClass('active').attr('aria-selected', 'true');
    var firstTabContent = $('.tab-content .tab-pane:first-child');
    firstTabContent.addClass('show active');
  });
</script>

</div>
<?php
get_footer();
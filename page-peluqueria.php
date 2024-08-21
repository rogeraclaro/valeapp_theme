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
<section class="section2 servicio-generica">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Inici</a></li>
            <li class="breadcrumb-item"><a href="#">Servei</a></li>
            <li class="breadcrumb-item"><a href="#">Perruqueria</a></li>
          </ol>
        </nav>
      </div>
      <div class="col-12">
        <h2 class="title">
          Perruqueria
        </h2>
      </div>
    </div>
  </div>
</section>
<button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#HairSalonModal">
  Abrir Modal
</button>
<button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#HairSalonModalSearch">
  Abrir Modal Busqueda
</button>
<div class="modal fade HairSalon-modal" id="HairSalonModal" tabindex="-1" aria-labelledby="HairSalonModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="HairSalonModalLabel">Servicios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="peluqueria">
          <label class="peluqueria-item">
            <input type="checkbox" data-peluqueria-selectAll="true" data-tipo="todos">
            <span class="peluqueria-itemLabel">
              Todos
            </span>
          </label>
          <label class="peluqueria-item">
            <input type="checkbox" data-tipo="cortar-lavar">
            <span class="peluqueria-itemLabel">
              Cortar + Lavar
            </span>
          </label>
          <label class="peluqueria-item">
            <input type="checkbox" data-tipo="mechas-tinte">
            <span class="peluqueria-itemLabel">
              Mechas / Tinte
            </span>
          </label>
          <label class="peluqueria-item">
            <input type="checkbox" data-tipo="cejas">
            <span class="peluqueria-itemLabel">
              Cejas
            </span>
          </label>
          <div id="contador">Opciones seleccionadas: 0</div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="HairSalon-btn" id="btnSubmit" disabled data-bs-toggle="modal"
          data-bs-target="#gender">Seleccionar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade HairSalon-modal" id="gender" tabindex="-1" aria-labelledby="HairSalongender" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="gender modal-header">
        <h5 class="modal-title" id="HairSalongender">Soy</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="gender modal-body">
        <div>
          <label class="gender-item">
            <input type="radio" name="gender" data-tipo="male">
            <span class="gender-itemLabel">
              Hombre
            </span>
          </label>
          <label class="gender-item">
            <input type="radio" name="gender" data-tipo="female">
            <span class="gender-itemLabel">
              Mujer
            </span>
          </label>
        </div>
      </div>
      <div class="gender modal-footer">
        <button class="HairSalon-btn" id="btnSubmitGender" disabled>Confirmar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade HairSalon-searchModal" id="HairSalonModalSearch" tabindex="-1"
  aria-labelledby="HairSalonModalSearchLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-body">
        <div class="home-menu-card w-100">
          <form autocomplete="off">
            <div class="home-menu-cardContent">
              <div class="card-searcher">
                <img class="card-searcher-img"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/card-searcher-img.png" alt="lupa" />
                <div class="card-searcher-text">
                  <input type="text" placeholder="Servicio" name="s" />
                </div>
              </div>
              <div class="card-searcher">
                <img class="card-searcher-img"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/card-ubication.png" alt="lupa" />
                <div class="card-searcher-text">
                  Busca en tu zona
                </div>
              </div>
            </div>
            <button class="home-menu-cardBtn" id="search_button" type="submit">
              Buscar
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
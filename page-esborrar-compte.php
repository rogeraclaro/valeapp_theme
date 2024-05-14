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
include 'inc/match-service/index.php';
 
get_header();
?>
  <section class="section2 Ayuda">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"="#">Mi cuenta</a></li>
                            <li class="breadcrumb-item"><a href="#"="#">Centro de soporte</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <h2 class="title">
                        Ayuda
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="EliminarCuenta">
        <div class="EliminarCuenta-container">
            <h4 class="EliminarCuenta-title">
            ¿Seguro que quieres eliminar tu cuenta?
            </h4>
            <p class="EliminarCuenta-text">
            Sentimos que quieras dejarnos, pero si vuelves, te esperaremos con los brazos abiertos!
            </p>
            <p class="EliminarCuenta-text mb-0">
            Antes de irte, asegúrate de:
            </p>
            <p class="EliminarCuenta-text mb-0">
            •No tener transacciones pendientes
            de finalizar.
            </p>
            <p class="EliminarCuenta-text">
            •No tener saldo en el monedero.
            </p>
            <p class="EliminarCuenta-text">
            Si eliminas tu cuenta, todos tus datos (valoraciones, mensajes, reservas...) serán eliminados y no podrás recuperarlos.
            </p>
            <button class="EliminarCuenta-btn">Mantener cuenta</button>
            <button type="button" class="EliminarCuenta-delete " data-bs-toggle="modal" data-bs-target="#deleteAccount">Eliminar cuenta</button>
        </div>
        <div class="modal fade" id="deleteAccount" tabindex="-1" aria-labelledby="CustomeFilterLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content EliminarCuenta-modal">
          <div class="modal-header EliminarCuenta-head">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body EliminarCuenta-body">
            <h4 class="EliminarCuenta-title">
            Eliminar cuenta
            </h4>
            <p class="EliminarCuenta-textModal">
            Por favor, indícanos el motivo o motivos por los que deseas darte de baja. Tus comentarios son importantes para nosotros:
            </p>
            <label class="EliminarCuenta-item">
            <input type="checkbox" id="serviceSearch" class="EliminarCuenta-input">
            <span class="EliminarCuenta-itemLabel">
              Dificultad para encontrar el servicio que busco.
            </span>
          </label>
          <label class="EliminarCuenta-item">
            <input type="checkbox" id="dissatisfied" class="EliminarCuenta-input">
            <span class="EliminarCuenta-itemLabel">
              No estoy satisfecho/a con la calidad del servicio.
            </span>
          </label>
          <label class="EliminarCuenta-item">
            <input type="checkbox" id="tariff" class="EliminarCuenta-input">
            <span class="EliminarCuenta-itemLabel">
              No estoy satisfecho/a con la tarifa de los servicios. 
            </span>
          </label>
          <p class="EliminarCuenta-count">
            Motivos seleccionados: <span id="selectedCount">0</span>
          </p>
        </div>
    <div class="modal-footer EliminarCuenta-footer">
    <button id="ConfirmDelete" class="miSaldoProveedor-addBtn" data-bs-dismiss="modal" aria-label="Close">Confirmar</button>
    </div>
          </div>
    </section>


<?php
get_footer();
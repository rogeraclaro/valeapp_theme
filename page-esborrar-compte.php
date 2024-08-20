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
            <li class="breadcrumb-item"><a href="#"="#">El meu compte</a></li>
            <li class="breadcrumb-item"><a href="#"="#">Centre de suport</a></li>
          </ol>
        </nav>
      </div>
      <div class="col-12">
        <h2 class="title">
          Ajuda
        </h2>
      </div>
    </div>
  </div>
</section>
<section class="EliminarCuenta">
  <div class="EliminarCuenta-container">
    <h4 class="EliminarCuenta-title">
      Esteu segur que voleu suprimir el vostre compte?
    </h4>
    <p class="EliminarCuenta-text">
      Sentim que ens vulguis deixar, però si tornes, t'esperarem amb els braços oberts!
    </p>
    <p class="EliminarCuenta-text mb-0">
      Abans d'anar-te'n, assegura't de:
    </p>
    <p class="EliminarCuenta-text mb-0">
      •No tenir transaccions pendents
      de finalitzar.
    </p>
    <p class="EliminarCuenta-text">
      •No tenir saldo al moneder.
    </p>
    <p class="EliminarCuenta-text">
      Si elimines el teu compte, totes les teves dades (valoracions, missatges, reserves...) seran eliminades i no
      podràs recuperar-les.
    </p>
    <button class="EliminarCuenta-btn">Mantenir compte</button>
    <button type="button" class="EliminarCuenta-delete " data-bs-toggle="modal" data-bs-target="#deleteAccount">Eliminar
      compte</button>
  </div>
  <div class="modal fade" id="deleteAccount" tabindex="-1" aria-labelledby="CustomeFilterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content EliminarCuenta-modal">
        <div class="modal-header EliminarCuenta-head">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body EliminarCuenta-body">
          <h4 class="EliminarCuenta-title">
            Eliminar compte
          </h4>
          <p class="EliminarCuenta-textModal">
            Si us plau, indica'ns el motiu o motius pels quals vols donar-te de baixa. Els teus comentaris són
            importants per a nosaltres:
          </p>
          <label class="EliminarCuenta-item">
            <input type="checkbox" id="serviceSearch" class="EliminarCuenta-input">
            <span class="EliminarCuenta-itemLabel">
              Dificultat per trobar el servei que busco.
            </span>
          </label>
          <label class="EliminarCuenta-item">
            <input type="checkbox" id="dissatisfied" class="EliminarCuenta-input">
            <span class="EliminarCuenta-itemLabel">
              No estic satisfet amb la qualitat del servei.
            </span>
          </label>
          <label class="EliminarCuenta-item">
            <input type="checkbox" id="tariff" class="EliminarCuenta-input">
            <span class="EliminarCuenta-itemLabel">
              No estic satisfet/da amb la tarifa dels serveis.
            </span>
          </label>
          <p class="EliminarCuenta-count">
            Motius seleccionats: <span id="selectedCount">0</span>
          </p>
        </div>
        <div class="modal-footer EliminarCuenta-footer">
          <button id="ConfirmDelete" class="miSaldoProveedor-addBtn" data-bs-dismiss="modal"
            aria-label="Close">Confirma</button>
        </div>
      </div>
</section>


<?php
get_footer();
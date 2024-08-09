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
                        <li class="breadcrumb-item"><?php breadcrumb_my_account(); ?></li>
                        <li class="breadcrumb-item"><a href="#"></a></li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <h2 class="title">
                    Solicitudes
                </h2>
            </div>
        </div>
    </div>
</section>
<div class="RequestsDetail">
        <div class="RequestsDetail-card">
            <div class="RequestsDetail-cardImg">
                <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-ervice-user.png" alt="ValeApp">
             </div>
            <div class="RequestsDetail-cardText">
                <span class="RequestsDetail-cardName">Claudia</span>
                <span class="RequestsDetail-cardProfession">Clases de tenis</span>
            </div>
        </div>
        <hr />
        <div class="RequestsDetail-section">
            <div class="RequestsDetail-sectionHeader">
                <span class="RequestsDetail-sectionHeader-title">¿Cómo funciona?</span>
            </div>
            <div class="RequestsDetail-sectionBody RequestsDetail-sectionBody-text">
            Has recibido una solicitud de reserva de<br/> Claudia para la tarea classes de tenis. La<br/> 
            oferta caducará en dos semanas en<br/> caso de que no confirmes el servicio.
            </div>
        </div>
        <hr />
        <div class="RequestsDetail-section">
            <div class="RequestsDetail-sectionHeader">
                <span class="RequestsDetail-sectionHeader-title">Ubicación</span>
            </div>
            <div class="RequestsDetail-sectionBody">
                <div class="RequestsDetail-sectionBody-item">
                    <img class="RequestsDetail-sectionBody-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/ubication-icon.svg" alt="RequestsDetail-sectionBody-itemIcon">
                    <span class="RequestsDetail-sectionBody-itemName">
                    C/ Teodora Lamadrid, Local 
                    </span>
                </div>
            </div>
        </div>
        <hr />
        <div class="RequestsDetail-section">
            <div class="RequestsDetail-sectionHeader">
                <span class="RequestsDetail-sectionHeader-title">Fecha y hora</span>
            </div>
            <div class="RequestsDetail-sectionBody">
                <div class="RequestsDetail-sectionBody-item">
                <img class="RequestsDetail-sectionBody-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/ubication-icon.svg" alt="RequestsDetail-sectionBody-itemIcon">
                    <span class="RequestsDetail-sectionBody-itemName">
                    Miércoles, 29 de marzo
                    </span>
                </div>
                <div class="RequestsDetail-sectionBody-item RequestsDetail-sectionBody-item-timeline">
                    <span class="RequestsDetail-sectionBody-itemStart">
                        Inicio: 11:15
                    </span>
                    <span class="RequestsDetail-sectionBody-itemEnd">
                        Fin: 12:15
                    </span>
                </div>
                <div class="RequestsDetail-sectionBody-item">
                    <img class="RequestsDetail-sectionBody-itemIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/page-confirmar-y-pagar/clock-icon.svg" alt="RequestsDetail-sectionBody-itemIcon">
                    <span class="RequestsDetail-sectionBody-itemName">
                        (Duración: 1h)
                    </span>
                </div>
            </div>
        </div>
        <hr />
        <div class="RequestsDetail-section">
            <div class="RequestsDetail-sectionHeader">
                <span class="RequestsDetail-sectionHeader-title">Detalles de tu tarea</span>
            </div>
            <div class="RequestsDetail-sectionBody RequestsDetail-sectionBody-text">
                Hola Maria, necesito que traigas todo el<br /> material (pelotas, raquetas...ya que no<br /> dispongo).
            </div>
        </div>
        <hr />
        <div class="RequestsDetail-section">
            <div class="RequestsDetail-sectionHeader">
                <span class="RequestsDetail-sectionHeader-title">Detalles del precio</span>
            </div>
            <div class="RequestsDetail-sectionBody details">
                <div class="RequestsDetail-sectionBody-item RequestsDetail-sectionBody-item-list">
                    <span class="RequestsDetail-sectionBody-itemName">
                        Clases de tenis
                    </span>
                    <span class="RequestsDetail-sectionBody-itemValue">
                        20,00 &euro;/h
                    </span>
                </div>
                <div class="RequestsDetail-sectionBody-item RequestsDetail-sectionBody-item-list">
                    <span class="RequestsDetail-sectionBody-itemName">
                        Servicio puntual
                    </span>
                    <span class="RequestsDetail-sectionBody-itemValue"></span>
                </div>
                <div class="RequestsDetail-sectionBody-item RequestsDetail-sectionBody-item-list">
                    <span class="RequestsDetail-sectionBody-itemName">
                        Horas contratadas
                    </span>
                    <span class="RequestsDetail-sectionBody-itemValue">
                        1h
                    </span>
                </div>
                <hr/>
                <div class="RequestsDetail-sectionBody-item RequestsDetail-sectionBody-item-list RequestsDetail-sectionBody-item-total">
                    <span class="RequestsDetail-sectionBody-itemName">
                        Total
                    </span>
                    <span class="RequestsDetail-sectionBody-itemValue">
                        20,00 &euro;
                    </span>
                </div>
            </div>
        </div>
        <a class="RequestsDetail-btn" href="#">
            Confirmar reserva
        </a>
        <a class="RequestsDetail-deny" href="#">
        Denegar
        </a>
        <div class="RequestsDetail-rating">
        <div class="wrapper4">
				<h3 class="title">Valoraciones de Claudia (30)</h3>
				<div class="rating-content">
					<div class="rating-wrapper">
						<img class="img-fluid profile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-photo.png" alt="ValeApp">
						<div class="rating-info">
							<p class="name">Jorge P</p>
							<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-modal.png" alt="ValeApp">
						</div>
						<div class="duration">Hace 2 dias</div>
					</div>
					<p class="message">
						“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut bore.”
						et dol
					</p>
				</div>
				<div class="rating-content">
					<div class="rating-wrapper">
						<img class="img-fluid profile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-photo.png" alt="ValeApp">
						<div class="rating-info">
							<p class="name">Lorena P.</p>
							<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-modal.png" alt="ValeApp">
						</div>
						<div class="duration">Hace 3 semanas</div>
					</div>
					<p class="message">
						“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut bore.”
						et dol
					</p>
				</div>
				<div class="rating-content">
					<div class="rating-wrapper">
						<img class="img-fluid profile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-photo.png" alt="ValeApp">
						<div class="rating-info">
							<p class="name">Isabel G. </p>
							<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-rating-modal.png" alt="ValeApp">
						</div>
						<div class="duration">Hace 2 meses</div>
					</div>
					<p class="message">
						“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut bore.”
						et dol
					</p>
				</div>
				<button class="RequestsDetail-showMore"> + Ver mas</button>
			</div>
            <div class="wrapper5">
				<h3 class="title">Usuario</h3>
				<div class="wrapper">
					<div class="information">
						<p class="text">
							De
							<span>España</span>
						</p>
						<p class="text">
                        Miembro desde
							<span>Noviembre 2022</span>
						</p>
						<p class="text">
							Idiomas
							<span>Español/Inglés</span>
						</p>
					</div>
                    <div class="profile">
                        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-card-image-v3.png" alt="ValeApp">
                        <img class="profile-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-profile-check.png" alt="ValeApp-Check">
                     </div>
				</div>
				<button class="RequestsDetail-showMore">
					<img class="img-fluid message" src="<?php echo get_stylesheet_directory_uri(); ?>/img/valeapp-providers-message-icon.png" alt="ValeApp">
					Escribir a Claudia
				</button>
			</div>
			<div class="wrapper6">
				<h3 class="title">Política de cancelación</h3>
				<table class="table table-responsive">
					<thead>
					  <tr>
						<th>Antelación al inicio</th>
						<th>% penalización <br/>comisión</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td >No show</td>
						<td>100% del importe</td>
					  </tr>
					  <tr>
						<td>Menos de 24h</td>
						<td>50% del importe</td>
					  </tr>
					  <tr>
						<td>Mas de 24h</td>
						<td>0% del importe</td>
					  </tr>
					</tbody>
				  </table>
                  <p class="RequestsDetail-polices">
                  Ver <a href="#">política de cancelaciones</a>
                  </p>
			</div>
        </div>
    </div>

<?php
get_footer();
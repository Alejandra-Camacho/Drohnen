<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Drohnen - Experiencia de Vuelo</title>

	<!-- Fonts -->
	<link rel="stylesheet" href="font/font-awesome/css/all.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/mdb.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!--Main Navigation-->
	<header>
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
			<!-- <a class="navbar-brand" href="#"><strong>Navbar</strong></a> -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav navbar-center">
					<li class="nav-item">
						<a class="nav-link" href="#">CONOCE MÁS</a>
					</li>
					<li class="nav-item active">
						<!-- <a class="nav-link" href="#">DROHNEN <span class="sr-only">(current)</span></a> -->
						<img class="logo-dron" src="img/logos/logo-medium-light.png" alt="logo">
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">CONTACTO</a>
					</li>
				</ul>
			</div>
		</nav>
	
		<div class="view intro-2">
		<div class="full-bg-img">
			<div class="mask flex-center">
			<div class="container text-center white-text wow fadeInUp">
				<h1>¿LISTO PARA <br> ALZAR EL VUELO?</h1>
				<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modalRegistro">EMPECEMOS</button>
				<h3 class="h3-conocemos">¿Ya nos conocemos?</h3>
				<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#modalSesion">INICIA SESIÓN</button>
			</div>
			</div>
		</div>
		</div>
  	</header>
	<!--Main Navigation-->
  
	<!-- MODAL REGISTRO -->
	<div class="modal fade modal-fondo" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content modal-background">
				<div class="modal-header">
					<h5 class="modal-title text-center white-text" id="exampleModalLongTitle">ANTES DE COMENZAR</h5>
					<button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body"> 
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<input type="text" class="form-control form-registro" name="nombre-registro" id="nombre-registro" placeholder="Nombre*">
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control form-registro" name="apellido-registro" id="apellido-registro" placeholder="Apellido*">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12">
								<input type="email" class="form-control form-registro" name="email-registro" id="email-registro" placeholder="Correo Electrónico*">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12">
								<input type="password" class="form-control form-registro" name="contrasena-registro" id="contrasena-registro" placeholder="Contraseña*">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12">
								<input type="text" class="form-control form-registro" name="codigo-registro" id="codigo-registro" placeholder="Código de Acceso*">
							</div>
						</div>
						<div class="row mt-2 justify-content-end">
							<div class="col-md-12">
								<p id="statusMessage" class="white-text text-center"></p>
							</div>
						</div>
					</div> 
				</div>
				<div class="modal-footer">
					<button type="button" id="btnRegistro" class="btn btn-secondary">¡Listo!</button>
				</div>
			</div>
		</div>
	</div>
	<!-- MODAL REGISTRO -->

	<!-- MODAL INICIO SESIÓN -->
	<div class="modal fade modal-fondo" id="modalSesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document"> 
			<div class="modal-content modal-background"> <form action="php/Formulario-Login/login.php" method="POST">
				<div class="modal-header">
					<h5 class="modal-title text-center white-text" id="exampleModalLongTitle">Inicio de Sesión</h5>
					<button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row mt-3">
							<div class="col-md-12">
								<input type="email" class="form-control form-registro" name="email-login" id="email-login" placeholder="Correo Electrónico*">
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12">
								<input type="password" class="form-control form-registro" name="contrasena-login" id="contrasena-login" placeholder="Contraseña*">
							</div>
						</div>
					</div>
					<div class="row mt-2 justify-content-end">
						<div class="col-md-12">
							<p id="statusLogin" class="white-text text-center"></p>
						</div>
					</div>	
				</div>
				<div class="modal-footer">
					<button type="button" id="btnLogin" class="btn btn-secondary">¡Listo!</button>
				</div> </form>
			</div> 
		</div>
	</div>
	<!-- MODAL INICIO SESIÓN -->


	<!--Acerca de Nosotros-->
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center acerca-nosotros">ACERCA DE NOSOTROS</h3>
			</div>
		</div>
		<div class="row d-flex justify-content-center mt-4">
			<div class="col-md-5">
				<img class="img-fluid" src="img/about-Drohnen.png" alt="acerca-nosotros">
			</div>
			<div class="col-md-5">
				<p class="text-justify">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, 
					eveniet accusamus. Iure incidunt ullam voluptas delectus veniam, architecto mollitia debitis 
					porro voluptates! Aliquid necessitatibus minima nihil inventore ab, quisquam dicta.
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id, fugit quo! Magni dolor dolorum, 
					voluptatem accusantium pariatur nostrum modi asperiores nisi, assumenda tempora numquam beatae at 
					quia repellat? Sed, laborum!
				</p>
			</div>
		</div>
		<div class="row d-flex justify-content-end">
			<div class="col-md-1">
				<a href="#" class="text-black">
				<i class="fa fa-bars fa-2x" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
	<!--Acerca de Nosotros-->

	<!-- Opciones de Compra -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center acerca-nosotros">ELIJE LA MEJOR OPCIÓN PARA TI</h3>
			</div>
		</div>
		<div class="row d-flex justify-content-end mt-4">
			<div class="col-md-2">
				<h5 class="text-center">Versión <br><span class="black-titel">Demo</span></h5>
			</div>
			<div class="col-md-2">
				<h5 class="text-center">Versión <br><span class="black-titel">Mensual</span></h5>
			</div>
			<div class="col-md-2">
				<h5 class="text-center">Versión <br><span class="black-titel">Anual</span></h5>
			</div>
		</div>
		<div class="row row-margin d-flex justify-content-end mt-3">
			<div class="col-md-3 bck-1">
				<h5 class="text-center text-white align-middle">Lorem ipsum dolo</h5>
			</div>
			<div class="col-md-2">
				<h5 class="text-center">
					<i class="fa fa-check fa-2x align-middle" aria-hidden="true"></i>
				</h5>
			</div>
			<div class="col-md-2">
				<h5 class="text-center">
					<i class="fa fa-check fa-2x align-middle" aria-hidden="true"></i>
				</h5>
			</div>
			<div class="col-md-2">
				<h5 class="text-center">
					<i class="fa fa-check fa-2x align-middle" aria-hidden="true"></i>
				</h5>
			</div>
		</div>
		<div class="row row-margin d-flex justify-content-end mt-3">
			<div class="col-md-3 bck-2">
				<h5 class="text-center text-white align-middle">Lorem ipsum dolo</h5>
			</div>
			<div class="col-md-2">
				<h5 class="text-center">
					<i class="fa fa-times fa-2x align-middle" aria-hidden="true"></i>
				</h5>
			</div>
			<div class="col-md-2">
				<h5 class="text-center">
					<i class="fa fa-check fa-2x align-middle" aria-hidden="true"></i>
				</h5>
			</div>
			<div class="col-md-2">
				<h5 class="text-center">
					<i class="fa fa-check fa-2x align-middle" aria-hidden="true"></i>
				</h5>
			</div>
		</div>
		<div class="row row-margin d-flex justify-content-end mt-3">
			<div class="col-md-3 bck-3">
				<h5 class="text-center text-white align-middle">Lorem ipsum dolo</h5>
			</div>
			<div class="col-md-2">
				<h5 class="text-center">
					<i class="fa fa-times fa-2x align-middle" aria-hidden="true"></i>
				</h5>
			</div>
			<div class="col-md-2">
				<h5 class="text-center">
					<i class="fa fa-times fa-2x align-middle" aria-hidden="true"></i>
				</h5>
			</div>
			<div class="col-md-2">
				<h5 class="text-center">
					<i class="fa fa-check fa-2x align-middle" aria-hidden="true"></i>
				</h5>
			</div>
		</div>
		<div class="row row-margin d-flex justify-content-end mt-3">
			<div class="col-md-3 bck-4">
				<h5 class="text-center text-white align-middle">Lorem ipsum dolo</h5>
			</div>
			<div class="col-md-2">
				<h5 class="text-center">
					<i class="fa fa-times fa-2x align-middle" aria-hidden="true"></i>
				</h5>
			</div>
			<div class="col-md-2">
				<h5 class="text-center">
					<i class="fa fa-times fa-2x align-middle" aria-hidden="true"></i>
				</h5>
			</div>
			<div class="col-md-2">
				<h5 class="text-center">
					<i class="fa fa-check fa-2x align-middle" aria-hidden="true"></i>
				</h5>
			</div>
		</div>
		<div class="row d-flex justify-content-end mt-5">
			<div class="col-md-1">
				<a href="#" class="text-black text-center">
				<i class="fa fa-bars fa-2x" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- Opciones de compra -->

	<!-- Contacto -->
	<div class="container-fluid mt-5 img-background-contacto pb-5">
		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center acerca-nosotros mt-5 pt-5">HÁBLANOS DE TI</h3>
			</div>
		</div>
		<div class="row justify-content-end mt-4">
			<div class="col-md-4">
				<input type="text" class="form-control mt-3 estilo-form" id="nombre" placeholder="Nombre">
				<input type="email" class="form-control mt-3 estilo-form" id="email" placeholder="Email">
				<textarea class="form-control mt-3 estilo-textform" id="mensaje" rows="5" placeholder="Comentario"></textarea>
				<button id="btnEnviar" type="button" class="btn btn-light d-flex ml-auto mt-3">Enviar</button>
				<p id="statusMessage"></p>
			</div>
			<div class="col-md-6">
				<p><a class="llamanos" href="tel:5213315015804"><i class="fas fa-phone fa-2x pt-4 pl-4 pr-4"></i> 331-5015804</a></p> 
				<p><a class="maileanos" href="mailto:contacto@drohnen.com"><i class="fas fa-envelope fa-2x pt-4 pl-4 pr-4"></i> contacto@drohnen.com</a></p>
				
				<a href="#" class="redes-sociales"><i class="fab fa-facebook-f fa-2x pt-4 pl-4 pr-4"></i></a>
				<a href="#" class="redes-sociales"><i class="fab fa-youtube fa-2x pt-4 pl-4 pr-4"></i></a>
				<a href="#" class="redes-sociales"><i class="fab fa-linkedin-in fa-2x pt-4 pl-4 pr-4"></i></a>
			</div>
		</div>
		<div class="row d-flex justify-content-end">
			<div class="col-md-3">
				<a href="#" class="text-black text-center">
				<i class="fa fa-bars fa-2x" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- Contacto -->

	<!-- Footer -->
	<footer class="page-footer font-small grey pt-4">		
		<div class="footer-copyright text-center py-3"><i class="far fa-copyright"></i> 2019 Copyright:
			<a href="#"> Drohnen Simulador</a>
		</div>
		
	</footer>
	<!-- Footer -->

	<!-- Scripts -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mdb.min.js"></script>
	<script src="js/formularios/formulario-registro.js"></script>
	<script src="js/formularios/formulario-login.js"></script>
</body>
</html>
<!--IMPEDIR EL ACCESO NO AUTORIZADO A USUARIOS -->

<?php

session_start();

if (!isset($_SESSION['usuario'])) {
	echo '
        <script>
            alert("Por favor debes iniciar sesión");
            window.location = "inicio_sesion.php";
        </script>
        ';
	session_destroy();
	die();
}

?>

<!doctype html>
<html lang="es">

<head>
	<!-- ENLACES A LIBRERIA DE EMOJIS/FORO SOCIAL -->
	<link href="emoji/emoji-picker/lib/css/emoji.css" rel="stylesheet">
	<script src="emoji/jquery/jquery-3.2.1.min.js"></script>
	<script src="emoji/emoji-picker/lib/js/config.js"></script>
	<script src="emoji/emoji-picker/lib/js/util.js"></script>
	<script src="emoji/emoji-picker/lib/js/jquery.emojiarea.js"></script>
	<script src="emoji/emoji-picker/lib/js/emoji-picker.js"></script>
	<script src="dist/js/boot.js"></script>
	<!-- ENLACES A LIBRERIA DE EMOJIS/FORO SOCIAL -->

	<!-- ETIQUETA META -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Fuente Web">
	<title>Foro Social - BiGilsurge</title>


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<!-- ENLACES A HOJAS DE ESTILOS-->
	<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
	<link href="styles/style.css" rel="stylesheet">
	<link href="styles/foro.css" rel="stylesheet">
	<link href="styles/boot.css" rel="stylesheet">
	<link rel="icon" href="img/logo_icono_BG.ico">
</head>

<body>
	<!---------------->
	<!--ENCABEZADO-->
	<!---------------->

	<header class="container-fluid d-flex justify-content-around bg-blue">

		<i class="bi bi-telephone-fill text-light mb-0 p-2 fs-6 fw-bold">+57 3192414495</i>
		<p class="text-light mb-0 p-2 fs-6 fw-bold ">I.E Gilberto Alzate Avendaño</p>
		<div class="my-2">
			<a href="https://www.instagram.com/tfsamu/"> <i class="bi bi-instagram text-light mb-0 p-3 fs-5"></i></a>
			<a href="https://www.facebook.com/instgilberto.alzateavendano.5"><i class="bi bi-facebook text-light mb-0 p-3 fs-5 "></i></a>
		</div>
	</header>

	<!---------------->
	<!--MENÚ - NAVBAR-->
	<!---------------->

	<nav class="navbar navbar-expand-lg bg-light text-dark py-0 pr-1" id="menu">
		<div class="container">

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!--IMAGEN-->

			<div class="h-100 mx-5" id="caja-img-nav">
				<img src="img/logo_editado.png" class="h-100" width="100">
			</div>



			<!--IMAGEN-->
			<div class="collapse navbar-collapse " id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-5">



					<li class="nav-item dropdown link_hover">
						<a class="nav-link active" href="foro_social.php">Foro Social</a>
					</li>

					<li class="nav-item  dropdown link_hover">
						<a class="nav-link active" href="catalogo.php" id="select">Catálogo</a>
					</li>


				</ul>




			</div>
			<!--CERRAR SESIÓN-->
			<div>

				<a href="cerrar_sesion.php" class="link-cerrar color-blue">Cerrar sesión</a>
			</div>
		</div>
	</nav>



	<!--CONTENIDO DEL LATERAL-->

	<section class="row w-100">
		<article class="col-lg-3 col-md-12 col-sm-12 border border-2 art">
			<div class="text-center">
				<img src="img/PLANTILLAS/user_foto.png" alt="osorio" width="200px" class="img" id="imagen-perfil">
			</div>
			<div class="p-2 my-4">
				
				<input type="text" name="Nombre" class="form-control col-lg-6 col-md-6 col-sm-12 my-2" placeholder="Nombre" disabled>
				
				<input type="text" name="Grado" class="form-control col-lg-6 col-md-6 col-sm-12 my-2" placeholder="Grado" disabled>
				
				<input type="text" name="Grupo" class="form-control col-lg-6 col-md-6 col-sm-12 my-2" placeholder="Grupo" disabled>
				

			</div>

			<div class="text-center my-5 ">
				<img src="img/logo-alzate.jpeg" alt="osorio" width="150px" class="img" id="imagen-perfil">
			</div>

		</article>


		<!--CONTENIDO DE COMENTARIOS-->

		<article class="col-lg-9 col-md-12 col-sm-12 art-principal">
			<div class="text-center mt-5">
				<h1>Foro Social </h1>

			</div>
			<div class="output-container border border-black  mt-5">

				<div class="comment-form-container text-center">
					<h3>Comentarios</h3>
					<br>

					<form id="frm-comment">

						<div class="input-row">
							<input type="hidden" name="comment_id" id="commentId" placeholder="Name" autocomplete="name" />
							<input class="form-control" type="text" name="name" id="name" placeholder="Nombre" />
						</div>

						<div class="input-row">
							<p class="emoji-picker-container">
								<textarea class="input-field form-control" data-emojiable="true" data-emoji-input="unicode" type="text" name="comment" id="comment" placeholder="Agrega tu mensaje"></textarea>
							</p>
						</div>

						<div class="text-center">
							<input type="button" class="btn btn-info text-light" id="submitButton" value="Enviar" />
							<br>
							<br>
							<div id="comment-message">
								Comentario creado con éxito!
							</div>
						</div>


					</form>
				</div>
				<div id="output"></div>

			</div>


			<!--================================================
				===================INICIO: JAVASCRIPT CODIGO----========
				================================================-->
			<script>
				function postReply(commentId) {
					$('#commentId').val(commentId);
					$("#name").focus();
				}

				$("#submitButton").click(function() {
					$("#comment-message").css('display', 'none');
					var str = $("#frm-comment").serialize();

					$.ajax({
						url: "../back_end/AgregarComentario.php",
						data: str,
						type: 'post',
						success: function(response) {
							$("#comment-message").css('display', 'inline-block');
							$("#name").val("");
							$("#comment").val("");
							$("#commentId").val("");
							listComment();
						}
					});
				});

				$(document).ready(function() {
					listComment();
				});

				$(function() {
					// Initializes and creates emoji set from sprite sheet
					window.emojiPicker = new EmojiPicker({
						emojiable_selector: '[data-emojiable=true]',
						assetsPath: 'vendor/emoji-picker/lib/img/',
						popupButtonClasses: 'icon-smile'
					});

					window.emojiPicker.discover();
				});


				function listComment() {
					$.post("../back_end/ListaComentario.php",
						function(data) {
							var data = JSON.parse(data);

							var comments = "";
							var replies = "";
							var item = "";
							var parent = -1;
							var results = new Array();

							var list = $("<ul class='outer-comment'>");
							var item = $("<li>").html(comments);

							for (var i = 0;
								(i < data.length); i++) {
								var commentId = data[i]['co_id'];
								parent = data[i]['parent_id'];

								if (parent == "0") {
									comments = "<div class='comment-row'>" +
										"<div class='comment-info'><img src='img/user.png'><span class='posted-by'>" + data[i]['comentario_nombre'].toUpperCase() + "</span></div>" +
										"<div class='comment-text'>" + data[i]['comentarios'] + "</div>" +
										"<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Respuesta</a></div>" +
										"<div class='comment-text'>" + data[i]['fecha'] + "</div>" + "</div>";
									var item = $("<li>").html(comments);
									list.append(item);
									var reply_list = $('<ul>');
									item.append(reply_list);
									listReplies(commentId, data, reply_list);
								}
							}
							$("#output").html(list);
						});
				}

				function listReplies(commentId, data, list) {

					for (var i = 0;
						(i < data.length); i++) {
						if (commentId == data[i].parent_id) {
							var comments = "<div class='comment-row'>" +
								" <div class='comment-info'><img src='img/user.png'><span class='posted-by'>" + data[i]['comentario_nombre'].toUpperCase() + " </span></div>" +
								"<div class='comment-text'>" + data[i]['comentarios'] +
								"<div class='comment-text'>" + data[i]['fecha'] + "</div>" +
								"<div><a class='btn-reply' onClick='postReply(" + data[i]['co_id'] + ")'>Respuesta</a></div>" +
								"</div>";
							var item = $("<li>").html(comments);
							var reply_list = $('<ul>');
							list.append(item);
							item.append(reply_list);
							listReplies(data[i].co_id, data, reply_list);

						}
					}
				}
			</script>

			<!--================================================
				===================FIN: JAVASCRIPT CODIGO----========
				================================================-->




			<!-- Fin Contenido -->
			</ar>
	</section>



	</div>


	<!-- Footer Inicio -->
	<div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 0px;">
		<div class="row pt-5">
			<div class="col-lg-3 col-md-6 mb-5">
				<a href="quienes_somos.php" class="navbar-brand">
					<img src="img/logo_principalBG.png" alt="" width="300px" height="300px" class="logo-footer">
				</a>
			</div>
			<div class="col-lg-3 col-md-6 mb-5">
				<h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Nuestros servicios</h5>
				<div class="d-flex flex-column justify-content-start">
					<i class="fa fa-angle-right mr-2 mb-2"></i>Prevención de drogas</a>
					<i class="fa fa-angle-right mr-2  mb-2"></i>Psicología
					<i class="fa fa-angle-right mr-2  mb-2"></i>Guías de apoyo
					<i class="fa fa-angle-right mr-2  mb-2"></i>Problemas intrafamiliares
					<i class="fa fa-angle-right mr-2  mb-2"></i>Acoso sexual
					<i class="fa fa-angle-right mr-2  mb-2"></i>Otros servicios


				</div>
			</div>
			<div class="col-lg-3 col-md-6 mb-5">
				<h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usa estos links</h5>
				<div class="d-flex flex-column justify-content-start">
					<br>
					<br>
					<a class="text-white-50 mb-2" href="registro.php"><i class="fa fa-angle-right mr-2"></i>Registrarse</a>
					<a class="text-white-50 mb-2" href="foro_social.php"><i class="fa fa-angle-right mr-2"></i>Foro Social</a>
					<a class="text-white-50 mb-2" href="catalogo.php"><i class="fa fa-angle-right mr-2"></i>Catálogo</a>
					<a class="text-white-50 mb-2" href="quienes_somos.php"><i class="fa fa-angle-right mr-2"></i>¿Quienes Somos?</a>

				</div>
			</div>
			<div class="col-lg-3 col-md-6 mb-5">
				<h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contactanos</h5>
				<p><i class="fa fa-map-marker-alt mr-2"></i>Cl. 92 #51a100, Aranjuez, Medellín, Antioquia</p>
				<p><i class="fa fa-phone-alt mr-2"></i>3192414495</p>
				<p><i class="fa fa-envelope mr-2"></i>bigilsurge.alzate2023@gmail.com</p>



			</div>
		</div>
	</div>
	</div>
	<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 text-center text-md-left mb-3 mb-md-0">
				<p class="m-0 text-white-50">Derechos de autor &copy; BiGilsurge. Todos los derechos
					reservados 2022-23.</a>
				</p>
			</div>

		</div>
	</div>

	<!-- FIN / FORO SOCIAL-->


	<!-- Bootstrap  JavaScript-->
	<script src="dist/js/bootstrap.min.js"></script>
	<!-- Bootstrap  JavaScript-->


</body>

</html>
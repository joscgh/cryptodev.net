<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Perfil</title>
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<link rel="stylesheet" type="text/css" href="css/perfil.css">
</head>
<body class="criptodev-user">
	@include('components.send-u')
	@include('components.header-u')
	<section class="cont-bg">
		@include('components.aside-u')
		<section id="content-u">
			@include('components.date-u')
			<div id="wrap-cont-u">
				<h1 class="tittle-p">PERFIL</h1>
				<form method="post" action="{{ route('users.update',$user->_id) }}">
					<section id="box-inf" class="show-inf">
						<div class="head-inf">
							<img class="logo-sec" src="images/user/informacion.png">
							<h2>Informacion Basica</h2>
							<div class="vertical"></div>
							<img id="spin-i" src="images/user/arrow.png">
						</div>
						<div class="sub-inf">
							<section id="box-photo">
								<div id="photo-img">
									<img src="images/user/avatar.jpg">
									<p>GUARDAR</p>
								</div>
								<label class="fileContainer">
    							FOTO PERFIL
    								<div id="btn-file" class="btn-file">FILE</div>
    								<input id="photo-per" type="file"/>
								</label>
							</section>
							<section id="date-informacion">
								<div class="mediun-width">
									<input id="name-inf" type="text" name="name-i" placeholder="NOMBRE" value="{{ $user->first_name }}">
									<div class="zone-m"></div>
									<input id="lastname-inf" type="text" name="lastname-i" placeholder="APELLIDO" value="{{ $user->last_name }}">
								</div>
								<div class="mediun-width">
									<input id="phone-inf" type="text" name="phone-i" placeholder="CELULAR">
								</div>
								<input id="work-inf" type="text" name="work-i" placeholder="OCUPACIÓN">
								<div class="mediun-width">
									<div class="internal-line">
										<div class="line-solid"></div>
										<select id="tipodoc-inf">
											<option value="type" disabled selected>TIPO DE DOCUMENTO</option>
										 	<option value="type1">DNI</option>
										 	<option value="type2">Pasaporte</option>
										</select>											
									</div>
									<div class="zone-m"></div>
									<div class="internal-line">
										<div class="line-solid"></div>
										<select id="paisdoc-inf">
											<option value="pais" disabled selected>PAIS EMISOR DEL DOCUMENTO</option>
										 	<option value="pais1">Colombia</option>
										 	<option value="pais1">Chile</option>
										 	<option value="pais2">Perú</option>
										 	<option value="pais1">Venezuela</option>
										</select>
									</div>
								</div>
								<input id="numdoc-inf" type="text" name="numdoc-i" placeholder="NUMERO DE DOCUMENTO">
							</section>
						</div>
					</section>
					<section id="box-dat" class="show-inf">
						<div class="head-dat">
							<img class="logo-sec" src="images/user/personales.png">
							<h2>Datos Personales</h2>
							<div class="vertical"></div>
							<img id="spin-d" src="images/user/arrow.png">
						</div>
						<div class="sub-dat">
							<label class="fileContainer">
    						FOTO DE DOCUMENTO DE IDENTIDAD
    							<div id="btn-docf" class="btn-file">FILE</div>
    							<input id="photo-docf" type="file"/>
							</label>
							<label class="fileContainer">
    						SI APLICA, FOTO DNI PARTE TRASERA
    							<div id="btn-docb" class="btn-file">FILE</div>
    							<input id="photo-docb" type="file"/>
							</label>
							<input id="fecha-nacimiento" type="text" name="fecha-n" placeholder="FECHA DE NACIMIENTO">
							<h1 class="tittle-p">RESIDENCIA</h1>
							<input id="direccion-res" type="text" name="dir-r" placeholder="DIRECCIÓN" value="">
							<div class="mediun-width">
								<div class="internal-line">
									<div class="line-solid"></div>
									<select id="pais-res">
										<option value="pais" disabled selected>PAIS</option>
									 	<option value="pais1">Pais 1</option>
									 	<option value="pais2">Pais 2</option>
									</select>											
								</div>
								<div class="zone-m"></div>
								<div class="internal-line">
									<div class="line-solid"></div>
									<select id="estado-res">
										<option value="estado" disabled selected>REGIÓN O ESTADO</option>
									 	<option value="estado1">Estado 1</option>
									 	<option value="estado2">Estado 2</option>
									</select>
								</div>
							</div>
							<div class="mediun-width">
								<div class="internal-line">
									<div class="line-solid"></div>
									<select id="ciudad-res">
										<option value="ciudad" disabled selected>CIUDAD</option>
									 	<option value="ciudad1">Ciudad 1</option>
									 	<option value="ciudad2">Ciudad 2</option>
									</select>											
								</div>
								<div class="zone-m"></div>
								<input id="codigo-pos" type="text" name="code-p" placeholder="CODIGO POSTAL">
							</div>
							<label class="fileContainer">
    						COMPROBANTE DE RESIDENCIA
    							<div id="btn-res" class="btn-file">FILE</div>
    							<input id="photo-res" type="file"/>
							</label>
						</div>
					</section>
					<section id="box-seg" class="show-inf">
						<div class="head-seg">
							<img class="logo-sec" src="images/user/seguridad.png">
							<h2>Seguridad</h2>
							<div class="vertical"></div>
							<img id="spin-s" src="images/user/arrow.png">
						</div>
						<div class="sub-seg">
							<label class="container">Activar Clave Dinamica
							  	<input type="checkbox">
								<span class="checkmark"></span>
							</label>
							<div class="zone-m"></div>
							<label class="container">Cambiar Contraseña
							  	<input type="checkbox">
							  	<span class="checkmark"></span>
							</label>
						</div>
					</section>
					<input id="save-perfil" type="submit" value="GUARDAR">
				</form>
			</div>
		</section>
	</section>	
	@include('components.footer')
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/criptodev.js"></script>
	<script type="text/javascript" src="js/user.js"></script>
	<script type="text/javascript" src="js/perfil.js"></script>
</body>
</html>
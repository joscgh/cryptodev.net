<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>API</title>
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<link rel="stylesheet" type="text/css" href="css/api.css">
</head>
<body class="criptodev-user">
	@include('components.send-u')
	@include('components.header-u')
	<section class="cont-bg">
		@include('components.aside-u')
		<section id="content-u">
			@include('components.date-u')
			<div id="wrap-cont-u">
				<div id="section-tittle">
					<h1 id="tittle-a">DATOS DEL API</h1>
					<h1 id="estado-api">API DESACTIVADO</h1>
				</div>
				<div id="btn-action">
					<p id="api-off" class="swich-api">Off</p>
					<div id="swich-a">
						<div id="swich-btn"></div>
					</div>
					<p id="api-on" class="swich-api">On</p>
				</div>
				<div id="api-date">
					<div id="api-box">
						<div id="api-box1" class="box-style">
							<h1>KeyApi</h1>
							<div class="internal-style">
								<p id="key-text">{{ $data->api_key }}</p>
								<button onclick="copyToClipboard('#key-text')">Copiar</button>
							</div>
						</div>
						<div id="api-box2" class="box-style">
							<h1>Dirección Principal</h1>
							<div class="internal-style">
								<p id="dir-text">{{ $data->address }}</p>
								<button onclick="copyToClipboard('#dir-text')">Copiar</button>
							</div>
						</div>
					</div>
					<div id="api-box3" class="box-style">
						<h1>Notificaciones Instantaneas</h1>
						<div class="internal-style">
							<p id="not-text">www.foroinner.com.pe</p>
								<button onclick="copyToClipboard('#not-text')">Copiar</button>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>	
	@include('components.footer')
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/criptodev.js"></script>
	<script type="text/javascript" src="js/user.js"></script>
	<script type="text/javascript" src="js/api.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Contacto</title>
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>
	@include('components.header')
	<section id="contact">
		<div class="box-c">
			<div class="inner-wrap">
				<form action="{{ url('/') }}">
					<h1 id="tittle-c">CONTACTO</h1>
					<div class="alig-c">
				    	<img id="na-c" src="images/contact/name-c.svg">
				    	<input class="into-text-c" type="text" name="name" placeholder="Nombre">
				    </div>
				    <div class="alig-c">
				    	<img id="em-c" src="images/contact/email-c.svg">
				    	<input class="into-text-c" type="email" name="email" placeholder="Email">
				    </div>
				    <div id="ta-c"class="alig-c">
				    	<img id="ms-c" src="images/contact/message-c.svg">
				    	<textarea class="into-text-c" name="comment" placeholder="Escriba su Mensaje"></textarea>
				    </div>
				    <input id="send-c"type="submit" value="ENVIAR">
				</form>
			</div>
		</div>
		<img id="triangle-c"src="images/footer-img/triangle-f.svg">
	</section>
	@include('components.footer')
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/criptodev.js"></script>
</body>
</html>
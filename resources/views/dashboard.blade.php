<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Cryptodev</title>
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body class="criptodev-user">
	@include('components.send-u')
	@include('components.header-u')
	<section class="cont-bg">
		@include('components.aside-u')
		<section id="content-u">
			@include('components.date-u')
			<div id="wrap-cont-u">
				<div id="price-u">
					<div id="price-conv">
						<div id="price-img">
							<img src="images/user/btc.svg">
						</div>
						<div id="price-cant">
							<p><span id="btc-u">1</span> BTC = <span id="btc-u">{{ $data->btc_val }}</span> $</p>
						</div>
					</div>
					<form>
						<div id="cont-form-u">
							<div id="convertion-u">
								<img src="images/user/usd.svg">
								<input type="text" name="dollar-u" value="{{ $data->bal_usd }}">
							</div>
							<div id="convertion-u">
								<img src="images/user/btc.svg">
								<input type="text" name="bitcoin-u" value="{{ $data->balance }}">
							</div>
						</div>
					  	<input id="send-convertion" type="submit" value="CONVERTIR">
					</form>
				</div>
				<p id="text-dashboard-u">Direcciones Usadas <span id="btc-u">0</span> plan activo free direcciones disponibles <span id="btc-u"></span></p>	
				<img id="graphic-u" src="images/user/graphic-u.jpg">
			</div>
		</section>
	</section>	
	@include('components.footer')
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/criptodev.js"></script>
	<script type="text/javascript" src="js/user.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Pagos</title>
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<link rel="stylesheet" type="text/css" href="css/pagos.css">
</head>
<body class="criptodev-user">
	@include('components.send-u')
	@include('components.header-u')
	<section class="cont-bg">
		@include('components.aside-u')
		<section id="content-u">
			@include('components.date-u')
			<div id="wrap-cont-u">
				<section id="box-price">
					<div id="free-price" class="price-style">
						<div class="head-style">
							<h1>FREE</h1>
							<div class="rent-p">
								<h2>$0</h2>
								<p>/month</p>
							</div>
						</div>
						<div class="cont-style">
							<p>200 Direcciones Bonus + 10 Direcciones unlimited Transaccions Upgrade Yes Support Yes</p>
							<button>ACTIVO</button>
						</div>
					</div>
					<div id="bronce-price" class="price-style">
						<div class="head-style">
							<h1>BRONCE</h1>
							<div class="rent-p">
								<h2>$100</h2>
								<p>/month</p>
							</div>
						</div>
						<div class="cont-style">
							<p>5000 Direcciones Bonus + 1000  Direcciones unlimited Transaccions Upgrade Yes Support Yes</p>
							<button>ACTIVO</button>
						</div>
					</div>
					<div id="silver-price" class="price-style">
						<div class="head-style">
							<h1>SILVER</h1>
							<div class="rent-p">
								<h2>$200</h2>
								<p>/month</p>
							</div>
						</div>
						<div class="cont-style">
							<p>10000 Direcciones Bonus + 2000 Direcciones unlimited Transaccions Upgrade Yes Support Yes</p>
							<button>ACTIVO</button>
						</div>
					</div>
					<div id="gold-price" class="price-style">
						<div class="head-style">
							<h1>GOLD</h1>
							<div class="rent-p">
								<h2>$300</h2>
								<p>/month</p>
							</div>
						</div>
						<div class="cont-style">
							<p>20000 Direcciones Bonus + 5000 Direcciones unlimited Transaccions Upgrade Yes Support Yes</p>
							<button>ACTIVO</button>
						</div>
					</div>
				</section>
			</div>
		</section>
	</section>	
	@include('components.footer')
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/criptodev.js"></script>
	<script type="text/javascript" src="js/user.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Transacciones</title>
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<link rel="stylesheet" type="text/css" href="css/transacciones.css">
</head>
<body class="criptodev-user">
	@include('components.send-u')
	@include('components.header-u') 
	<section class="cont-bg">
		@include('components.aside-u')
		<section id="content-u">
			@include('components.date-u')
			<div id="wrap-cont-u">
				<h1 id="tittle-a">BUSCAR TRANSACCIONES</h1>
				<form id="form-a">
					<input id="search-a" type="text" name="search">
					<div id="btn-section">
						<a id="btn-s1" href="">BUSCAR</a>
					</div>
				</form>
				<div id="responsive-t">
					<table id="table-a">
					   <thead>
					       <tr>
					           <th>Dirección</th>
					           <th>Cant Btc</th>
					           <th>Cant $</th>
					           <th>Btc Valor</th>
					           <th>Fecha Descripción</th> 
					           <th>Comisión</th>
					           <th>Proceso</th>
					       </tr>
					   </thead>
					   <tbody>
					       <tr>
					           <td>{{ $transaction->who_received }}</td>
					           <td>{{ $transaction->amount }}</td>
					           <td>{{ $transaction->cant_usd}}</td>
					           <td>{{ $transaction->btc_val }}</td>
					           <td></td>
					           <td>{{ $transaction->fee }}</td>
					           <td></td>
					      </tr>
					   </tbody>
					</table>	
				</div>
			</div>
		</section>
	</section>	
	@include('components.footer')
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/criptodev.js"></script>
	<script type="text/javascript" src="js/user.js"></script>
</body>
</html>
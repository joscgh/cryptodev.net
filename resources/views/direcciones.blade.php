<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Direcciones</title>
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<link rel="stylesheet" type="text/css" href="css/direcciones.css">
</head>
<body class="criptodev-user">
	@include('components.send-u')
	@include('components.header-u')
	<section class="cont-bg">
		@include('components.aside-u')
		<section id="content-u">
			@include('components.date-u')
			<div id="wrap-cont-u">
				<h1 id="tittle-a">ACTIVOS</h1>
				<form id="form-a">
					<input id="search-a" type="text" name="search">
					<div id="btn-section">
						<a id="btn-s1" href="">+ NUEVA</a>
						<a id="btn-s2" href="">IR A ARCHIVADOS</a>
					</div>
				</form>
				<div id="responsive-t">
					<table id="table-a">
					   <thead>
					       <tr>
					           <th>Nombre</th>
					           <th>Dirección</th>
					           <th>Saldo</th>
					           <th>Acciones</th>
					       </tr>
					   </thead>
					   <tbody>
					       <tr>
					           <td>{{ $address->label }}</td>
					           <td>{{ $address->address }}</td>
					           <td>{{ $address->balance }}</td>
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
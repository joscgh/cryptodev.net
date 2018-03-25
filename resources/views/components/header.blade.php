<header>
	<div id="header-cont" class="inner-wrap">
		<div id="header-nav">
			<a href="{{ url('/') }}"><img class="header-logo" src="images/header-img/logo-h.png"></a>
			<input type="checkbox" id="btn-menu">
			<label for="btn-menu" id="i-menu" class="icon-menu"></label>
			<nav class="menu">
				<div class="menu-int">
					<ul>
						<li><a href="#">SEGURIDAD</a></li>
						<li><a href="#">SUPORTE</a></li>
						<li><a href="#">PARA DESARROLLADORES</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="{{ url('contact')}}">CONTACTO</a></li>
					</ul>
				</div>
				<div class="login">
					<ul>
						<li><a id="btn-login" href="{{ url('login') }}">Iniciar Sesión</a></li>
					</ul>
				</div>
			</nav>
		</div>	
	</div>
</header>
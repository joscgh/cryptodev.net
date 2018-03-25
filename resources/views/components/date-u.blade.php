<div class="dates-u">
	<h1>BITCOIN / DASHBOARD</h1>
	<div class="config-u">
		<a id="rotate-t" href="#">
			<img id="tool-u" src="images/user/tool.svg">
		</a>
		<li class="submenu"><a href="#"> {{ Auth::user()->name }} </a><img src="images/user/arrow.png">
			<ul class="submenu-h">
				<li><a href="">Ayuda</a></li>
				<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesion</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            			{{ csrf_field() }}
        			</form>
				</li>
			</ul>
		</li>
	</div>
</div>
<div class="times-u">
	<div class="fecha-u">Fecha: <span id="actual-f"><?=date('d/m/Y')?></span></div>
	<div class="hora-u">Hora: <span id="actual-f"><span id="liveclock"></span></span></div>
	<div class="conexion-u">Ultima Conexion: <span id="actual-f">{{ Auth::user()->last_login }}</span></div>
</div>

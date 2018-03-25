<aside id="menu-l">
	<div id="transparent-ml">
		<div id="float-ml">
			<img src="images/user/user.png">
			<h3 id="user-v">{{ Auth::user()->name }}</h3>
			<select>
			 	<option value="bitcoin">Bitcoin</option>
			 	<option value="ethereum">Ethereum</option>
			</select>
		</div>
	</div>
	<div id="list-ml">
		<a href="{{ url('/dashboard') }}" class="element-ml">
			<img id="ml1" src="images/user/dashboard-e.svg">
			<p>DASHBOARD</p>
		</a>
		<a href="#" id="send-u" class="element-ml">
			<img id="ml2" src="images/user/enviar-e.svg">
			<p>ENVIAR</p>
		</a>
		<a href="{{ url('/addresses') }}" class="element-ml">
			<img id="ml3" src="images/user/direcciones-e.svg">
			<p>DIRECCIONES</p>
		</a>
		<a href="{{ url('/transactions') }}" class="element-ml">
			<img id="ml4" src="images/user/transacciones-e.svg">
			<p>TRANSACCIONES</p>
		</a>
		<a href="{{ url('/api') }}" class="element-ml">
			<img id="ml5" src="images/user/api-e.svg">
			<p>API</p>
		</a>
		<a href="{{ url('/payments') }}" class="element-ml">
			<img id="ml6" src="images/user/pagos-e.svg">
			<p>PAGOS</p>
		</a>
		<a href="{{ url('/profile') }}" class="element-ml">
			<img id="ml7" src="images/user/perfil-e.svg">
			<p>PERFIL</p>
		</a>
		<a href="{{ route('logout') }}" class="element-ml" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
			<img id="ml8" src="images/user/salir-e.svg">
			<p>SALIR</p>
		</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
	</div>
</aside>
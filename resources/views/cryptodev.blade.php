<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>CryptoDev | API services Bitcoin and Ethereum </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
</head>
<body onload="update1()">
	@include('components.header')
	<section id="slider">
		<div id="img1-s" class="box-s">
			<div class="inner-wrap">
				<h1 class="text-s"><span>LA SOLUCIÓN PARA EL DESAROLLO EN </span>BLOCKCHAIN.<br><a href="{{ url('sign-up') }}">Registarte Gratis</a></h1>
			</div>
		</div>
		<div id="img2-s" class="box-s">
			<div class="inner-wrap">
				<h1 class="text-s"><span>MANTEN TUS AHORROS </span>CONTIGO.<br><a href="{{ url('sign-up') }}">Registarte Gratis</a></h1>
			</div>
		</div>
		<div id="img3-s" class="box-s">
			<div class="inner-wrap">
				<h1 class="text-s"><span>NOSOTROS TRABAJAMOS POR Y </span>PARA TI.<br><a href="{{ url('sign-up') }}">Registarte Gratis</a></h1>
			</div>
		</div>
		<div id="nav-s">
		</div>
		<img id="triangle-s" src="images/home/triangle-s.svg">
	</section>
	<section id="ventajas">
		<div id="cont-v" class="inner-wrap">
			<div class="box-v">
				<img class="img-s" src="images/home/icon-v2.svg">
				<img class="img-h" src="images/home/icon-v2-2.svg">
				<h1>USABILIDAD</h1>
				<P>Servicio eficiente Intuitivo y facil de manejar.</P>
			</div>
			<div class="box-v">
				<img class="img-s" src="images/home/icon-v3.svg">
				<img class="img-h" src="images/home/icon-v3-2.svg">
				<h1>SOPORTE ONLINE:</h1>
				<P>Atencion al Cliente las 24 horas todos los dias. Atento para solucionar tus problemas.</P>
			</div>
			<div class="box-v">
				<img class="img-s" src="images/home/icon-v1.svg">
				<img class="img-h" src="images/home/icon-v1-2.svg">
				<h1>SEGURIDAD</h1>
				<P>Brindamos seguridad mediante llaves privadas personales para una mayor confianza al momento.</P>
			</div>
			<div class="box-v">
				<img class="img-s" src="images/home/icon-v4.svg">
				<img class="img-h" src="images/home/icon-v4-2.svg">
				<h1>DUEÑO DE TUS MONEDAS:</h1>
				<P>Acceso total a todas las llaves privadas de las criptomoneda.</P>
			</div>
		</div>
	</section>
	<section id="banner">
		<div class="inner-wrap">
			<h1>"LA SOLUCIÓN PARA PROFESIONALES Y EMPRESAS"</h1>
		</div>
	</section>
	<section id="price">
		<div id="dollar-p">
			<h1 id="dollar-bp" class="d-p">15.000 $</h1>
			<h1 id="dollar-bp" class="d-p">9.000 $</h1>
		</div>
		<div id="img-p">
			<img id="img-p1"src="images/home/price-d.svg">
			<img id="img-p2"src="images/home/price-m.svg">
		</div>
		<div id="cripto-p">
			<div class="box-p">
				<img class="logo-p"src="images/home/icon1-p.png">
				<h1 class="name-p">BITCOIN HOY</h1>
			</div>
			<div class="box-p">
				<img class="logo-p"src="images/home/icon1-p.png">
				<h1 class="name-p">MONERO HOY</h1>
			</div>
		</div>
	</section>
	<section id="code">
		<div class="inner-wrap">
			<div id="tittle-c">
				<h1>CREA APLICACIONES USANDO SOLO TRES LÍNEAS DE CÓDIGO</h1>
			</div>
			<div id="box-c">
				<nav id="lengnav">
					<h1 class="lenguaje">CURL</h1>
					<h1 class="lenguaje">RUBY</h1>
					<h1 class="lenguaje">NODEJS</h1>
					<h1 class="lenguaje">PHP</h1>
					<h1 class="lenguaje">PYTHON</h1>
				</nav>
				<div class="int-code">
					<code class="language-int"> 
						<span class="token comment" spellcheck="true"># create a new Bitcoin address</span><br>
						$ curl https<span class="token punctuation">:</span><span class="token operator">/</span><span class="token operator">/</span>block<span class="token punctuation">.</span>io<span class="token operator">/</span>api<span class="token operator">/</span>v2<span class="token operator">/</span>get_new_address<span class="token operator">/</span><span class="token operator">?</span>api_key<span class="token operator">=</span><span class="token punctuation">{</span><span class="token constant">API </span><span class="token constant">KEY</span><span class="token punctuation">}</span><br>
						<span class="token punctuation">{</span><br>
  						<span class="token string">&emsp;"status"</span><span class="token punctuation">:</span><span class="token string"> "success"</span><span class="token punctuation">,</span><br>
  						<span class="token string">&emsp;"data"</span><span class="token punctuation">:</span><span class="token punctuation"> {</span><br>
    					<span class="token string">&emsp;&emsp;"network"</span><span class="token punctuation">:</span>&emsp;<span class="token string">"BTC"</span><span class="token punctuation">,</span><br>
    					<span class="token string">&emsp;&emsp;"user_id"</span><span class="token punctuation">:</span>&emsp;<span class="token number">1</span><span class="token punctuation">,</span><br>
    					<span class="token string">&emsp;&emsp;"address"</span><span class="token punctuation">:</span>&emsp;<span class="token string">"3EL5SKSjEzFQDBmXA5JFbsZu48vKnNSdDH"</span><span class="token punctuation">,</span><br>
    					<span class="token string">&emsp;&emsp;"label"</span><span class="token punctuation">:</span>&emsp;<span class="token string">"random"</span><br>
  						<span class="token punctuation">&emsp;&emsp;}</span><br>
						<span class="token punctuation">}</span>
					</code>
					<code class="language-int"> 
						<span class="token comment" spellcheck="true"># create a new Bitcoin address</span><br>
						<span class="token operator">&gt;</span><span class="token operator">&gt;</span><span class="token constant">&emsp;BlockIo</span><span class="token punctuation">.</span>get_new_address<br>
						<span class="token punctuation">{</span><br>
  						<span class="token string">&emsp;"status"</span><span class="token punctuation">:</span><span class="token string"> "success"</span><span class="token punctuation">,</span><br>
  						<span class="token string">&emsp;"data"</span><span class="token punctuation">:</span><span class="token punctuation"> {</span><br>
    					<span class="token string">&emsp;&emsp;"network"</span><span class="token punctuation">:</span>&emsp;<span class="token string">"BTC"</span><span class="token punctuation">,</span><br>
    					<span class="token string">&emsp;&emsp;"user_id"</span><span class="token punctuation">:</span>&emsp;<span class="token number">1</span><span class="token punctuation">,</span><br>
    					<span class="token string">&emsp;&emsp;"address"</span><span class="token punctuation">:</span>&emsp;<span class="token string">"3EL5SKSjEzFQDBmXA5JFbsZu48vKnNSdDH"</span><span class="token punctuation">,</span><br>
    					<span class="token string">&emsp;&emsp;"label"</span><span class="token punctuation">:</span>&emsp;<span class="token string">"random"</span><br>
  						<span class="token punctuation">&emsp;&emsp;}</span><br>
						<span class="token punctuation">}</span>
					</code>
					<code class="language-int"> 
						<span class="token comment" spellcheck="true"># create a new Bitcoin address</span><br>
						<span class="token operator">&gt;</span>&emsp;block_io<span class="token punctuation">.</span><span class="token function">get_new_address<span class="token punctuation">(</span></span><span class="token punctuation">{</span><span class="token punctuation">}</span><span class="token punctuation">,</span>&emsp;console<span class="token punctuation">.</span>log<span class="token punctuation">)</span><span class="token punctuation">;</span><br>
						<span class="token punctuation">{</span><br>
  						<span class="token string">&emsp;"status"</span><span class="token punctuation">:</span><span class="token string"> "success"</span><span class="token punctuation">,</span><br>
  						<span class="token string">&emsp;"data"</span><span class="token punctuation">:</span><span class="token punctuation"> {</span><br>
    					<span class="token string">&emsp;&emsp;"network"</span><span class="token punctuation">:</span>&emsp;<span class="token string">"BTC"</span><span class="token punctuation">,</span><br>
    					<span class="token string">&emsp;&emsp;"user_id"</span><span class="token punctuation">:</span>&emsp;<span class="token number">1</span><span class="token punctuation">,</span><br>
    					<span class="token string">&emsp;&emsp;"address"</span><span class="token punctuation">:</span>&emsp;<span class="token string">"3EL5SKSjEzFQDBmXA5JFbsZu48vKnNSdDH"</span><span class="token punctuation">,</span><br>
    					<span class="token string">&emsp;&emsp;"label"</span><span class="token punctuation">:</span>&emsp;<span class="token string">"random"</span><br>
  						<span class="token punctuation">&emsp;&emsp;}</span><br>
						<span class="token punctuation">}</span>
					</code>
					<code class="language-int"> 
						<span class="token comment" spellcheck="true"># create a new Bitcoin address</span><br>
						<span class="token operator">&gt;</span>&emsp;<span class="token variable">$block_io</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">get_new_address<span class="token punctuation">(</span></span><span class="token punctuation">)</span><span class="token punctuation">;</span><br>
						<span class="token punctuation">{</span><br>
  						<span class="token string">&emsp;"status"</span><span class="token punctuation">:</span><span class="token string"> "success"</span><span class="token punctuation">,</span><br>
  						<span class="token string">&emsp;"data"</span><span class="token punctuation">:</span><span class="token punctuation"> {</span><br>
    					<span class="token string">&emsp;&emsp;"network"</span><span class="token punctuation">:</span>&emsp;<span class="token string">"BTC"</span><span class="token punctuation">,</span><br>
    					<span class="token string">&emsp;&emsp;"user_id"</span><span class="token punctuation">:</span>&emsp;<span class="token number">1</span><span class="token punctuation">,</span><br>
    					<span class="token string">&emsp;&emsp;"address"</span><span class="token punctuation">:</span>&emsp;<span class="token string">"3EL5SKSjEzFQDBmXA5JFbsZu48vKnNSdDH"</span><span class="token punctuation">,</span><br>
    					<span class="token string">&emsp;&emsp;"label"</span><span class="token punctuation">:</span>&emsp;<span class="token string">"random"</span><br>
  						<span class="token punctuation">&emsp;&emsp;}</span><br>
						<span class="token punctuation">}</span>
					</code>
					<code class="language-int"> 
						<span class="token comment" spellcheck="true"># create a new Bitcoin address</span><br>
						<span class="token operator">&gt;</span><span class="token operator">&gt;</span>&emsp;block_io<span class="token punctuation">.</span><span class="token function">get_new_address<span class="token punctuation">(</span></span><span class="token punctuation">)</span><br>
						<span class="token punctuation">{</span><br>
  						<span class="token string">&emsp;"status"</span><span class="token punctuation">:</span><span class="token string"> "success"</span><span class="token punctuation">,</span><br>
  						<span class="token string">&emsp;"data"</span><span class="token punctuation">:</span><span class="token punctuation"> {</span><br>
    					<span class="token string">&emsp;&emsp;"network"</span><span class="token punctuation">:</span>&emsp;<span class="token string">"BTC"</span><span class="token punctuation">,</span><br>
    					<span class="token string">&emsp;&emsp;"user_id"</span><span class="token punctuation">:</span>&emsp;<span class="token number">1</span><span class="token punctuation">,</span><br>
    					<span class="token string">&emsp;&emsp;"address"</span><span class="token punctuation">:</span>&emsp;<span class="token string">"3EL5SKSjEzFQDBmXA5JFbsZu48vKnNSdDH"</span><span class="token punctuation">,</span><br>
    					<span class="token string">&emsp;&emsp;"label"</span><span class="token punctuation">:</span>&emsp;<span class="token string">"random"</span><br>
  						<span class="token punctuation">&emsp;&emsp;}</span><br>
						<span class="token punctuation">}</span>
					</code>
					<a href="">Ver más ejemplos</a>
				</div>
			</div>
		</div>
	</section>
	<section id="noticias">
		<div id="tittle-n">
			<h1>NOTICIAS</h1>
			<h3>Últimas noticias sobre criptomonedas</h3>           
		</div>
		<div id="cont-n" class="inner-wrap">
			<div id="year-news">
				2018
			</div>
			<section id="box-news">
				<div class="news">
					<div class="horizontal-line"></div>
					<div class="circle-n"></div>
					<div class="cont-n">
						<div class="date-n">
							<h1 class="m-date">Febrero</h1>
							<p>1</p> 
						</div>
						<div class="line-n"></div>
						<div class="text-n">
							<h2>67 Datos sobre el Bitcoin</h2>
							<p>El bitcóin y otras criptomonedas que se dispararon a finales de 2017</p>
						</div>
					</div>
				</div>
				<div class="news news-l">
					<div class="horizontal-line"></div>
					<div class="circle-n"></div>
					<div class="cont-n">
						<div class="date-n">
							<h1 class="m-date">Febrero</h1>
							<p>2</p> 
						</div>
						<div class="line-n"></div>
						<div class="text-n">
							<h2>La guerra contra el bitcoin</h2>
							<p>Los ministros de Finanzas francés, bruno Le Maire, y alemán,</p>
						</div>
					</div>
				</div>
				<div class="news">
					<div class="horizontal-line"></div>
					<div class="circle-n"></div>
					<div class="cont-n">
						<div class="date-n">
							<h1 class="m-date">Febrero</h1>
							<p>3</p> 
						</div>
						<div class="line-n"></div>
						<div class="text-n">
							<h2>El bitcoin la moneda del futuro</h2>
							<p>El bitcóin y otras criptomonedas que se dispararon a finales de 2017</p>
						</div>
					</div>
				</div>
			</section>
			<div id="see-news">
				VER MÁS NOTICIAS
			</div>
		</div>
	</section>
	@include('components.footer')
	<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/criptodev.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body onload="update1()">
	<?php include('components/header.php') ?>
	<section id="slider">
		<div id="img1-s" class="box-s">
			<div class="inner-wrap">
				<h1 class="text-s">LA SOLUCIÓN PARA EL DESAROLLO EN BLOCKCHAIN.</h1>
			</div>
		</div>
		<div id="img2-s"class="box-s">
			<div class="inner-wrap">
				<h1 class="text-s">MANTEN TUS AHORROS CONTIGO.</h1>
			</div>
		</div>
		<div id="img3-s"class="box-s">
			<div class="inner-wrap">
				<h1 class="text-s">NOSOTROS TRABAJAMOS POR Y PARA TI.</h1>
			</div>
		</div>
		<div id="nav-s">
		</div>
		<img id="triangle-s" src="images/home/triangle-s.svg">
	</section>
	<section id="ventajas">
		<div id="cont-v" class="inner-wrap">
			<div class="box-v">
				<img src="images/home/icon-v1.svg">
				<h1>SEGURIDAD Y ESTABILIDAD</h1>
				<P>Brindamos seguridad mediante llaves privadas personales para una mayor confianza al momento de hacer sus transacciones.</P>
			</div>
			<div class="box-v">
				<img src="images/home/icon-v2.svg">
				<h1>USABILIDAD</h1>
				<P>Servicio eficiente Intuitivo y facil de manejar.</P>
			</div>
			<div class="box-v">
				<img src="images/home/icon-v3.svg">
				<h1>SOPORTE ONLINE:</h1>
				<P>Atencion al Cliente las 24 horas todos los dias. Atento para solucionar tus problemas.</P>
			</div>
			<div class="box-v">
				<img src="images/home/icon-v4.svg">
				<h1>DUEÑO DE TUS MONEDAS:</h1>
				<P>Acceso total a todas las llaves privadas de las criptomoneda.</P>
			</div>
		</div>
	</section>
	<section id="banner">
		<div class="inner-wrap">
			<h1>"LA SOLUCION PARA PROFECIONALES Y EMPRESAS"</h1>
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
				<h1>CREA APLICACIONES USANDO SOLO 3 LINEAS DE CODIGO</h1>
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
			<h3>Ultimas noticias sobre CRIPTOMONEDAS</h3>           
		</div>
		<div id="cont-n" class="inner-wrap">
			<div id="new1-n" class="box-n">
				<img src="images/home/new1.png">
				<div class="sub-n">
					<div class="fecha-n">
						<h1>6</h1>
						<h2>Diciembre</h2>
					</div>
					<h4>Mark Yusko defiende su predicción de Bitcoin de $400000</h4>
				</div>
				<p>Mark Yusko, el inversionista multimillonario y fundador de Morgan Creek Capital, se unio a Bloomberg News para defender su predicción de que Bitcoin Valdrá $400,000 en largo plazo. La ahora famosa predicción de Yusko llegó a los titulares debido a su escala grandiosa, y el personal de recepción de Bloomberg tenía preguntas.</p>
				<a href="">MAS..</a>
			</div>
			<div id="new2-n"class="box-n">
				<img src="images/home/new2.png">
				<div class="sub-n">
					<div class="fecha-n">
						<h1>5</h1>
						<h2>Diciembre</h2>
					</div>
					<h4>Mark Yusko defiende su predicción de Bitcoin de $400000</h4>
				</div>
				<p>Mark Yusko, el inversionista multimillonario y fundador de Morgan Creek Capital, se unio a Bloomberg News para defender su predicción de que Bitcoin Valdrá $400,000 en largo plazo. La ahora famosa predicción de Yusko llegó a los titulares debido a su escala grandiosa, y el personal de recepción de Bloomberg tenía preguntas.</p>
				<a href="">MAS..</a>
			</div>
		</div>
	</section>
	<?php include('components/footer.php') ?>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/criptodev.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
</body>
</html>
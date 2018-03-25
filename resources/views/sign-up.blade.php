<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Sing-Up</title>
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/sing-up.css">
</head>
<body>
	@include('components.header')
	<section id="sing-up">
		<div class="box-s">
			<div class="inner-wrap">
				<form action="{{ route('register') }}" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				    <div class="alig-s{{ $errors->has('first_name') ? ' has-error' : '' }}">
				    	<img id="pw-s" src="images/sing-up/email-s.svg">
				    	<input class="into-text-s" type="text" name="first_name" placeholder="Nombre" value="{{ old('first_name') }}">
				    	@if ($errors->has('first_name'))
                                    <span class="help-block" style="font-size: 11pt">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
				    </div>
				    <div class="alig-s{{ $errors->has('last_name') ? ' has-error' : '' }}">
				    	<img id="pw-s" src="images/sing-up/email-s.svg">
				    	<input class="into-text-s" type="text" name="last_name" placeholder="Apellido" value="{{ old('last_name') }}">
				    	@if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
				    </div>
				    <div class="alig-s{{ $errors->has('email') ? ' has-error' : '' }}">
				    	<img id="em-s" src="images/sing-up/email-s.svg">
				    	<input class="into-text-s" type="email" name="email" placeholder="Tu Dirección Email" value="{{ old('email') }}">
				    	@if ($errors->has('email'))
                                    <span class="help-block" style="font-size: 11pt">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
				    </div>
				    <div class="alig-s{{ $errors->has('password') ? ' has-error' : '' }}">
				    	<img id="pw-s" src="images/sing-up/pass-s.svg">
				    	<input id="password" class="into-text-s" type="password" name="password" placeholder="Contraseña" value="{{ old('password') }}">
				    	@if ($errors->has('password'))
                                    <span class="help-block" style="font-size: 11pt">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
				    </div>
				    <div class="alig-s">
				    	<img id="rp-s" src="images/sing-up/repeat-s.svg">
				    	<input id="password-confirm" class="into-text-s" type="password" name="password_confirmation" placeholder="Repita Contraseña">
				    </div>
				    <input id="send-s" type="submit" value="ENVIAR">
				</form>
			</div>
		</div>
		<img id="triangle-s"src="images/footer-img/triangle-f.svg">
	</section>
	@include('components.footer')
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/criptodev.js"></script>
</body>
</html>
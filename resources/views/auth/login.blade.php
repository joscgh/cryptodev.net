<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    @include('components.header')
    <section id="login">
        <div class="box-l">
            <div class="inner-wrap">
                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="alig-l {{ $errors->has('email') ? ' has-error' : '' }}">
                        <img id="em-l" src="images/login/email-l.svg">
                        <input class="into-text-l" type="email" name="email" placeholder="Tu Dirección Email" value="{{ old('email') }}">
                        @if($errors->has('email'))
                            <span class="help-block" style="font-size: 12pt">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="alig-l {{ $errors->has('password') ? ' has-error' : '' }}">
                        <img id="pw-l" src="images/login/pass-l.svg">
                        <input class="into-text-l" type="password" name="password" placeholder="Contraseña" value="{{ old('password') }}">
                    </div>
                    @if($errors->has('password'))
                        <span class="help-block" style="font-size: 12pt">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <input id="send-l" type="submit" value="ENVIAR">
                </form>
            </div>
        </div>
        <img id="triangle-l" src="images/footer-img/triangle-f.svg">
    </section>
    @include('components.footer')
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/criptodev.js"></script>
</body>
</html>
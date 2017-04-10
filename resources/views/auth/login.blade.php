<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="production/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="production/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="production/assets/css/form-elements.css">
    <link rel="stylesheet" href="production/assets/css/style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Favicon and touch icons -->
    <title>Área Deportiva S.A.</title>
    <link rel="icon" href="production/icon.png"/>
</head>
<body>
<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>Bienvenido a Area Deportiva</strong></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Ingresa a nuestro sitio</h3>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form method="POST" action="{{ route('login') }}" accept-charset="UTF-8">

                            <div class="form-group  has-feedback {{ ($errors->has('username')) ? 'has-error' : '' }}">
                                <input class="form-username form-control" placeholder="Nombre de Usuario"
                                       autofocus="autofocus" name="username" type="text"
                                       value="{{ Request::old('username') }}">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                {{ ($errors->has('username') ? $errors->first('username') : '') }}
                            </div>
                            <div class="form-group has-feedback {{ ($errors->has('password')) ? 'has-error' : '' }}">
                                <input class="form-password form-control" placeholder="Password" name="password"
                                       value="" type="password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                {{ ($errors->has('password') ?  $errors->first('password') : '') }}

                            </div>

                            <input name="_token" value="{{ csrf_token() }}" type="hidden">
                            <button type="submit" class="btn">Ingresar</button>
                            {{--<br>--}}
                            {{--<form action="{{ route('users.create') }}">--}}
                            {{--<button type="submit" class="btn">Registarme</button>--}}
                            {{--</form>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Javascript -->
<script src="production/assets/js/jquery-1.11.1.min.js"></script>
<script src="production/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="production/assets/js/jquery.backstretch.min.js"></script>
<script src="production/assets/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="production/assets/js/placeholder.js"></script>
<![endif]-->

</body>

</html>
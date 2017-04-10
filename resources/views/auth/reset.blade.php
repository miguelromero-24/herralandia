<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="/production/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/production/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/production/assets/css/form-elements.css">
    <link rel="stylesheet" href="/production/assets/css/style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Favicon and touch icons -->
    <title>Área Deportiva S.A.</title>
    <link rel="icon" href="/production/icon.png"/>
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
                            <h3>Por motivos de seguridad debe elegir una contraseña</h3>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        {!! Form::open(['route' => ['reset.password'], 'id' => 'login']) !!}
                        <div class="form-group has-feeback {{ ($errors->has('password') ? 'has-error' : '') }}">
                            {!! Form::password('password', ['class' => 'form-control', 'onclick' => 'directivs()', 'placeholder' =>
                            'Ingrese nueva contraseña', 'onClick' => 'directivs()']) !!}

                        </div>

                        <div class="form-group has-feeback {{ ($errors->has('password2') ? 'has-error' : '') }}">
                            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmar contraseña',
                             'required' => "",'onclick' => 'directivs()', ]) !!}
                        </div>
                        {!! Form::hidden('id', $id) !!}
                        {!! Form::hidden('code', $code) !!}

                        {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Javascript -->
<script src="/production/assets/js/jquery-1.11.1.min.js"></script>
<script src="/production/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/production/assets/js/jquery.backstretch.min.js"></script>
<script src="/production/assets/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="/production/assets/js/placeholder.js"></script>
<![endif]-->

</body>

</html>




{{--<body class="login-page">--}}
{{--<div class="login-box">--}}
    {{--<div class="login-logo">--}}
        {{--<a href="#"><b>AreaDeportiva</b></a>--}}
    {{--</div><!-- /.login-logo -->--}}
    {{--<div class="login-box-body">--}}
        {{--<p class="login-box-msg">Cambio de Contrase&ntilde;a</p>--}}
        {{--@if (count($errors) > 0)--}}
            {{--<div class="alert alert-danger">--}}
                {{--<strong>Problemas</strong> para cambiar la contrase&ntilde;a--}}
                {{--<ul>--}}
                    {{--@foreach ($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@endif--}}
        {{--{!! Form::open(['route' => ['reset.password'], 'id' => 'login']) !!}--}}
        {{--<div class="form-group has-feeback {{ ($errors->has('password') ? 'has-error' : '') }}">--}}
            {{--{!! Form::password('password', ['class' => 'form-control', 'onclick' => 'directivs()', 'placeholder' =>--}}
            {{--'Ingrese nueva contraseña', 'onClick' => 'directivs()']) !!}--}}

        {{--</div>--}}

        {{--<div class="form-group has-feeback {{ ($errors->has('password2') ? 'has-error' : '') }}">--}}
            {{--{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmar contraseña',--}}
             {{--'required' => "",'onclick' => 'directivs()', ]) !!}--}}
        {{--</div>--}}
        {{--{!! Form::hidden('id', $id) !!}--}}
        {{--{!! Form::hidden('code', $code) !!}--}}

        {{--{!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}--}}
        {{--{!! Form::close() !!}--}}
    {{--</div><!-- /.login-box-body -->--}}
{{--</div>--}}
{{--</body>--}}

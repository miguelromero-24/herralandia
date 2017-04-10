@extends('mail.base')

@section('content')
    <tr>
        <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #2d2a26; text-align:left; line-height: 24px;">
            Activación de Cuenta
        </td>
    </tr>
    <!-- Spacing -->
    <tr>
        <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
    </tr>
    <!-- /Spacing -->
    <!-- content -->
    <tr>
        <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #7a6e67; text-align:left; line-height: 24px;">
            Bienvenido/a al Administrador de torneos de Areadeportiva, para activar su cuenta y empezar a utilizar el
            sistema, por favor visite el siguiente enlace:
        </td>
    </tr>
    <tr>
        <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #7a6e67; text-align:left; line-height: 24px;">
            <a href="{{ $link }}">Activar cuenta</a>
        </td>
    </tr>
    <tr>
        {{--<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #7a6e67; text-align:left; line-height: 24px;">--}}
        {{--<strong>Contraseña:</strong> ua_jb6G--}}
        {{--</td>--}}
    </tr>
@stop
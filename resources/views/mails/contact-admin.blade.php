<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <table width="800" cellpadding="5" border="0" align="center">
            <tbody>
                <tr>
                    <td style="border-bottom:2px solid #A58368;" width="400">
                        <p style="text-align: left">LOGO</p>
                    </td>
                    <td style="border-bottom:2px solid #A58368;" width="400">
                        <p style="text-align: right">
                            <a href="www.facebook.com">
                                <img src="{{asset('img/ico-facebook.png')}}" alt="Facebook">
                            </a>
                            <a href="www.instagram.com">
                                <img src="{{asset('img/ico-instagram.png')}}" alt="Instagram">
                            </a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="padding: 70px 0; border-bottom:2px solid #A58368;">
                        <p style="text-align: center"><strong>{{$datos->name}}</strong> quiere agendar una cita</p>
                        <p><strong>Correo: </strong> {{$datos->mail}}</p>
                        <p><strong>WhatsApp: </strong> {{$datos->phone}}</p>
                        <p><strong>Barbero: </strong> {{$datos->team_id}}</p>
                        <p><strong>Servicio: </strong> {{$datos->service_id}}</p>
                        <p><strong>Fecha de cita: </strong> {{$datos->date}}</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
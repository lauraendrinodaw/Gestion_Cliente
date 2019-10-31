<!DOCTYPE html>
<html>
<head>
<title>ClienteLog</title>
<meta charset="utf-8" />
<link href="{{ url('Assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="contenido">
        <table>
            <tr>
                <th scope="col">Nombre</th>
                <td scope="row">{{ $cliente->nombre }}</td>
                
            </tr>
            
            <tr>
                <th scope="col">Apellidos</th>
                <td scope="row">{{ $cliente->apellidos }}</td>
            </tr>
            
            <tr>
                <th scope="col">Fecha de nacimiento</th>
                <td scope="row">{{ $cliente->fecha_nacimiento}}</td>
                
            </tr>
            
            <tr>
                <th scope="col">Correo electronico</th>
                <td scope="row">{{ $cliente->correo_electronico }}</td>
            </tr>
            <tr>
                <th scope="col">Telefono</th>
                <td scope="row">{{ $cliente->telefono }}</td>
                
            </tr>
            
            <tr>
                <th scope="col">Dirección</th>
                <td scope="row">{{ $cliente->direccion }}</td>
            </tr>
            <tr>
                <th scope="col">Estado civil</th>
                <td scope="row">{{ $cliente->estado_civil }}</td>
            </tr>
            
            <tr>
                <th scope="col">Sueldo anual</th>
                <td scope="row">{{ $cliente->sueldo_anual}}</td>
                
            </tr>
            <tr>
                <th scope="col">IP</th>
                <td scope="row">{{ $cliente->ip}}</td>
                
            </tr>
            
            <tr>
                <th colspan="2"><a href="{{url('cliente' )}}"    class="btn btn-success">VOLVER</a></th>
            </tr>
        </table>
</div>

    <footer>
       <small>Laura Endrino Flores - 2019</small>
    </footer>
</body>
</html>
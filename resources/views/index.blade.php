<!DOCTYPE html>
<html>
<head>
<title>ClienteLog</title>
<meta charset="utf-8" />
<link href="{{ url('Assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="contenido">
    @isset($mensaje)
        <div class="alert alert-success" role="alert">
            {{$mensaje}}
        </div>
    @endisset
     @error('general')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <table class="table">
            <tr class="filters">
                <th class="brd">#</th>
                <th class="brd">Nombre</th>
                <th class="brd">Apellidos</th>
                <th class="brd">Fecha nacimiento</th>
                <th class="brd">Correo electronico</th>
                <th class="brd">Teléfono</th>
                <th class="brd">Dirección</th>
                <th class="brd" colspan="3">Acciones</th>
            </tr>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellidos}}</td>
                <td>{{$cliente->fecha_nacimiento}}</td>
                <td>{{$cliente->correo_electronico}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->direccion}}</td>
                <td><a href="{{url('cliente/' . $cliente->id )}}"    class="btn btn-success bt verbt">VER</td>
                <td><a href="{{url('cliente/' . $cliente->id .'/edit' )}}"    class="btn btn-success bt editbt">EDITAR</td>
                <td>
                    <form method="POST" action="{{url('cliente/'.$cliente->id)}}" class="destroy">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger bt deletebt" type="submit" value="ELIMINAR">
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    
    <form action="{{url('cliente/create')}}" method="GET" class="botoncrear">
        <input type="submit" class="btn btn-success nuevocl" value="Crear nuevo cliente"></input>
    </form>
</div>

    <footer>
       <small>Laura Endrino Flores - 2019</small>
    </footer>
</body>
<script src="{{ url('Assets/js/main.js') }}"></script>


</html>
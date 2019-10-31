<!DOCTYPE html>
<html>
<head>
<title>ClienteLog</title>
<meta charset="utf-8" />
<link href="{{ url('Assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="contenido">
            @error('general')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    <form action="{{ url('cliente') }}" method="post" class="formcrea">
        @csrf
        <input type="text"          class="form-control"    name ="nombre"      placeholder="Nombre"     
        value="{{old('nombre')}}"  minlength="2" maxlength="50"     size="70" required>
            @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <br>
        <input type="text"          class="form-control"    name="apellidos"  placeholder="Apellidos"       
        value="{{old('apellidos')}}"     size="70" required>
            @error('apellidos')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <br>
        <input type="date"          class="form-control"    name="fecha_nacimiento"  placeholder="Fecha de nacimiento"       
        value="{{ old('fecha_nacimiento') }}"     size="70" required>
            @error('fecha_nacimiento')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <br>
        <input type="text"          class="form-control"    name="clave"  placeholder="Clave de acceso"       
        value="{{ old('clave') }}"     size="70" required>
            @error('clave')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <br>
        <input type="email"          class="form-control"    name="correo_electronico"  placeholder="Correo electronico"       
        value="{{ old('correo_electronico') }}"     size="70" required>
            @error('correo_electronico')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <br>
        <input type="text"          class="form-control"    name="telefono"  placeholder="Telefono"       
        value="{{ old('telefono') }}"   maxlength="9"  size="70">
            @error('telefono')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <br>
        <input type="text"          class="form-control"    name="direccion"  placeholder="Dirección"       
        value="{{ old('direccion') }}"     size="70">
            @error('direccion')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <br>
        <input type="text"          class="form-control"    name="estado_civil"  placeholder="Estado civil"       
        value="{{ old('estado_civil') }}"     size="70">
            @error('estado_civil')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <br>
        <input type="number"          class="form-control"    name="sueldo_anual"  placeholder="Sueldo anual"       
        value="{{ old('sueldo_anual') }}"     size="70">
            @error('sueldo_anual')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <br>   
        <input type="submit" class="btn btn-info" value="Crear cliente"> <a href="{{url('cliente' )}}"    class="btn btn-success">VOLVER</a>
    </form>
   
</div>

    <footer>
       <small>Laura Endrino Flores - 2019</small>
    </footer>
</body>
</html>
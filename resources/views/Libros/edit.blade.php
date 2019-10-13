<!DOCTYPE html>
<html>
<head>
	<title>MODIFICACIOM LIBRO</title>
</head>
<body>

<center>
	<form method="POST" action="{{route('libro.update',$libro)}}">
		{{csrf_field()}}
		{{method_field('PUT')}}
		<label for="clave">CLAVE</label>
		<input type="text" name="clave" id="clave" value="{{old('clave',$libro->clave)}}">
		<br>
		<label for="nombre">NOMBRE</label>
		<input type="text" name="nombre" id="nombre" value="{{old('clave',$libro->nombre)}}">
		<br>
		<label for="autor">AUTOR</label>
		<select name="autor_id" id="autor">
			@foreach($autores as $autor)
			<option value="{{$autor->id}}">{{$autor->nombre}}</option>
			@endforeach
		</select>
		<br>
		<label for="editorial">EDITORIAL</label>
		<select name="editorial_id" id="editorial">
			@foreach($editoriales as $editorial)
			<option value="{{$editorial->id}}">{{$editorial->nombre}}</option>
			@endforeach
		</select>
		<br>
		<label for="genero">GENERO</label>
		<select name="genero_id" id="genero">
			@foreach($generos as $genero)
			<option value="{{$genero->id}}">{{$genero->nombre}}</option>
			@endforeach
		</select>
		<br>
		<label for="fecha">FECHA</label>
		<input type="date" name="fecha" id="fecha" value="{{old('clave',$libro->fecha)}}">
		<br>
		<button type="submit">GUARDAR</button>
	</form>
</center>
</body>
</html>
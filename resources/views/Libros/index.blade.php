<!DOCTYPE html>
<html>
<head>
	<title>LISTA DE LIBROS</title>
</head>
<body>

<center>
	<a href="{{route('libro.create')}}">ALTA DE LIBRO</a>
	<table border="3">
		<tr>
			<td>CLAVE</td>
			<td>NOMBRES</td>
			<td>FECHA</td>
			<td>AUTOR</td>
			<td>EDITORIAL</td>
			<td>GENERO</td>
			<td>MODIFICAR</td>
			<td>ELIMINAR</td>
		</tr>
		@foreach($libros as $libro)
		<tr>
			<td>{{$libro->clave}}</td>
			<td>{{$libro->nombre}}</td>
			<td>{{$libro->fecha}}</td>
			<td>{{$libro->autor->nombre}}</td>
			<td>{{$libro->editorial->nombre}}</td>
			<td>{{$libro->genero->nombre}}</td>
			<td><a href="{{route('libro.edit',$libro)}}">MODIFICAR</a></td>
			<td>
				<form method="POST" action="{{route('libro.delete',$libro)}}">
					{{csrf_field()}}
					{{method_field('DELETE')}}
					<button type="submit">ELIMINAR</button>
					
				</form>
			</td>
		</tr>
		@endforeach
	</table>

	<h1><a href="{{route('detalles.prestamos')}}">DETALLE DE PRESTAMOS</a></h1>
</center>
</body>
</html>
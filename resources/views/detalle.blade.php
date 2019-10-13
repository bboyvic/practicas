<!DOCTYPE html>
<html>
<head>
	<title>DETALLES</title>
</head>
<body>

<center>
	<h1>DETALLE DE PRESTAMOS</h1>
    
	<table border="5">
		<tr>
			<td>No</td>
			<td>Cliente</td>
			<td>Libro</td>
			<td>Genero</td>
			<td>Autor</td>
			<td>Fecha</td>
		</tr>
			@foreach ($detalles as $detalle)
        <tr>
             <td>{{$detalle->id}}</td>
             <td>{{$detalle->Prestamo->cliente->app}} {{$detalle->Prestamo->cliente->apm}} {{$detalle->Prestamo->cliente->nombres}}</td>
             <td>{{$detalle->Libro->clave}},{{$detalle->Libro->nombre}}</td>
             <td>{{$detalle->Libro->genero->nombre}}</td>
             <td>{{$detalle->Libro->autor->nombre}}</td>
             <td>{{$detalle->Prestamo->fecha}}</td>
        </tr>        
        @endforeach
	</table>
	<h1><a href="{{url()->previous()}}">REGRESAR</h1>
</center>
</body>
</html>
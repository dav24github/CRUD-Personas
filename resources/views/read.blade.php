<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Read</title>
	<style type="text/css">
		table,thead,th,tr,td{
			border-collapse: collapse;
			border: 1px solid black;
			padding-left: 1.5em;
		}
	</style>
</head>
<body>
	<br><br>
	<h3><a href="create">Create</a></h3>
	<br>
	<hr>
	<table style="width: 100%">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Edad</th>
			<th>Show</th>
			<th>Update</th>
			<th>Delete</th>
		</thead>
		@foreach($user as $users)
		<tr>
			<td>{{$users->id}}</td>
			<td>{{$users->Nombre}}</td>
			<td>{{$users->Direccion}}</td>
			<td>{{$users->Telefono}}</td>
			<td>{{$users->Edad}}</td>
			<td><a href="show/{{$users->id}}">show</a></td>
			<td><a href="edit/{{$users->id}}">update</a></td>
			<td><a href="delete/{{$users->id}}">delete</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>
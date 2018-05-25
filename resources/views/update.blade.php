<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Update</title>
</head>
<body>
	{{Form::model($user, ['method'=>'patch', 'action'=>['testing@update',$user->id]])}} 
	 
	{{Form::label('Nombre','Nombre')}}
	{{Form::text('Nombre')}}<br>

	{{Form::label('Direccion','Direccion')}}
	{{Form::text('Direccion')}}<br>

	{{Form::label('Telefono','Telefono')}}
	{{Form::text('Telefono')}}<br>

	{{Form::label('Edad','Edad')}}
	{{Form::text('Edad')}}<br>
 
 	{{Form::submit("Update")}}<br>

	{{Form::close()}}
</body>
</html>
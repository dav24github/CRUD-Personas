<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create</title>
</head>
<body>
	<form action="store" method="post">
		<label for="Nombre">Nombre</label>
		<input type="text" name="Nombre"><br> 
		<label for="Direccion">Direccion</label>
		<input type="text" name="Direccion"><br> 
		<label for="Telefono">Telefono</label>
		<input type="text" name="Telefono"><br> 
		<label for="Edad">Edad</label>
		<input type="text" name="Edad"><br> 
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<label for=""></label>
		<input type="submit" name="submit" name="submit">
	</form>
</body>
</html>
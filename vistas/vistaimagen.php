<!DOCTYPE html>
<html>
<head>
	<title>imagen</title>
</head>
<body>
	<form  action="envio_imagen.php" method="POST"  enctype= "multipart/form-data">
		<input type="file" name="imagen" required accept="image/x-png,image/gif,image/jpeg" >
		<input type="submit" name="envio" value="enviar">
		

	</form>

</body>
</html>
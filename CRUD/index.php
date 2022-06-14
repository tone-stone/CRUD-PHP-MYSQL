<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="estilos.css">
	<title>Neuropsicologia</title>
</head>
<body>
	<div class="container">
		<form action="" class="login">
			
			<h2>Iniciar <br> Sesion</h2>
			<div class="inputs">
				<i class="fas fa-user"></i><input type="text" placeholder="Usuario">
			</div>
			<div class="inputs">
				<i class="fas fa-key"></i> <input type="password" placeholder="Contraseña">
			</div>
			<div class="btn">
				<input onclick="location.href = './alumno.php' "  type="submit" value="Entrar">
			</div>
			<div class="resetpassword">
				<p>olvidaste tu contraseña? <a href="#">click aqui</a></p>
			</div>

		</form>
	</div>
	
</body>
</html>
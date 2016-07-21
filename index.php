<!DOCTYPE html>
<html>
<head>
	<title>formularios</title>
	<meta name="viewport" content="witdh=device-width, initial-scale=1.0" >
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<div class="wrapper paso-1">
		<header class="header">
			<div class="contain">
				<h1>Logo</h1>
			</div>
		</header>
		<nav class="navbar">
			<span class="item"><span>1</span> <span>Datos personales</span></span>
			<span class="item"><span>2</span> <span>Datos personales</span></span>
			<span class="item"><span>3</span> <span>Finalizar</span></span>
		</nav>
		<div class="contain content">
			<section>
				<h2>¡HOLA!</h2>
				<p>En pocos minutos pasaras a formar parte de nuestra comunidad</p>
			</section>
			<form class="form">
				<div class="col file">
					<span class="icon-camera cam"></span>
					<input type="file" name="">
				</div>
				<div class="col">
					<label>Nombre<span class="tooltip">?</span></label>
					<input type="text" class="atributo" name="">
					<label>Usuario<span class="tooltip">?</span></label>
					<input type="text" class="atributo" name="">
					<label>Email<span class="tooltip">?</span></label>
					<input type="email" class="atributo" name="">
				</div>
				<div class="col">
					<label>Sexo<span class="tooltip">?</span></label>
					<select class="atributo"></select>
					<label>Contraseña<span class="tooltip">?</span></label>
					<input type="password" class="atributo" name="">
					<label>Fecha de nacimiento<span class="tooltip">?</span></label>
					<div class="fecha_nacimiento">
						<input type="text" class="small" name="">
						<input type="text" class="small" name="">
						<input type="text" class="small" name="">
					</div>
				</div>
				<div class="col all">
					<input type="checkbox" name="">
					<span>Lorem ipsum dolor si et amet</span>
				</div>
				<input type="submit" value="Siguiente" name="">
			</form>
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Formulario Guardia</title>
    
	<link rel="stylesheet" href="estilos.css">
    
</head>
<body>
	<body style="background-color:#00FFFF;"></body>
	<header>
        
		<div class="wrapp">
			<div class="logo">
				<a href="#"><img src="https://logodownload.org/wp-content/uploads/2016/10/php-logo.png" alt="FalconMasters"></a>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="guardias.php">Guardias</a>
					<li><a href="Reo.php">Reo</a>
					<li><a href="Contacto.php">Contacto</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Bienvenidos Al Formulario De Guardia Del Cereso</h1>
			</div>
    
                   <center><p> Bienvenido Al Formulario Guardia.<p>
                    <center><p>Ingrese los datos que se piden<p>
	<style>
		body{font-family: Arial; background-color: #F5B041 ; box-sizing: border-box;}

		form{
			background-color: white;
			border-radius: 3px;
			color: #999;
			font-size: 0.8em;
			padding: 65px;
			margin: 0 auto;
			width: 300px;
		}

		input, textarea{
			border: 0;
			outline: none;

			width: 280px;
		}

		.field{
			border: solid 1px #ccc;
			padding: 10px;

			
		}

		.field:focus{
			border-color: #18A383;
		}

		.center-content{
			text-align: center;
		}

	</style>
</head>
<body>
	<form action="">
		<p>Nombre:</p>
		<input type="text" class="field"> <br/>
        
        <p>Apellido</p>
		<input type="text" class="field"> <br/>
        
        <p>Edad:</p>
		<input type="text" class="field"> <br/>
        
        <p>Telefono:</p>
		<input type="text" class="field"> <br/>
        
        <p>Fecha de Nacimiento:</p>
		<input type="text" class="field"> <br/>

		<p>Correo electrónico:</p>
		<input type="text" class="field"> <br/>

		<p>Direccion:</p>
		<input type="text" class="field"> <br/>

		<p>Mensaje De Oficina</p>
		<textarea class="field">Gracias por llenar el formulario,en breve nos comunicaremos con usted.</textarea> <br/>

		<p class="center-content">
			<input type="submit" class="btn btn-green" value="Enviar Formulario">
		</p>
        
        <p class="center-content">
			<input type="submit" class="btn btn-green" value="Cancelar Formulario">
		</p>

	</form>
				
</body>
</html>
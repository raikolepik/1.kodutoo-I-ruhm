<?php

		// user_form.php
		// jutum�rkide vahele input elemendi v��rtus
		
		//echo $_POST["email"];
		
		//echo $_POST["password"];
		
		$email_error = "";
		$password_error = "";
		//$password_len_error = "";
		
		//kontrolli ainult siis, kui kasutaja vajutab logi sisse nuppu
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST["email"]))	{
				$email_error = "viga";
			}	
			if(empty($_POST["password"])) {
				$password_error = "Teie parooli l�nk on t�hi";
			}
				//parool ei saa olla t�hi, kontrollime pikkust
			if(strlen($_POST["password"]) < 8 ) {
				$password_error = "Peab olema v�hemalt 8 s�mbolit pikk";
			}
		}
?>
<html>
	<head>
	 <title>EvoGlass</title>
	</head>
	<body>
	
		<h2>Login</h2>
		<form action="User_form.php" method="post">
		
		<input name="email" type="email" placeholder="E-post">* <?php echo $email_error; ?> <br> <br> 
		<input name="password" type="password" placeholder="Password">	
		
		<input type="submit" value="logi sisse">
		</form>
		<h2>Sign up</h2>
		<form action="User_form.php" method="post">
		
		<input name="isikukood" type="text" placeholder="isikukood">* <?php echo $email_error; ?> <br> <br> 
		<input name="test" type="text" placeholder="vanus"> <br> <br>
		<input name="test1" type="text" placeholder="sugu"> <br> <br> 	
		
		<input type="submit" value="logi sisse">		
	</body>
</html>
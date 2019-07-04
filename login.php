<?php session_start();
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Paper Stack</title>
<link rel="stylesheet" type="text/css" href="css/login.css" />
</head>
<body>
<div class="container">
	<section id="content">
		<form method="post" action="verif_autentification.php">
			<h1>Login </h1>
			<div>
				<input type="text" name="id" id="username" />
			</div>
			<div>
				<input type="password" name="motpass" id="password"  />
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="../css/stile.css">
</head>
<body style="background-color:#ebebeb;">
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input type="text" name="uname" placeholder="Usuário"><br><hr><br>

     	<input type="password" name="password" placeholder="Senha"><br><hr><br>
     	<br>

     	<button type="submit">Login</button>
     	<br>
     	<a href="signup.php" class="ca">Criar uma conta</a>
     	<br>
     </form>
</body>
</html>
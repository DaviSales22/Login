<!DOCTYPE html>
<html>
<head>
	<title>Criando conta</title>
	<link rel="stylesheet" type="text/css" href="../css/stile.css">
</head>
<body style="background-color:#ebebeb;">
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>


     	<?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	<?php } ?>


     	<?php if (isset($_GET['name'])) { ?>
     		
     		<input type="text" name="name" placeholder="Nome" value="<?php echo $_GET['name']; ?>"><br><hr>
     	<?php }else{ ?>
     		<input type="text" name="name" placeholder="Nome"><br><hr>
     	<?php } ?>	 


     	<?php if (isset($_GET['uname'])) { ?>
     		
     		<input type="text" name="uname" placeholder="Usuário" value="<?php echo $_GET['uname']; ?>"><br><hr>
     	<?php }else{ ?>
     		<input type="text" name="uname" placeholder="Usuário"><br><hr>
     	<?php } ?>	 



     	<input type="password" name="password" placeholder="Senha"><br><hr><br>

     	<input type="password" name="re_password" placeholder="Repita a senha"><br><hr><br>

     	<br>

     	<button type="submit">Criar</button>
     	<br>
     	<a href="index.php" class="ca">Já tenho uma conta</a>
     	<br>
     </form>
</body>
</html>
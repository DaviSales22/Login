
 <?php 
session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../css/styl.css">
</head>
<body style="background-color:#ebebeb;">

    <header>
        <div class="header"></div>
    </header>
    <?php 
            if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
            if ($_SESSION['user_name'] === 'admin'){
            $_SESSION['money'] = "1000";
                echo "<h4>Você é admin</h4>";
            }
            else{
                echo "<h4>Você não é admin</h4>";
                $_SESSION['money'] = "0";
             }
     ?>

    <div class="action">
        <div class="profile" onclick="menuToggle();">
            <img src="../images/user.png" style="max-width: 80px;">
        </div>
        <div class="menu">

            <h3>
                <?php echo $_SESSION['name']; ?>
            </h3>
            <ul>
                <li>
                    <img src="../images/profile.png">
                    <a href="#">Meu perfil</a>
                </li>
                
                <li><img src="../images/Edit-Profile.png">
                    <a href="#">Editar perfil</a>
                </li>
                
                <li>
                    <img src="../images/question.png">
                    <a href="#">Ajuda</a>
                </li>
                
                <li>
                    <img src="../images/settings.png">
                    <a href="#">Configurações</a>
                </li>
                <li>
                    <img src="../images/log-out.png">
                    <a href="../PHPS/index.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="wallets" >
        <p class="saldo">Saldo na carteira:
            <h2 >R$ <?php echo $_SESSION['money']; ?></h2>
            <img  class="wallet"src="../images/wallet.png">
        </p>
    </div>



     <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>
</body>
</html>



<?php

}else{
     header("Location: ../PHPS/index.php");
     exit();
}
 ?>

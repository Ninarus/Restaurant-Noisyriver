<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ./');
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Restaurant Noisy River</title>
		<!-- Reset -->
		<link rel="stylesheet" href="./css/reset.css" />
		<link rel="stylesheet" href="./css/base.css" />
		<!--Блоки -->
		<link rel="stylesheet" href="./css/blocks/btn.css" />
		<link rel="stylesheet" href="./css/blocks/header.css" />
		<link rel="stylesheet" href="./css/blocks/home.css" />
		<link rel="stylesheet" href="./css/blocks/contacts1.css" />
		<link rel="stylesheet" href="./css/blocks/carusel.css" />
		<link rel="stylesheet" href="./css/blocks/boot.css" />
		<link rel="stylesheet" href="./css/blocks/footer.css" />
        <link rel="stylesheet" href="./css/blocks/kabgost.css" />
        
        <link rel="icon" href="img/icon.ico.png" type="image/x-icon">
		
		<!--Шрифты -->
		<link rel="stylesheet" href="./css/fonts/Georgia/stylesheet.css" />
		<link rel="stylesheet" href="./css/fonts/Lato/stylesheet.css" />
	</head>
		<header class="header">
			<div class="container">
				<div class="header-row">
					<div class="header-logo">Noisy River</div>
					<nav class="header-nav">
						<ul>
							<li><a href="index.html">Главная</a></li>
							<li><a href="menu.html">Меню</a></li>
							<li><a href="afisha.html">Афиша</a></li>
							<li><a href="bronirlogin.php">Бронирование</a></li>
						</ul>
					</nav>
               <div class="header-login">
						 <a href="vendor/logout.php" class="btn">Выход</a>
					</div>
                </div>
			</div>
		</header>
<body>

    <!-- Профиль -->
  <div class="profile-g">
    <form>
        <a>Фамилия:</a><h2><?= $_SESSION['user']['surname'] ?></h2>
        <a>Имя:</a><h2><?= $_SESSION['user']['name'] ?></h2>
        <a>Ваш почтовый адрес:</a><h2><?= $_SESSION['user']['email'] ?></h2>
    </form>
    <h1>Ваша скидка на весь чек</h1>
    <div class="sale">
    <div class="sale-gif">
     <img src="img/barcode.gif">
     </div>
     </div>
     <div class="sale-text">
         <h3>Покажите штрих-код официанту при оплате заказа</h3>
     </div>
      </div>
     
     
     
</body>
</html>
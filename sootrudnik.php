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
        <link rel="stylesheet" href="./css/blocks/kabsotr.css" />
		
		<!--Шрифты -->
		<link rel="stylesheet" href="./css/fonts/Georgia/stylesheet.css" />
		<link rel="stylesheet" href="./css/fonts/Lato/stylesheet.css" />
				
        <link rel="icon" href="img/icon.ico.png" type="image/x-icon">
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
							<li><a href="bronir.html">Бронирование</a></li>
						</ul>
					</nav>
               	<div class="header-login">
						<a href="vendor/sotrout.php" class="btn">Выход</a>
					</div>
                </div>
			</div>
		</header>
    <!-- Профиль -->
<body>
   <div class="profile-sotr">
    <form>
       <p>Фамилия сотрудника:</p> <h2><?= $_SESSION['user']['surname'] ?></h2>
        <p>Логин сотрудника:</p><h2><?= $_SESSION['user']['login'] ?></h2>
    </form>
</div>
 <a href="kalc.php" class="btn">Калькуляция</a>
</body>
</html>
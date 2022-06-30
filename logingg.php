<?php
session_start();

if ($_SESSION['klient']) {
    header('Location: profile.php');
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
        <link rel="stylesheet" href="./css/blocks/logingg.css" />
        
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
							<li><a href="bronir.html">Бронирование</a></li>
						</ul>
					</nav>
					<div class="header-login">
						<a class="header-login-link" href="login.html">Войти</a>
						<a href="register.php" class="btn">Регистрация</a>
					</div>
				
				</div>
			</div>
		</header>
		
<!-- Форма авторизации -->
<body>
    <div class="gost">
        <section>
		       <div class="frame">
                <h1>Вход в личный кабинет</h1></div>
		</section>
        </div>

    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="login" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button> 
        <p>
            У вас нет аккаунта? - <a href="register.php"><u>Зарегистрируйтесь</u></a>!
        </p>
  
        
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
 


</body>
</html>
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
		
		<link rel="stylesheet" href="./css/blocks/kalcul.css"/>
	    <link rel="stylesheet" href="./css/blocks/header.css" />
		<link rel="stylesheet" href="./css/blocks/btn.css" />
		<link rel="stylesheet" href="./css/blocks/header.css" />
		
		<link rel="icon" href="img/icon.ico.png" type="image/x-icon">
		
		
</head>
<body>
        <header class="header">
			<div class="container">
				<div class="header-row">
					<div class="header-logo">Noisy River</div>
				
               	<div class="header-login">
						<a href="sootrudnik.php" class="btn">Назад</a>
					</div>
                </div>
            </div>
    </header>
         

<div class="kalc">
 <form action="kalc.php" method="POST">
Выберите блюда:<br>

<?php

$conn = mysqli_connect("localhost", "root", "root", "rest");
$result = mysqli_query($conn, "SELECT * FROM bluda");
while ($row = mysqli_fetch_row($result)) {
echo("<input type='checkbox' id='q$row[0]' value='$row[2] $row[1]'>$row[1]<br>");
}
?>

<input class="btn" type="button" id="btn" value="расчет" onclick="calc()" />
<br>
<span id='vivod'></span><br>
</form>


    <?php
$conn = mysqli_connect("localhost", "root", "root", "rest");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}

?>
<form id="form" name="form" method="POST"  action=""><br>
<input type="hidden"  name="menu" value="<?php echo $a['name']?>"  /><br>
</form>
    <script src="main.js"></script>
    </div>
       </body>     
</html>

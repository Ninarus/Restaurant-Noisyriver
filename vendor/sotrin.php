<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = ($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `rabotniki` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

     $user = mysqli_fetch_assoc($check_user);

       $_SESSION['user'] = [
           "id_r" => $user['id_r'],
         "surname" => $user['surname'],
         "login" => $user['login']
      ];

    header('Location: ../sootrudnik.php');

   } 
    else {
        $_SESSION['message'] = 'Не верный логин или пароль';
     header('Location: ../loginsotr.php');
    }
   ?>

    <pre>
    <?php
   print_r($check_user);
   print_r($user);
    ?>
  </pre> 

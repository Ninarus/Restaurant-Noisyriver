<?php
session_start();
unset($_SESSION['rabotniki']);
header('Location: ../loginsotr.php');
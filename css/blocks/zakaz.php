<?php
include 'connect.php';
$text = $_POST['text'];

$sql = "INSERT INTO text (id_blud) VALUES ('')";
$conn->query($sql);
<?php

require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/bd.config.php";
require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/info.config.php";
$id = $_GET['id'];


$id = trim($id);

$sql = "UPDATE users SET activated='1' WHERE id='$id'";
if($connect->query($sql)){
    echo "<h1> Пользователь подтвержден </h1>";
    header('Location: ' . $home);
} else{
    echo "Произошло фиаско";
//    echo "<br>";
//    echo $connect->error;
}
$connect->close();
exit();
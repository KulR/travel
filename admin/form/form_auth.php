<?php

require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/info.config.php";
require $_SERVER['DOCUMENT_ROOT'] . "/travel/classes/Db.php";
$login = $_POST['name'];
$password = $_POST['password'];

$login = trim($login);
$password = trim($password);
$hash_password = hash("sha256", $password);

$sql_login = "SELECT * FROM users where login='$login'";

$result = Db::getdbconnnect()->query($sql_login);

while($row = $result -> fetch_assoc()){
    if($row['password'] == $hash_password){
        if($row['activated']){
            echo "<h1>Всё круто, вы авторизованы на нашем ресурсе</h1>";
            session_start();
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            header('Location: ' . $home);
        } else {
            echo "<h1>Похоже вы не подтвердили регистрацию на нашем ресурсе</h1>";
        }
    } else {
        echo "<h1>Не правильно введен пароль!</h1> $back $back_timer";
    }
}
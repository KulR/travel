<?php
require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/info.config.php";
require $_SERVER['DOCUMENT_ROOT'] . "/travel/classes/Db.php";
$login = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$login = trim($login);
$email = trim($email);


$pattern_login = '/\w{3,100}/';
$pattern_mail = '/\w+@\w+\.\w+/';
$pattern_password = '/\w{7,100}/';


if(preg_match($pattern_login, $login) &&
    preg_match($pattern_mail, $email) &&
    preg_match($pattern_password, $password)){

    $password = hash('sha256', $password);
//    echo $password;

    $sql_check = "SELECT * FROM users where email='$email'";
    $result = Db::getdbconnnect() -> query($sql_check);

    while($row = $result -> fetch_assoc()){
        echo "На ресурсе уже есть пользователь с такой почтой";
        die();
    }

    $sql_create_user = "INSERT INTO users VALUES (NULL, '$email', '$login', '$password', 'false')";

    if(Db::getdbconnnect() -> query($sql_create_user)){
        echo "<h1> Пользователь успешно зарегестрирован на этом ресурсе </h1>
                <h5> Нужно подтвердить свою почту, проверьте почтовый ящик</h5>";
        echo " $back $back_timer";
    } else{
        echo "Error: {$sql_create_user}" . DB::getdbconnnect()->error;
        Db::getdbconnnect()->close();
    }
} else {
    echo "У вас что-то не заполнено по правилам этого форума";
    if(!preg_match($pattern_login, $login)){
        echo "Возможно ваш логин слишком короткий";
    }
    if(!preg_match($pattern_mail, $email)){
        echo "Вы указали невалидную почтуфф";
    }
    if(!preg_match($pattern_password, $password)){
        echo "Ваш пароль не соответствует правилам сайта";
    }
}

//
//$ans = $_GET['choose'];
//$id = $_GET['id'];
//$anchor = $_GET['anchor'];
//$content = $_GET['content'];
//$ordera = trim($_GET['ordera']);
//
//if($ordera == "") {
//    $ordera = $anchors_full['ordera'][count($anchors_full['ordera']) - 1] + 2;
//}
//
//if($ans == 'ins'){
//    $sql = "INSERT INTO anchors VALUES (NULL, '$anchor', '$content', '$ordera')";
//    if($connect->query($sql)){
//        echo "<h1> Новая запись успешно загружена </h1>";
//    } else{
//        echo "Произошло фиаско";
//    }
//    $connect->close();
//    exit();
//}
//
//if($ans == 'del'){
//    $id = trim($id);
//    $sql = "DELETE FROM anchors WHERE id='$id'";
//    if($connect->query($sql)){
//        echo "<h1> Запись была успешно удалена </h1> $back $back_timer";
//    } else{
//        echo "Произошло фиаско";
//    }
//    $connect->close();
//    exit();
//}
//
//if($ans == 'update'){
//    $id = trim($id);
//    $sql = "UPDATE anchors SET anchor='$anchor', content='$content', ordera='$ordera' WHERE id='$id'";
//    if($connect->query($sql)){
//        echo "<h1> Запись была успешно отредактирована </h1> $back $back_timer";
//    } else{
//        echo "Произошло фиаско";
//    }
//    $connect->close();
//    exit();
//}
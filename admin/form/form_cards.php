<?php
require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/bd.config.php";
require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/info.config.php";
require $_SERVER['DOCUMENT_ROOT'] . "/travel/classes/Validate.php";
require $_SERVER['DOCUMENT_ROOT'] . "/travel/classes/Db.php";
$ans = $_POST['choose'];
$id = trim($_POST['id']);

$header = $_POST['header'];
$alt = $_POST['alt'];
$content = $_POST['content'];
$ordera = trim($_POST['ordera']);

if($ordera == "") {
    $ordera = $cards['ordera'][count($cards['ordera']) - 1] + 2;
}

if($ans == 'ins'){
    $upload_name = uniqid() . $_FILES['picture']['name'];
//    $path = "img/upload/{$upload_name}";
    $upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/travel/img/upload/";
    $relative_path = "img/upload/" . $upload_name;
    $upload_file = $upload_dir . $upload_name;

//    if($_FILES['picture']['size'] >= 20000000){
//        echo("<h5 class='has-text-danger'> Слишком большой файл! </h5>");
//        die();
//    }
    echo(Validate::checksize($_FILES['picture']));

//    if($_FILES['picture']['type'] == 'jpg' || $_FILES['picture']['type'] == 'jpeg'
//        || $_FILES['picture']['type'] == 'png'){
//        echo("<h5 class='has-text-danger'> Неправильный формат файла! </h5>");
//        die();
//    }
    echo(Validate::checkpicture($_FILES['picture']));

    if(move_uploaded_file($_FILES['picture']['tmp_name'], $upload_file)){
        echo("<h5 class='has-text-primary'> Все ок! </h5>");
    } else {
        echo("<h5 class='has-text-danger'> Что-то не так! </h5>");
    }

    $sql = "INSERT INTO cards VALUES (NULL, '$relative_path', '$alt', '$header', '$content', '$ordera')";
    if(Db::getdbconnnect()->query($sql)){
        echo "<h1> Новая запись успешно загружена </h1> $back $back_timer";
    } else{
        echo "Произошло фиаско";
    }
    $connect->close();
    exit();
}

if($ans == 'del'){
    $sql_path = "SELECT img_path FROM cards WHERE id='$id'";
    $result = Db::getdbconnnect()->query($sql_path);
    while($row = $result -> fetch_assoc()){
        echo("картинка успешно удалена");
        echo("<br>");
        unlink($_SERVER['DOCUMENT_ROOT'] . "/travel/" . $row['img_path']);
    }
    $sql_del = "DELETE FROM cards WHERE id='$id'";
    if(Db::getdbconnnect()->query($sql_del)){
        echo "<h1> Запись была успешно удалена </h1> $back $back_timer";
    } else{
        echo "Произошло фиаско";
    }
    $connect->close();
    exit();
}

if($ans == 'update'){
    $sql_path = "SELECT img_path FROM cards WHERE id='$id'";
    $result = Db::getdbconnnect()->query($sql_path);
    while($row = $result -> fetch_assoc()){
        echo("картинка успешно удалена");
        echo("<br>");
        unlink($_SERVER['DOCUMENT_ROOT'] . "/travel/" . $row['img_path']);
    }
    $sql_del = "DELETE FROM cards WHERE id='$id'";
    if(Db::getdbconnnect()->query($sql_del)){
        echo "<h1> Запись была успешно удалена </h1> $back $back_timer";
    } else{
        echo "Произошло фиаско";
    }

    $upload_name = uniqid() . $_FILES['picture']['name'];
    $upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/travel/img/upload/";
    $relative_path = "img/upload/" . $upload_name;
    $upload_file = $upload_dir . $upload_name;

    echo(Validate::checksize($_FILES['picture']));
    echo(Validate::checkpicture($_FILES['picture']));

    if(move_uploaded_file($_FILES['picture']['tmp_name'], $upload_file)){
        echo("<h5 class='has-text-primary'> Все ок! </h5>");
    } else {
        echo("<h5 class='has-text-danger'> Что-то не так! </h5>");
    }

    $sql = "INSERT INTO cards VALUES (NULL, '$relative_path', '$alt', '$header', '$content', '$ordera')";
    if(Db::getdbconnnect()->query($sql)){
        echo "<h1> Новая запись успешно отредактирована </h1> $back $back_timer";
    } else{
        echo "Произошло фиаско";
    }
    $connect->close();
    exit();

//    $sql = "UPDATE cards SET anchor='$anchor', content='$content', ordera='$ordera' WHERE id='$id'";
//    if($connect->query($sql)){
//        echo "<h1> Запись была успешно отредактирована </h1> $back $back_timer";
//    } else{
//        echo "Произошло фиаско";
//    }
//    $connect->close();
//    exit();
}
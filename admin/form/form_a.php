<?php
require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/bd.config.php";
require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/info.config.php";
$ans = $_GET['choose'];
$id = $_GET['id'];
$anchor = $_GET['anchor'];
$content = $_GET['content'];
$ordera = trim($_GET['ordera']);

if($ordera == "") {
    $ordera = $anchors_full['ordera'][count($anchors_full['ordera']) - 1] + 2;
}

if($ans == 'ins'){
    $sql = "INSERT INTO anchors VALUES (NULL, '$anchor', '$content', '$ordera')";
    if($connect->query($sql)){
        echo "<h1> Новая запись успешно загружена </h1> $back $back_timer";
    } else{
        echo "Произошло фиаско";
    }
    $connect->close();
    exit();
}

if($ans == 'del'){
    $id = trim($id);
    $sql = "DELETE FROM anchors WHERE id='$id'";
    if($connect->query($sql)){
        echo "<h1> Запись была успешно удалена </h1> $back $back_timer";
    } else{
        echo "Произошло фиаско";
    }
    $connect->close();
    exit();
}

if($ans == 'update'){
    $id = trim($id);
    $sql = "UPDATE anchors SET anchor='$anchor', content='$content', ordera='$ordera' WHERE id='$id'";
    if($connect->query($sql)){
        echo "<h1> Запись была успешно отредактирована </h1> $back $back_timer";
    } else{
        echo "Произошло фиаско";
    }
    $connect->close();
    exit();
}
<?php
require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/bd.config.php";

$back = "<p> <a href=\"javascript: history.back()\"> Вернуться назад </a> </p>";

$back_timer = "<script>
setTimeout(() =>window.history.back(), 5000);
</script>";

if($result = $connect-> query("SELECT * FROM keywords")){
    $keywords = [];
    while ($row = $result->fetch_assoc()){
        array_push($keywords, $row['keywords']);
    }
} else{
    echo("произошла ошибка запроса");
}

if($result = $connect-> query("SELECT * FROM anchors ORDER BY ordera")){
    $anchors = ['anchor'=>[], 'content'=>[]];

    while ($row = $result->fetch_assoc()){
        array_push($anchors['anchor'], $row['anchor']);
        array_push($anchors['content'], $row['content']);
    }
} else{
    echo("произошла ошибка запроса");
}

if($result = $connect-> query("SELECT * FROM anchors ORDER BY ordera")){
    $anchors_full = ['id'=>[], 'anchor'=>[], 'content'=>[], 'ordera'=>[]];

    while ($row = $result->fetch_assoc()){
        array_push($anchors_full['id'], $row['id']);
        array_push($anchors_full['anchor'], $row['anchor']);
        array_push($anchors_full['content'], $row['content']);
        array_push($anchors_full['ordera'], $row['ordera']);
    }
} else{
    echo("произошла ошибка запроса");
}

if($result = $connect-> query("SELECT * FROM parag")){
    $parag = [];
    while ($row = $result->fetch_assoc()){
        array_push($parag, $row['content']);
    }
} else{
    echo("произошла ошибка запроса");
}

if($result = $connect-> query("SELECT * FROM parag")){
    $parag_full = ['id'=>[], 'content'=>[]];
    while ($row = $result->fetch_assoc()){
        array_push($parag_full['id'], $row['id']);
        array_push($parag_full['content'], $row['content']);
    }
} else{
    echo("произошла ошибка запроса");
}

if($result = $connect-> query("SELECT * FROM reasons ORDER BY ordera")){
    $reasons = ['emoji'=>[], 'reason'=>[]];

    while ($row = $result->fetch_assoc()){
        array_push($reasons['emoji'], $row['emoji']);
        array_push($reasons['reason'], $row['reason']);
    }
} else{
    echo("произошла ошибка запроса");
}

if($result = $connect-> query("SELECT * FROM cards ORDER BY ordera")){
    $cards = ['country'=>[], 'img_path'=>[], 'alt'=>[], 'title'=>[], 'content'=>[]];

    while ($row = $result->fetch_assoc()){
        array_push($cards['country'], $row['country']);
        array_push($cards['img_path'], $row['img_path']);
        array_push($cards['alt'], $row['alt']);
        array_push($cards['title'], $row['title']);
        array_push($cards['content'], $row['content']);
    }
} else{
    echo("произошла ошибка запроса");
}

if($result = $connect-> query("SELECT * FROM faq ORDER BY ordera")){
    $faq = ['question'=>[], 'answer'=>[]];

    while ($row = $result->fetch_assoc()){
        array_push($faq['question'], $row['question']);
        array_push($faq['answer'], $row['answer']);
    }
} else{
    echo("произошла ошибка запроса");
}

$iframe = '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A53668337e5785bee8127b031a1f8f4ba1a74ac0c23ed566812a0e5924e07e887&amp;source=constructor" width="1200" height="400" frameborder="0"></iframe>';
<?php
$title_info = "Админка карточки";

require $_SERVER['DOCUMENT_ROOT'] . "/travel/admin/admin_head.admin.php";
require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/info.config.php";
?>
<body>
<?php

//require $_SERVER['DOCUMENT_ROOT'] . "/travel/classes/Db.php";
//$sql_path = "SELECT img_path FROM cards WHERE id=1";
//$result = Db::getdbconnnect()->query($sql_path);
//while($row = $result -> fetch_assoc()){
//    echo("картинка успешно удалена");
//    echo("<br>");
////    unlink($_SERVER['DOCUMENT_ROOT'] . "/travel/" . $row['img_path']);
//    print_r($row);
//}
//$sql_path = "SELECT img FROM cards WHERE id=1";
//$result = Db::getdbconnnect()->query($sql_path);
?>
<section class="columns has-background-info is-centered">
    <div class="column is-half has-text-centered">
        <h3 class="title has-text-white"> Редактирование карточек </h3>
        <hr class="login-hr">
        <p class="is-size-5 has-text-white"> Введите контент, каждая карточка отдельно</p>
        <figure class="image is-128x128">
            <img src="../img/kangaroo.png" alt="" class="is-rounded">
        </figure>
        <form action="form/form_cards.php" method="post" class="has-background-light" enctype="multipart/form-data">
            <div class="field">
                <label class="radio label">
                    <input type="radio" name="choose" value="ins" required>
                    Занести данные
                </label>
                <label class="radio label">
                    <input type="radio" name="choose" value="del" required>
                    Удалить данные
                </label>
                <label class="radio label">
                    <input type="radio" name="choose" value="update" required>
                    Редактировать данные
                </label>
            </div>
            <div class="field">
                <div class="box">
                    <label for="id" class="label">Введите id карточки</label>
                    <input type="text" class="input is-medium" placeholder="id" name="id">

                    <label for="ordera" class="label">Введите номер карточки, желательно с gap</label>
                    <input type="text" class="input is-medium" placeholder="порядковый номер" name="ordera">

                    <label for="header" class="label">Введите заголовок карточки</label>
                    <input type="text" class="input is-medium" placeholder="заголовок" name="header">

                    <label for="alt" class="label">Введите тэги карточки через запятую</label>
                    <input type="text" class="input is-medium" placeholder="тэги" name="alt">


                    <label for="content" class="label"> Введите контент карточки </label>
                    <textarea name="content" cols="50" rows="15" class="is-size-4" style="padding: 10px"></textarea>
                    
                    <div class="field">
                        <label class="label"> Загрузите картинку
                            <div class="file is-centered">
                                <input type="file" class="file-input" name="picture">
                                <span class="file-cta">
                                    <i class="fas fa-upload"></i>
                                <span class="file-label"> Выберете файл </span>
                                </span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <button class="button is-success is-large is-pulled-right" type="submit">Отправить данные</button>

        </form>


    </div>
</section>

<div class="columns is-centered">
    <div class='table-container column is-half'>
        <table class='table is-bordered'>
            <thead>
            <tr>
                <th> ID </th>
                <th> IMG </th>
                <th> Header </th>
                <th> Content </th>
                <th> alt </th>
                <th> Order </th>
            </tr>
            </thead>
            <?php
            for($i = 0; $i < count($cards['id']); $i++){
                $img_path = "../" . $cards['img_path'][$i];
                echo "<tr>
                        <th>{$cards['id'][$i]}</th>
                        <th> 
                            <figure class='image is-128x128'>
                                <img src='$img_path'>
                            </figure> 
                        </th>
                        <th>{$cards['header'][$i]}</th>
                        <th>{$cards['content'][$i]}</th>
                        <th>{$cards['alt'][$i]}</th>
                        <th>{$cards['ordera'][$i]}</th>
                    </tr>";
            } ?>
        </table>
    </div>
</div>
</body>
</html>

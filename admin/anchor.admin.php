<?php

require $_SERVER['DOCUMENT_ROOT'] . "/travel/admin/admin_head.admin.php";
require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/info.config.php";
?>
<body>
<section class="columns has-background-info is-centered">
    <div class="column is-half has-text-centered">
        <h3 class="title has-text-white"> Редактирование ссылок </h3>
        <hr class="login-hr">
        <figure class="image is-128x128">
            <img src="../img/moscow.png" alt="" class="is-rounded">
        </figure>
        <form action="form/form_a.php" method="get" class="has-background-light">
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
                    <label for="id" class="label">Введите id ссылки</label>
                    <input type="text" class="input is-medium" placeholder="id" name="id">

                    <label for="anchor" class="label">Введите адрес ссылки</label>
                    <input type="text" class="input is-medium" placeholder="anchor" name="anchor">

                    <label for="content" class="label">Введите название ссылки</label>
                    <input type="text" class="input is-medium" placeholder="content" name="content">

                    <label for="ordera" class="label">Введите номер ссылки</label>
                    <input type="text" class="input is-medium" placeholder="order" name="ordera">

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
                <th> Anchor </th>
                <th> Content </th>
                <th> Order </th>
            </tr>
            </thead>
            <?php
            for($i = 0; $i < count($anchors_full['id']); $i++){
                echo "<tr>
                        <th>{$anchors_full['id'][$i]}</th>
                        <th>{$anchors_full['anchor'][$i]}</th>
                        <th>{$anchors_full['content'][$i]}</th>
                        <th>{$anchors_full['ordera'][$i]}</th>
                    </tr>";
            } ?>
        </table>
    </div>
</div>
</body>
</html>

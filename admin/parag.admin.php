<?php
$title_info = "Админка параграфа";

require $_SERVER['DOCUMENT_ROOT'] . "/travel/admin/admin_head.admin.php";
require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/info.config.php";
?>
<body>
<section class="columns has-background-info is-centered">
    <div class="column is-half has-text-centered">
        <h3 class="title has-text-white"> Редактирование параграфов </h3>
        <hr class="login-hr">
        <p class="is-size-5 has-text-white"> Введите контент, каждый параграф по отдельности, если не хотите, что бы они склеились</p>
        <figure class="image is-128x128">
            <img src="../img/moscow.png" alt="" class="is-rounded">
        </figure>
        <form action="form/form_p.php" method="get" class="has-background-light">
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
                    <label for="id" class="label">Введите id параграфа</label>
                    <input type="text" class="input is-medium" placeholder="id" name="id">

                    <label for="content" class="label"> Введите данные параграфа </label>
                    <textarea name="content" cols="50" rows="15" class="is-size-4" style="padding: 10px"></textarea>
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
                <th> Content </th>
            </tr>
            </thead>
            <?php
            for($i = 0; $i < count($parag_full['id']); $i++){
                echo "<tr>
                        <th>{$parag_full['id'][$i]}</th>
                        <th>{$parag_full['content'][$i]}</th>
                    </tr>";
            } ?>
        </table>
    </div>
</div>
</body>
</html>

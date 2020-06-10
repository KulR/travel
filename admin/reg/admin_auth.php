<?php
$title_info = "Авторизация";

require $_SERVER['DOCUMENT_ROOT'] . "/travel/admin/admin_head.admin.php";
require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/info.config.php";
?>
<body>
<section class="has-background-primary columns is-centered hero is-fullheight" id="main">
    <form action="../form/form_auth.php" method="post" class="column container is-one-quarter">
        <div class="field">
            <label for="name" class="label has-text-centered">Введите ваш логин</label>
            <div class="control">
                <input type="text" class="input is-medium" placeholder="имя" name="name" id="name">
            </div>
        </div>

        <div class="field">
            <label for="password" class="label">Введите пароль</label>
            <div class="control">
                <input type="password" class="input is-medium" placeholder="пароль" name="password" id="password">
            </div>
        </div>

        <button class="button is-link is-large is-pulled-right" type="submit" id="sub_auth">Отправить форму</button>
    </form>

</section>
<style>

</style>
</body>
</html>
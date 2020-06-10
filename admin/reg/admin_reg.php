<?php
$title_info = "Регистрация";

require $_SERVER['DOCUMENT_ROOT'] . "/travel/admin/admin_head.admin.php";
require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/info.config.php";
?>
<body>
<section class="has-background-success columns is-centered hero is-fullheight" id="main">
    <form action="../form/form_reg.php" method="post" class="column container is-one-quarter">
        <div class="field">
            <label for="name" class="label has-text-centered">Введите ваше имя</label>
            <div class="control">
                <input type="text" class="input is-medium" placeholder="имя" name="name" id="name">
            </div>
            <p class="help is-size-6 has-text-centered"> Имя пользователя не должно быть короче 3 символов </p>
        </div>

        <div class="field">
            <label for="email" class="label">Введите почту</label>
            <div class="control">
                <input type="email" class="input is-medium" placeholder="email" name="email" id="email">
            </div>
        </div>

        <div class="field">
            <label for="password" class="label">Введите пароль</label>
            <div class="control">
                <input type="password" class="input is-medium" placeholder="пароль" name="password" id="password">
            </div>
            <p class="help is-size-6 has-text-centered">Пароль не меньше 7 символов </p>
        </div>

        <div class="field">
            <label for="dubl" class="label">Подтвердите пароль</label>
            <div class="control">
                <input type="password" class="input is-medium" placeholder="Повтор пароля" name="dubl" id="dubl">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <label for="quest" class="radio">
                    <input type="radio" name="quest" required>
                    Yes! Я согласен!
                </label>
            </div>
        </div>

        <button class="button is-link is-large is-pulled-right" type="submit" id="sub">Отправить форму</button>
    </form>

</section>
<style>
    .field:first-child{
        margin-top: 4em;
    }
</style>
</body>
</html>
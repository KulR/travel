<?php
session_start();
    $title_info = "Главная страница Админки";
    require $_SERVER['DOCUMENT_ROOT'] . "/travel/admin/admin_head.admin.php";

    ?>

<body>


<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-menu">
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <?php
                    if(isset($_SESSION['login'])){
                        echo "<a class='button is-primary' href='reg/admin_logout.php'>
                        <strong>Выход</strong>
                    </a>";
                    } else {
                        echo "<a class='button is-primary' href='reg/admin_reg.php'>
                        <strong>Регистрация</strong>
                    </a>
                    <a class='button is-light' href='reg/admin_auth.php'>
                        Авторизация
                    </a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</nav>

<section class="has-background-link columns">
    <div class="column is-full has-text-white">
        <h1 class='label is-size-2 has-text-centered'>Hello
        <?php
        if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
        } else {
        echo "Anonim";
        } ?> </h1>
        <h3 class="is-size-3 has-text-centered">Добро пожаловать в CMS систему</h3>
    </div>
</section>

<div class="columns">
    <div class="column has-text-centered is-full">
        <?php if(isset($_SESSION['login'])){
        echo "<a href='parag.admin.php'>
            <button class='button is-size-4 is-danger'> Редактировать параграфы</button>
        </a>

        <a href='cards.admin.php'>
            <button class='button is-size-4 is-danger'> Редактировать карточки</button>
        </a>

        <a href='anchor.admin.php'>
            <button class='button is-size-4 is-danger'> Редактировать ссылки</button>
        </a>";
        } else {
            echo "<a href='reg/admin_auth.php'>
                    <button class='button is-size-4 is-danger'> Для редактирования контента нужно авторизоваться</button>
                </a>";
        } ?>
    </div>
</div>


</body>
</html>

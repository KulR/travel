<?php
    require "config/info.config.php";
    $title = 'Сайт про путешествия!';
    $comma = implode(", ", $keywords);
    $keywords = $comma;
    require "includes/header.inc.php";
?>

<body>
    <div class="wrapper">
        <header class="header">
            <div id="logo">
                <img src="img/logo.png" alt="лого, компания, Nordic">
            </div>
            <nav class="nav">
                <?php
                    require ($_SERVER['DOCUMENT_ROOT'] . "/travel/includes/anchors.inc.php");
                ?>
            </nav>
        </header>

        <div class="wrap-form animated">
            <i class="fa fa-times" aria-hidden="true"></i>
            <form action="" method="POST" class="form">
                <h3> Введите ваши данные</h3>
                <p class="error"> </p>
                <p class="error_name"></p>
                <p class="error_email"></p>
                <p class="error_tel"></p>
                <input type="text" name="name" placeholder="login">
                <input type="email" name="email" placeholder="email">
                <input type="tel" name="tel" placeholder="phone">
                <input type="submit" value="отправить">
            </form>
        </div>
        
        <div class="side-panel">
            <ul>
                <?php
                require ($_SERVER['DOCUMENT_ROOT'] . "/travel/includes/anchors.inc.php");
                ?>
            </ul>
        </div>
        
        <div class="promo" id="main">
            <h1 class="promo__h1">Только красивые путешествия</h1>
            <a href="#">
                <button class="promo__button"> Присоединяйся </button>
            </a>

            <div class="soc_icons">
                <a href="https://vk.com">
                    <div class="soc_icons__icon soc_icons__icon_vk "></div>
                </a>
                <a href="https://facebook.com">
                    <div class="soc_icons__icon soc_icons__icon_face"></div>
                </a>
                <a href="https://instagram.com">
                    <div class="soc_icons__icon soc_icons__icon_inst"></div>
                </a>
            </div>
        </div>

        <div class="banner-header">
            <h3 class="banner-header__h3">Путешествуй красиво</h3>
        </div>

        <div class="info">
            <?php
            require $_SERVER['DOCUMENT_ROOT'] . "/travel/includes/parag.inc.php";
            ?>
        </div>

        <div class="banner-header">
            <h3 class="banner-header__h3">Причины воспользоваться нашими услугами</h3>
        </div>
        <div class="reasons" id="about">
            <ul class="reasons__ul">
                <?php
                require $_SERVER['DOCUMENT_ROOT'] . "/travel/includes/reasons.inc.php";
                ?>
            </ul>
        </div>
        <div class="cards">
            <?php
            require $_SERVER['DOCUMENT_ROOT'] . "/travel/includes/cards.inc.php";
            ?>
        </div>
        <div class="wrap-panel">
            <?php
            require $_SERVER['DOCUMENT_ROOT'] . "/travel/includes/faq.inc.php";
            ?>
        </div>
        <?php
            echo "$iframe";
        ?>

        <?php
            require "includes/footer.inc.php";
        ?>
    </div>
</body>

</html>
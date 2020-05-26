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
                foreach ($anchors as $item => [$anchor, $name]){
                    echo ("<a href='$anchor' class='nav__a'> $name </a>");
                }
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
                <li><a href="#main"> Главная</a></li>
                <li><a href="#about"> О нас </a></li>
                <li><a href="#contact"> Контакты </a></li>
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
                for($i = 0; $i < count($parag); $i++){
                    echo "<p class='info__p'>$parag[$i]</p>";
                }
            ?>
        </div>

        <div class="banner-header">
            <h3 class="banner-header__h3">Причины воспользоваться нашими услугами</h3>
        </div>
        <div class="reasons" id="about">
            <ul class="reasons__ul">
                <?php
                for ($i=0; $i < count($reasons); $i++) {
                    echo " <li class='reasons__li'> {$reasons[$i][0]}  {$reasons[$i][1]}</li>";
                }
                ?>
            </ul>
        </div>
        <div class="cards">
            <?php
            foreach ($cards as $country => [$image, $header, $paragraph]){
                echo "<div class='card'>
                <div class='card__img_wrap'>
                    <img src=$image alt='' class='card__img'>
                </div>
                <h5 class='card__h5'>$header</h5>
                <div class='card__line'></div>
                <p class='card__p'> $paragraph</p>
            </div>";
            }
            ?>
        </div>
        <div class="wrap-panel">
            <?php
            for ($i=0; $i < count($faq); $i++) {
                echo "<div class='wrapper-faq'>
                    <div class='faq-panel'><h5>{$faq[$i][0]}</h5></div>
                    <div class='faq-answer'><p>{$faq[$i][1]}</p></div>
                </div>";
            }
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
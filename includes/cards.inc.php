<?php

require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/info.config.php";

for($i = 0; $i < count($cards['country']); $i++){
    echo "<div class='card'>
                <div class='card__img_wrap'>
                    <img src={$cards['img_path'][$i]} alt='' class='card__img'>
                </div>
                <h5 class='card__h5'>{$cards['title'][$i]}</h5>
                <div class='card__line'></div>
                <p class='card__p'> {$cards['content'][$i]}</p>
            </div>";
}
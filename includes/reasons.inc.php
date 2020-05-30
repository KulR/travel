<?php

require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/info.config.php";

for ($i=0; $i < count($reasons['reason']); $i++) {
    echo " <li class='reasons__li'> {$reasons['emoji'][$i]}  {$reasons['reason'][$i]}</li>";
}
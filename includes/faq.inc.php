<?php

require $_SERVER['DOCUMENT_ROOT'] . "/travel/config/info.config.php";

for ($i=0; $i < count($faq['question']); $i++) {
    echo "<div class='wrapper-faq'>
                    <div class='faq-panel'><h5>{$faq['question'][$i]}</h5></div>
                    <div class='faq-answer'><p>{$faq['answer'][$i]}</p></div>
                </div>";
}